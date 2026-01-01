<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>FlowSync Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-4xl mx-auto mt-10">
    <h1 class="text-3xl font-bold text-center mb-6">FlowSync Dashboard</h1>

    <!-- Error -->
    @if ($errors->any())
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 p-3 rounded">
            {{ $errors->first() }}
        </div>
    @endif

    <!-- Form Input -->
    <div class="bg-white p-6 rounded shadow">
        <form method="POST" action="/predict-transport"
              class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @csrf

            <input type="number" name="travel_time" placeholder="Waktu Tempuh (menit)"
                   class="border p-2 rounded" value="{{ old('travel_time') }}" required>

            <input type="number" name="frequency" placeholder="Frekuensi Perjalanan"
                   class="border p-2 rounded" value="{{ old('frequency') }}" required>

            <input type="number" name="cost" placeholder="Biaya Perjalanan"
                   class="border p-2 rounded" value="{{ old('cost') }}" required>

            <button class="md:col-span-3 bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Prediksi Cluster
            </button>
        </form>
    </div>

    <!-- Hasil -->
    @isset($cluster)
        <div class="mt-6 bg-green-100 border border-green-400 p-4 rounded">
            <h2 class="text-xl font-semibold">Hasil Clustering</h2>
            <p class="mt-2">Cluster: <strong>{{ $cluster }}</strong></p>
            <p>Kategori: <strong>{{ $label }}</strong></p>
        </div>
    @endisset

    <!-- Keterangan -->
    <div class="mt-6 bg-white p-4 rounded shadow">
        <h3 class="font-semibold mb-2">Keterangan Cluster</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
            <li><b>Cluster 0</b>: Waktu tempuh pendek, biaya rendah</li>
            <li><b>Cluster 1</b>: Waktu & biaya menengah</li>
            <li><b>Cluster 2</b>: Waktu tempuh lama, biaya tinggi</li>
        </ul>
    </div>
</div>

</body>
</html>
