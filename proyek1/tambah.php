<?php

$conn = mysqli_connect("127.0.0.1:3307
","root","","proyek_latihan");

//cek pakah submit sudabh di tekan
if(isset($_POST["submit"])){
   //ambil data tiap elemen dari dalam form
   $nama = htmlspecialchars($_POST["nama"]);
   $harga = $_POST["harga"];
   $foto = $_POST["foto"];

   //query insert data

   $query = "INSERT INTO type
                VALUES
                ('','$nama','$harga','$foto')
                ";
            mysqli_query($conn, $query);

if (mysqli_affected_rows($conn)){
    echo "<script> alert('data berhasil di tambahkan');
    document.location.href ='admin.php'; </script>";
   
}else{
    echo "gagal";
    echo "<br>";
    echo mysqli_error($conn);
}


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body >

<div style=" background-color:grey; text-align: center; width: 700px; margin: 100px auto; padding: 10px;">
<h1>TAMBAH DATA</h1>    
<form action="" method="post">
    <ul style="list-style:none">
        <li>
            <label for="nama">Type Rumah:</label><br>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="harga">Harga:</label><br>
            <input type="text" name="harga" id="harga">
        </li>
        <li>
            <label for="foto">Foto:</label><br>
            <input type="text" name="foto" id="foto">
        </li>
<br>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>

</form>


<ul style="list-style:none; display: flex; justify-content: space-evenly; color:white; text-decoration:none">
    <li><a href="index.php" style="color:white; text-decoration:none">Back to home page</a></li>
    <li><a href="index.php" style="color:white; text-decoration:none" > Back to admin page</a></li>
</ul>




</div>

</body>
</html>