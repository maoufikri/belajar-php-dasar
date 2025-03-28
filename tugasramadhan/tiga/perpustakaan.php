<?php
require_once "koneksi.php";

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];

    $query = "INSERT INTO books (title, author, year) VALUES ('$title', '$author', '$year')";
    if ($conn->query($query)) {
        echo "Buku berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan buku: " . $conn->error;
    }
}

$search = "";
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $query = "SELECT * FROM books WHERE title LIKE '%$search%' OR author LIKE '%$search%'";
} else {
    $query = "SELECT * FROM books";
}

$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>
<body>
    <h2>Tambah Buku</h2>
    <form method="POST">
        <input type="text" name="title" placeholder="Judul Buku" required>
        <input type="text" name="author" placeholder="Penulis" required>
        <input type="number" name="year" placeholder="Tahun Terbit" required>
        <button type="submit" name="submit">Tambah</button>
    </form>

    <h2>Cari Buku</h2>
    <form method="POST">
        <input type="text" name="search" placeholder="Cari judul atau penulis" value="<?= $search ?>">
        <button type="submit">Cari</button>
    </form>

    <h2>Daftar Buku</h2>
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['title']; ?></td>
                <td><?= $row['author']; ?></td>
                <td><?= $row['year']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
