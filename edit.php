<?php
include 'db_connection.php';
$id = $_GET['id'] ?? 0;
$result = pg_query($conn, "SELECT * FROM health_services WHERE id=$id");

if (pg_num_rows($result) == 0) {
    die("Data tidak ditemukan.");
}

$data = pg_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Edit Data</title></head>
<body>

<h1>Edit Data Layanan Kesehatan</h1>
<form action="crud.php" method="post">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <label>Nama:</label><input type="text" name="name" value="<?= htmlspecialchars($data['name']) ?>" required><br>
    <label>Alamat:</label><input type="text" name="address" value="<?= htmlspecialchars($data['address']) ?>" required><br>
    <label>Latitude:</label><input type="number" step="any" name="latitude" value="<?= $data['latitude'] ?>" required><br>
    <label>Longitude:</label><input type="number" step="any" name="longitude" value="<?= $data['longitude'] ?>" required><br>
    <button type="submit" name="update">Simpan</button>
    <a href="crud.php"><button type="button">Kembali</button></a>
</form>

</body>
</html>

<?php pg_close($conn); ?>
