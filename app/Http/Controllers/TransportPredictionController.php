<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class TransportPredictionController extends Controller
{
    public function predict(Request $request)
    {
        $request->validate([
            'travel_time' => 'required|numeric',
            'frequency'   => 'required|numeric',
            'cost'        => 'required|numeric',
        ]);

        $pythonPath = 'python'; // atau full path python.exe
        $scriptPath = base_path('../transport-ml/predict.py');

        $process = new Process([
            $pythonPath,
            $scriptPath,
            $request->travel_time,
            $request->frequency,
            $request->cost
        ]);

        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $cluster = trim($process->getOutput());

        return response()->json([
            'cluster' => $cluster
        ]);
    }
}
