<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Peta Kecamatan dan Layanan Kesehatan Banyumas</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>#map { height: 700px; }</style>
</head>
<body>
<h1>Peta Kecamatan dan Layanan Kesehatan Kabupaten Banyumas</h1>
<a href="crud.php"><button>Data</button></a>
<div id="map"></div>
<script src="data/kecamatan.json"></script>
<script>
    const map = L.map('map').setView([-7.45, 109.16], 11);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; OpenStreetMap'
    }).addTo(map);
    L.geoJSON(kecamatan, { style: { color: 'blue', weight: 2 } }).addTo(map);

    //puskesmas
	let marker = L.marker([-7.6125345138605205, 109.40434621484617]).addTo(map);
    let = L.marker([-7.6085137311835505, 109.35021055130862]).addTo(map).bindPopup("<b>Puskesmas Sumpiuh</b>");
    let = L.marker([-7.592157565386409, 109.27237859351574]).addTo(map).bindPopup("<b>Puskesmas Kemranjen</b>");
    let = L.marker([-7.523511048739054, 109.32867937376487]).addTo(map).bindPopup("<b>Puskesmas Somagede</b>");
    let = L.marker([-7.516931508005921, 109.29553541177593]).addTo(map).bindPopup("<b>Puskesmas Banyumas</b>");
    let = L.marker([-7.473718410653488, 109.29753443473015]).addTo(map).bindPopup("<b>Puskesmas Kalibagor</b>");
    let = L.marker([-7.456882048575294, 109.29997427642321]).addTo(map).bindPopup("<b>Puskesmas Sokaraja</b>");
    let = L.marker([-7.488462766960271, 109.21430576734075]).addTo(map).bindPopup("<b>Puskesmas Patikraja</b>");
    let = L.marker([-7.5346606232189846, 109.12169295966336]).addTo(map).bindPopup("<b>Puskesmas Jatilawang</b>");
    let = L.marker([-7.516474473260206, 109.05258228168354]).addTo(map).bindPopup("<b>Puskesmas Wangon</b>");
    let = L.marker([-7.493517319562649, 109.1213084124087]).addTo(map).bindPopup("<b>Puskesmas Purwojati</b>");
    let = L.marker([-7.44381326907141, 108.9557856686755]).addTo(map).bindPopup("<b>Puskesmas Lumbir</b>");
    let = L.marker([-7.373940567224708, 108.98127946925541]).addTo(map).bindPopup("<b>Puskesmas Gumelar</b>");
    let = L.marker([-7.409203267791356, 109.08175440792256]).addTo(map).bindPopup("<b>Puskesmas Ajibarang</b>");
    let = L.marker([-7.534589522091428, 109.18210255212941]).addTo(map).bindPopup("<b>Puskesmas Rawalo</b>");
    let = L.marker([-7.558350903708179, 109.22013102838723]).addTo(map).bindPopup("<b>Puskesmas Kaliwedi</b>");
    let = L.marker([-7.398064006364393, 109.12299258436357]).addTo(map).bindPopup("<b>Puskesmas Cilongok</b>");
    let = L.marker([-7.36638872582986, 109.07280425622187]).addTo(map).bindPopup("<b>Puskesmas Pekuncen</b>");
    let = L.marker([-7.383974041551542, 109.21940192484008]).addTo(map).bindPopup("<b>Puskesmas Dawuhan</b>");
    let = L.marker([-7.3449439506115155, 109.23510552657483]).addTo(map).bindPopup("<b>Puskesmas Baturaden</b>") ;
    //menambahkan pop up
	marker.bindPopup("<b>Puskesmas Tambak.").openPopup();

</script>
<?php
include 'db_connection.php';
$result = pg_query($conn, "SELECT * FROM health_services");
while ($row = pg_fetch_assoc($result)) {
        $name = $row['name'];
        $latitude = $row['latitude'];
        $longitude = $row['longitude'];
        echo "
        <script>
            var marker = L.marker([$latitude, $longitude]).addTo(map);
            marker.bindPopup('<b>$name</b>');
        </script>
        ";
    }

    pg_close($conn);
    ?>
</body>
</html>