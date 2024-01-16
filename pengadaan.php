<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengadaan</title>
    <style>
      fieldset {
        width: 70em;
        height: auto;
        margin: auto;
        padding: 0.7rem 3%;
      }
    </style>
  </head>
  <body>
    <h1 align="center">Toko Buku - M Juroihan</h1>
    <p align="center">
      <a href="index.php">Home</a> | 
      <a href="admin_form.php">Admin</a> |
      <a href="pengadaan.php">Pengadaan</a>
    </p>

    <fieldset>
       <legend align="center">
         <h2>Pengadaan</h2>
       </legend>
       <form action="pengadaan.php" method="get" style="text-align: right">
         <label for="">Pencarian :</label>
         <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                   echo $_GET['search'];
                                                 } ?>" />
         <button type="submit">Search</button>
         <button type="reset" name="reset">Reset</button>
       </form>
       <br /><br />
       <table border="2" width="100%" cellpadding="2" cellspacing="1">
         <thead>
           <tr>
             <th>ID Penulis</th>
             <th>Namaa</th>
             <th>Alamat</th>
             <th>Kota</th>
             <th>Telepon</th>
           </tr>
         </thead>
         <tbody>
           <?php
           include 'koneksi.php';
           if (isset($_GET['search'])) {
             $search = $_GET['search'];
             $query = "SELECT * FROM tb_penerbit WHERE id_penerbit like '%" . $search . "%' OR Nama like '%" . $search . "%' OR Kota like '%" . $search . "%' ORDER BY id_penerbit ASC";
           } else {
             $query = "SELECT * FROM tb_penerbit ORDER BY id_penerbit ASC";
           }
           $result = mysqli_query($koneksi, $query);
           if (!$result) {
             die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
           }
           while ($row = mysqli_fetch_assoc($result)) {
           ?>
             <tr>
               <td><?php echo $row['id_penerbit']; ?></td>
               <td><?php echo $row['Nama']; ?></td>
               <td><?php echo $row['Alamat']; ?></td>
               <td><?php echo $row['Kota']; ?></td>
               <td><?php echo $row['Telepon']; ?></td>
             </tr>
   
           <?php
           }
           ?>
         </tbody>
       </table>
     </fieldset>
  </body>
</html>
