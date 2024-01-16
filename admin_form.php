<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Form</title>
  <style>
    fieldset {
      margin: auto;
      padding: 1rem;
    }
  </style>
</head>

<body>
  <h1 align="center">Toko Buku - M Juroihan</h1>
  <p align="center">
    <a href="index.php">Home</a> | <a href="admin_form.php">Admin</a> |
    <a href="pengadaan.php">Pengadaan</a>
  </p>
  <fieldset>
    <legend align="center">
      <h2>Halaman Admin</h2>
    </legend>

    <form action="index.php" method="get">
      <label for="">Pencarian :</label>
      <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                echo $_GET['search'];
                                              } ?>" />
      <button type="submit">Search</button>
      <button type="reset" name="reset">Reset</button>
      <a href="tambah_form.php"><button type="button" name="tambah">Tambah +</button></a>
    </form>
    <br /><br />

    <table border="2" width="100%" cellpadding="2" cellspacing="1">
      <thead>
        <tr>
          <th>Id Buku</th>
          <th>Katagori</th>
          <th>Nama Buku</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Penerbit</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi.php';
        if (isset($_GET['search'])) {
          $search = $_GET['search'];
          $query = "SELECT * FROM tb_buku WHERE id_buku like '%" . $search . "%' OR nama_buku like '%" . $search . "%' OR kategori like '%" . $search . "%' ORDER BY id_buku ASC";
        } else {
          $query = "SELECT * FROM tb_buku ORDER BY id_buku ASC";
        }
        $result = mysqli_query($koneksi, $query);
        if (!$result) {
          die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        }
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row['id_buku']; ?></td>
            <td><?php echo $row['Kategori']; ?></td>
            <td><?php echo $row['nama_buku']; ?></td>
            <td><?php echo $row['Harga']; ?></td>
            <td><?php echo $row['Stok']; ?></td>
            <td><?php echo $row['Penerbit']; ?></td>
            <td>
              <a href="edit_form.php?id=<?php echo $row['id']; ?>">Edit </a>|
              <a href="delete.php?id=<?php echo $row['id_buku']; ?>">Hapus</a>
            </td>
          </tr>

        <?php
        }
        ?>
      </tbody>
    </table>
  </fieldset><br><br>
</body>

</html>