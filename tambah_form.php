<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Tambah</title>
       <style>
              fieldset {
                     width: 30em;
                     height: auto;
                     margin: auto;
                     padding: 0.7rem 3%;
              }
       </style>
</head>

<body>
       <h1 align="center">Toko Buku Serba Gak ada Muhamad Zidan A-farish</h1>
       <p align="center">
              <a href="index.php">Home</a>
              <a href="admin_form.php">Admin</a>
              <a href="#">Pengadaan</a>
       </p>
       <fieldset>
              <legend align="center">
                     <h2>Halaman Tambah</h2>
              </legend>
              <form action="tambah_proses.php" method="post">
                     <input type="text" name="id_buku" placeholder="ID Buku" size="40px" /><br /><br />
                     <input type="text" name="kategori" placeholder="Kategori" size="40px" /><br /><br />
                     <input type="text" name="nama_buku" placeholder="Nama Buku" size="40px" /><br /><br />
                     <input type="text" name="harga" placeholder="Harga" size="40px" /><br /><br />
                     <input type="text" name="stok" placeholder="Stok" size="40px" /><br /><br>
                     <input type="text" name="penerbit" placeholder="Penerbit" size="40px" /><br /><br> <br>

                     <button type="submit" name="submit">SIMPAN</button>
                     <button type="reset" name="reset">RESET</button>
              </form>
</body>

</html>