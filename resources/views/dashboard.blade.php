<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlowSync Dashboard - Komuter Intelligence System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .card-hover:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
        .progress-bar {
            transition: width 1s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

<!-- Header/Navbar -->
<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <i class="fas fa-sync-alt text-primary-600 text-2xl mr-3"></i>
                    <span class="text-xl font-bold text-gray-800">FlowSync</span>
                    <span class="ml-2 px-2 py-1 bg-primary-100 text-primary-700 text-xs rounded-full">Web</span>
                </div>
                <div class="hidden md:ml-6 md:flex md:space-x-8">
                    <a href="#" class="border-primary-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                    </a>
                    <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        <i class="fas fa-history mr-2"></i> Riwayat
                    </a>
                    <a href="#" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        <i class="fas fa-chart-bar mr-2"></i> Analitik
                    </a>
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <button class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        <i class="fas fa-user mr-2"></i> Admin Panel
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <!-- Page Header -->
    <div class="mb-8 fade-in">
        <h1 class="text-3xl font-bold text-gray-900">Dashboard Analisis Perjalanan Komuter</h1>
        <p class="mt-2 text-gray-600">Sistem prediksi clustering berbasis Machine Learning untuk analisis pola perjalanan</p>
        
        <!-- Stats Cards -->
        <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-3">
            <div class="bg-white overflow-hidden shadow rounded-lg card-hover">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-100 rounded-md p-3">
                            <i class="fas fa-clock text-blue-600 text-xl"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Rata-rata Waktu Tempuh
                                </dt>
                                <dd class="text-lg font-semibold text-gray-900">
                                    45.2 menit
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow rounded-lg card-hover">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                            <i class="fas fa-chart-line text-green-600 text-xl"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Total Analisis
                                </dt>
                                <dd class="text-lg font-semibold text-gray-900">
                                    1,248 data
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white overflow-hidden shadow rounded-lg card-hover">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-purple-100 rounded-md p-3">
                            <i class="fas fa-robot text-purple-600 text-xl"></i>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    Akurasi Model
                                </dt>
                                <dd class="text-lg font-semibold text-gray-900">
                                    94.7%
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Left Column - Form Input -->
        <div class="lg:col-span-2">
            <!-- Form Card -->
            <div class="bg-white overflow-hidden shadow rounded-lg fade-in">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center mb-6">
                        <div class="flex-shrink-0 bg-primary-100 rounded-md p-2 mr-3">
                            <i class="fas fa-calculator text-primary-600 text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Prediksi Cluster Perjalanan</h3>
                            <p class="mt-1 text-sm text-gray-500">Masukkan data perjalanan untuk analisis clustering</p>
                        </div>
                    </div>
                    
                    <!-- Error Messages -->
                    @if ($errors->any())
                    <div class="mb-6 bg-red-50 border-l-4 border-red-400 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-triangle text-red-400"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-red-700">
                                    {{ $errors->first() }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    <!-- Form -->
                    <form method="POST" action="/predict-transport" id="predictionForm" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Travel Time -->
                            <div>
                                <label for="travel_time" class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="fas fa-clock mr-2 text-gray-400"></i>Waktu Tempuh (menit)
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <input type="number" name="travel_time" id="travel_time" 
                                           class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 pr-3 py-3 sm:text-sm border-gray-300 rounded-md" 
                                           placeholder="Contoh: 45"
                                           value="{{ old('travel_time') }}" 
                                           min="1" max="300" required>
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">⏱</span>
                                    </div>
                                </div>
                                <div class="mt-2 flex justify-between text-xs text-gray-500">
                                    <span>Pendek (<30)</span>
                                    <span>Sedang (30-60)</span>
                                    <span>Panjang (>60)</span>
                                </div>
                            </div>
                            
                            <!-- Frequency -->
                            <div>
                                <label for="frequency" class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="fas fa-redo mr-2 text-gray-400"></i>Frekuensi Perjalanan
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <input type="number" name="frequency" id="frequency" 
                                           class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 pr-3 py-3 sm:text-sm border-gray-300 rounded-md" 
                                           placeholder="Contoh: 12"
                                           value="{{ old('frequency') }}" 
                                           min="1" max="31" required>
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">🔄</span>
                                    </div>
                                </div>
                                <div class="mt-2 flex justify-between text-xs text-gray-500">
                                    <span>Jarang (1-10)</span>
                                    <span>Sedang (11-20)</span>
                                    <span>Sering (>20)</span>
                                </div>
                            </div>
                            
                            <!-- Cost -->
                            <div>
                                <label for="cost" class="block text-sm font-medium text-gray-700 mb-2">
                                    <i class="fas fa-money-bill-wave mr-2 text-gray-400"></i>Biaya Perjalanan (Rp)
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">Rp</span>
                                    </div>
                                    <input type="number" name="cost" id="cost" 
                                           class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 pr-3 py-3 sm:text-sm border-gray-300 rounded-md" 
                                           placeholder="Contoh: 25000"
                                           value="{{ old('cost') }}" 
                                           min="1000" max="500000" required>
                                </div>
                                <div class="mt-2 flex justify-between text-xs text-gray-500">
                                    <span>Murah (<10k)</span>
                                    <span>Sedang (10k-50k)</span>
                                    <span>Mahal (>50k)</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit" id="submitBtn" 
                                    class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition duration-150 ease-in-out">
                                <i class="fas fa-brain mr-2"></i> Jalankan Prediksi Clustering
                            </button>
                        </div>
                        
                        <!-- Loading Indicator (Hidden by default) -->
                        <div id="loadingIndicator" class="hidden text-center py-4">
                            <div class="inline-flex items-center">
                                <div class="spinner-border animate-spin inline-block w-6 h-6 border-2 border-primary-500 border-t-transparent rounded-full mr-3"></div>
                                <span class="text-gray-600">Memproses data dengan model Machine Learning...</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Result Card (Conditional) -->
            @isset($cluster)
            <div class="mt-6 bg-white overflow-hidden shadow rounded-lg fade-in">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center mb-6">
                        <div class="flex-shrink-0 bg-green-100 rounded-md p-2 mr-3">
                            <i class="fas fa-chart-pie text-green-600 text-lg"></i>
                        </div>
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Hasil Analisis Clustering</h3>
                            <p class="mt-1 text-sm text-gray-500">Data perjalanan telah diklasifikasikan ke dalam cluster berikut</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Cluster Info -->
                        <div class="bg-gray-50 p-5 rounded-lg">
                            <h4 class="text-md font-semibold text-gray-800 mb-3">Detail Cluster</h4>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Nomor Cluster:</span>
                                    <span class="px-3 py-1 rounded-full text-white font-bold 
                                        {{ $cluster == 0 ? 'bg-blue-500' : ($cluster == 1 ? 'bg-yellow-500' : 'bg-red-500') }}">
                                        Cluster {{ $cluster }}
                                    </span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Kategori:</span>
                                    <span class="text-lg font-bold text-gray-800">{{ $label }}</span>
                                </div>
                                <div class="pt-4 border-t border-gray-200">
                                    <h5 class="text-sm font-medium text-gray-700 mb-2">Karakteristik Cluster:</h5>
                                    <ul class="text-sm text-gray-600 space-y-1">
                                        @if($cluster == 0)
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-0.5 mr-2"></i>
                                            <span>Waktu tempuh relatif pendek</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-0.5 mr-2"></i>
                                            <span>Biaya perjalanan rendah</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-green-500 mt-0.5 mr-2"></i>
                                            <span>Frekuensi perjalanan optimal</span>
                                        </li>
                                        @elseif($cluster == 1)
                                        <li class="flex items-start">
                                            <i class="fas fa-info-circle text-yellow-500 mt-0.5 mr-2"></i>
                                            <span>Waktu dan biaya menengah</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-info-circle text-yellow-500 mt-0.5 mr-2"></i>
                                            <span>Frekuensi perjalanan sedang</span>
                                        </li>
                                        @else
                                        <li class="flex items-start">
                                            <i class="fas fa-exclamation-circle text-red-500 mt-0.5 mr-2"></i>
                                            <span>Waktu tempuh relatif lama</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-exclamation-circle text-red-500 mt-0.5 mr-2"></i>
                                            <span>Biaya perjalanan tinggi</span>
                                        </li>
                                        <li class="flex items-start">
                                            <i class="fas fa-exclamation-circle text-red-500 mt-0.5 mr-2"></i>
                                            <span>Perlu optimasi rute</span>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Visualization -->
                        <div class="bg-gray-50 p-5 rounded-lg">
                            <h4 class="text-md font-semibold text-gray-800 mb-3">Visualisasi Cluster</h4>
                            <div class="flex items-center justify-center h-full">
                                <div class="relative w-48 h-48">
                                    <!-- Cluster visualization circle -->
                                    <div class="absolute inset-0 rounded-full border-4 
                                        {{ $cluster == 0 ? 'border-blue-200 bg-blue-50' : 
                                           ($cluster == 1 ? 'border-yellow-200 bg-yellow-50' : 
                                           'border-red-200 bg-red-50') }}">
                                    </div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="text-center">
                                            <div class="text-4xl font-bold 
                                                {{ $cluster == 0 ? 'text-blue-600' : 
                                                   ($cluster == 1 ? 'text-yellow-600' : 
                                                   'text-red-600') }}">
                                                {{ $cluster }}
                                            </div>
                                            <div class="text-sm text-gray-600 mt-2">Cluster</div>
                                        </div>
                                    </div>
                                    
                                    <!-- Indicators -->
                                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2">
                                        <div class="bg-white rounded-full p-1 shadow">
                                            <i class="fas fa-clock text-gray-400"></i>
                                        </div>
                                    </div>
                                    <div class="absolute top-1/2 -right-2 transform -translate-y-1/2">
                                        <div class="bg-white rounded-full p-1 shadow">
                                            <i class="fas fa-money-bill-wave text-gray-400"></i>
                                        </div>
                                    </div>
                                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                                        <div class="bg-white rounded-full p-1 shadow">
                                            <i class="fas fa-redo text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="mt-6 pt-6 border-t border-gray-200 flex justify-between">
                        <button onclick="resetForm()" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            <i class="fas fa-redo mr-2"></i> Analisis Baru
                        </button>
                        <div class="space-x-3">
                            <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fas fa-download mr-2"></i> Ekspor Hasil
                            </button>
                            <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                <i class="fas fa-chart-bar mr-2"></i> Detail Analitik
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endisset
        </div>
        
        <!-- Right Column - Information -->
        <div class="space-y-6">
            <!-- Cluster Information -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                        <i class="fas fa-info-circle text-primary-600 mr-2"></i>Keterangan Cluster
                    </h3>
                    <div class="space-y-4">
                        <!-- Cluster 0 -->
                        <div class="border-l-4 border-blue-500 bg-blue-50 p-4 rounded-r-lg">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-blue-100 rounded-md p-2 mr-3">
                                    <span class="text-blue-800 font-bold">0</span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-blue-800">Cluster 0: Optimal</h4>
                                    <p class="mt-1 text-sm text-blue-700">Waktu tempuh pendek, biaya rendah, efisiensi tinggi</p>
                                    <div class="mt-2 text-xs text-blue-600">
                                        <span class="inline-block bg-blue-100 rounded px-2 py-1 mr-2">
                                            <i class="fas fa-clock mr-1"></i> <30 menit
                                        </span>
                                        <span class="inline-block bg-blue-100 rounded px-2 py-1">
                                            <i class="fas fa-money-bill-wave mr-1"></i> <Rp 20k
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Cluster 1 -->
                        <div class="border-l-4 border-yellow-500 bg-yellow-50 p-4 rounded-r-lg">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-yellow-100 rounded-md p-2 mr-3">
                                    <span class="text-yellow-800 font-bold">1</span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-yellow-800">Cluster 1: Standar</h4>
                                    <p class="mt-1 text-sm text-yellow-700">Waktu dan biaya menengah, frekuensi normal</p>
                                    <div class="mt-2 text-xs text-yellow-600">
                                        <span class="inline-block bg-yellow-100 rounded px-2 py-1 mr-2">
                                            <i class="fas fa-clock mr-1"></i> 30-60 menit
                                        </span>
                                        <span class="inline-block bg-yellow-100 rounded px-2 py-1">
                                            <i class="fas fa-money-bill-wave mr-1"></i> Rp 20k-50k
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Cluster 2 -->
                        <div class="border-l-4 border-red-500 bg-red-50 p-4 rounded-r-lg">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-red-100 rounded-md p-2 mr-3">
                                    <span class="text-red-800 font-bold">2</span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-red-800">Cluster 2: Perlu Optimasi</h4>
                                    <p class="mt-1 text-sm text-red-700">Waktu tempuh lama, biaya tinggi, perlu evaluasi</p>
                                    <div class="mt-2 text-xs text-red-600">
                                        <span class="inline-block bg-red-100 rounded px-2 py-1 mr-2">
                                            <i class="fas fa-clock mr-1"></i> >60 menit
                                        </span>
                                        <span class="inline-block bg-red-100 rounded px-2 py-1">
                                            <i class="fas fa-money-bill-wave mr-1"></i> >Rp 50k
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- System Info -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                        <i class="fas fa-cogs text-gray-600 mr-2"></i>Informasi Sistem
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Backend Framework:</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Laravel 10
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">ML Module:</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Python Scikit-learn
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Clustering Algorithm:</span>
                            <span class="text-xs font-medium text-gray-800">K-Means</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">API Status:</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <i class="fas fa-circle text-green-500 mr-1" style="font-size: 6px;"></i> Connected
                            </span>
                        </div>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <h4 class="text-sm font-medium text-gray-700 mb-3">Distribusi Data Terkini</h4>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-xs text-gray-600 mb-1">
                                    <span>Cluster 0 (Optimal)</span>
                                    <span>42%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full progress-bar" style="width: 42%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs text-gray-600 mb-1">
                                    <span>Cluster 1 (Standar)</span>
                                    <span>35%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full progress-bar" style="width: 35%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs text-gray-600 mb-1">
                                    <span>Cluster 2 (Perlu Optimasi)</span>
                                    <span>23%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-red-600 h-2 rounded-full progress-bar" style="width: 23%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                        <i class="fas fa-bolt text-yellow-500 mr-2"></i>Aksi Cepat
                    </h3>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="#" class="inline-flex flex-col items-center justify-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-150 ease-in-out">
                            <i class="fas fa-file-import text-blue-500 text-xl mb-2"></i>
                            <span class="text-sm font-medium text-gray-700">Import Data</span>
                        </a>
                        <a href="#" class="inline-flex flex-col items-center justify-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-150 ease-in-out">
                            <i class="fas fa-chart-area text-green-500 text-xl mb-2"></i>
                            <span class="text-sm font-medium text-gray-700">Visualisasi</span>
                        </a>
                        <a href="#" class="inline-flex flex-col items-center justify-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-150 ease-in-out">
                            <i class="fas fa-file-export text-purple-500 text-xl mb-2"></i>
                            <span class="text-sm font-medium text-gray-700">Ekspor Laporan</span>
                        </a>
                        <a href="#" class="inline-flex flex-col items-center justify-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-150 ease-in-out">
                            <i class="fas fa-sliders-h text-red-500 text-xl mb-2"></i>
                            <span class="text-sm font-medium text-gray-700">Pengaturan</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-white border-t border-gray-200 mt-12">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="text-gray-500 text-sm">
                <p>© 2024 FlowSync Web. All rights reserved.</p>
                <p class="mt-1">Sistem Analisis Perjalanan Komuter berbasis Machine Learning</p>
            </div>
            <div class="mt-4 md:mt-0 flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-python"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fab fa-laravel"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript for interactivity -->
<script>
    // Form submission handling
    document.getElementById('predictionForm').addEventListener('submit', function(e) {
        // Show loading indicator
        document.getElementById('loadingIndicator').classList.remove('hidden');
        document.getElementById('submitBtn').disabled = true;
        document.getElementById('submitBtn').innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Memproses...';
        
        // Form will submit normally
    });
    
    // Reset form function
    function resetForm() {
        document.getElementById('predictionForm').reset();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    
    // Input validation
    document.querySelectorAll('input[type="number"]').forEach(input => {
        input.addEventListener('input', function() {
            const min = parseInt(this.min);
            const max = parseInt(this.max);
            const value = parseInt(this.value);
            
            if (this.value !== '') {
                if (value < min) this.value = min;
                if (value > max) this.value = max;
            }
        });
    });
    
    // Auto-suggest based on typical values
    document.getElementById('travel_time').addEventListener('focus', function() {
        if (!this.value) {
            this.placeholder = "30-60 menit tipikal";
        }
    });
    
    document.getElementById('cost').addEventListener('focus', function() {
        if (!this.value) {
            this.placeholder = "10000-50000 tipikal";
        }
    });
</script>

</body>
</html>