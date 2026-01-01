<form method="POST" action="/predict-transport">
    @csrf

    <input type="number" name="travel_time" placeholder="Waktu Tempuh (menit)">
    <input type="number" name="frequency" placeholder="Frekuensi">
    <input type="number" name="cost" placeholder="Biaya">

    <button type="submit">Prediksi Cluster</button>
</form>
