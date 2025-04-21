<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        $sql = "INSERT INTO health_services (name, address, latitude, longitude)
                VALUES ('$name', '$address', $latitude, $longitude)";
        pg_query($conn, $sql);
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        $sql = "UPDATE health_services SET name='$name', address='$address', latitude=$latitude, longitude=$longitude WHERE id=$id";
        pg_query($conn, $sql);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM health_services WHERE id=$id";
        pg_query($conn, $sql);
    }
}

$result = pg_query($conn, "SELECT * FROM health_services");

if (!$result) {
    die("Query error: " . pg_last_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Layanan Kesehatan</title>
    <script>function confirmDelete() { return confirm("Yakin ingin menghapus data ini?"); }</script>
</head>
<body>

<h1>Data Layanan Kesehatan di Kabupaten Banyumas</h1>
<a href="index.php"><button>Halaman Utama</button></a>

<table border="1">
    <tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Latitude</th><th>Longitude</th><th>Aksi</th></tr>
    <?php while ($row = pg_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['address'] ?></td>
        <td><?= $row['latitude'] ?></td>
        <td><?= $row['longitude'] ?></td>
        <td>
            <form action="edit.php" method="get" style="display:inline;">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <button type="submit">Edit</button>
            </form>
            <form action="crud.php" method="post" onsubmit="return confirmDelete();" style="display:inline;">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <button type="submit" name="delete">Delete</button>
            </form>
        </td>
    </tr>
    <?php } ?>
</table>

<h2>Tambah Data Baru</h2>
<form action="crud.php" method="post">
    <input type="text" name="name" placeholder="Nama" required>
    <input type="text" name="address" placeholder="Alamat" required>
    <input type="number" step="any" name="latitude" placeholder="Latitude" required>
    <input type="number" step="any" name="longitude" placeholder="Longitude" required>
    <button type="submit" name="add">Tambah</button>
</form>

</body>
</html>

<?php pg_close($conn); ?>
