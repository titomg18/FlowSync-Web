<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransportPredictionController extends Controller
{
    public function predict(Request $request)
    {
        // 1️⃣ Validasi input
        $request->validate([
            'travel_time' => 'required|numeric',
            'frequency'   => 'required|numeric',
            'cost'        => 'required|numeric',
        ]);

        // 2️⃣ Kirim request ke FastAPI
        $response = Http::post('http://127.0.0.1:8001/predict', [
            'distance'  => $request->travel_time,
            'frequency' => $request->frequency,
            'cost'      => $request->cost,
        ]);

        // 3️⃣ Error handling Python API
        if (!$response->successful()) {
            return back()->withErrors([
                'prediction' => 'Gagal menghubungi service prediksi'
            ]);
        }

        // 4️⃣ Ambil cluster
        $cluster = $response->json('cluster');

        // 5️⃣ Mapping cluster ke label
        $label = match ($cluster) {
            0 => 'Komuter Pendek (Biaya Rendah)',
            1 => 'Komuter Menengah',
            2 => 'Komuter Jauh (Biaya Tinggi)',
            default => 'Tidak Diketahui',
        };

        // 6️⃣ Return ke view
        return view('dashboard', [
            'cluster' => $cluster,
            'label'   => $label,
            'input'   => $request->all()
        ]);
    }
}
