<?php

require 'functions.php';

$perumahan = query("SELECT * FROM type");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek 1</title>
    <link rel="stylesheet" href="gaya.css">
    <script src="https://kit.fontawesome.com/5549cc43a6.js" crossorigin="anonymous"></script>
</head>
<body>
  
<div class="header">
    <div><img src="../image/c.jpeg" alt=""></div>

    <ul>
        <li><a href="#contact">contact</a></li>
        <li><a href="">menu</a></li>
        <li><a href="index.php">home page <i class="fa-solid fa-arrow-right-from-bracket"></i> </a></li>
    </ul>
</div>

<div class="container">
    <div class="container1">
    <div class="card ">
        <div class="cardheader">
            <img src="../image/2.jpg" alt="">
        </div>
        <hr>
        <div class="cardcontent">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, harum?</p>
        </div>       
    </div>

    <div class="card besar">
        <div class="cardheader">
            <img src="../image/3.jpg" alt="">
        </div>
        <hr>
        <div class="cardcontent">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, harum?</p>
        </div>       
    </div>

    
    <div class="card">
        <div class="cardheader">
            <img src="../image/4.jpg" alt="">
        </div>
        <hr>
        <div class="cardcontent">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, harum?</p>
        </div>       
    </div>
    
</div>
<br><br><br>
<div style="display:flex; justify-content:center"><a href="tambah.php" style="background-color: green; color:white; padding:10px;; text-decoration:none ">Tambah Data <i class="fa-solid fa-plus"></i></a></div>
<br>

    <div class="container2">
       <?php foreach($perumahan as $rmh): ?>
        <div class="thumbnail">
            <div class="content">
                <img src="../image/<?php echo $rmh["foto"]; ?>" alt="">
                <h3>Type <?php echo $rmh["nama"]; ?> </h3>
                <h2><?php echo $rmh["harga"]; ?></h2>
                <br>
                <div style="display:flex; justify-content:center">
                <a href="hapus.php?id=<?php echo $rmh["id"]; ?>" style="background-color: red; color:white; padding:5px; text-decoration:none" onclick="return confirm('anda yakin untuk menghapus?');">Hapus <i class="fa-solid fa-trash"></i></a>
            </div>

            </div>
        </div>
       <?php endforeach; ?>
      
    </div>

 
</div>

<div class="footer" id="contact">
        <div class="satu"> <h3>Media Sosial</h3><ul>
            <li><a href="youtube.com"><i class="fa-brands fa-whatsapp fa-xl" style="color:white;"></i></a></li>
            <li><a href=""><i class="fa-brands fa-instagram fa-xl fa-white" style="color:white;"></i></a></li>
            <li><a href=""><i class="fa-brands fa-linkedin fa-xl" style="color:white;"> </i></a></li>
        </ul></div>
        <div class="dua">
            <h3>Partnership</h3>
            <br><br>
            <h5>Email: maulanadiasva@gmail.com</h5>
        </div>
        <div class="tiga">
            <h3>MAPS</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3462259945763!2d106.79809036019402!3d-6.21799164374401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14d30079f01%3A0x2e74f2341fff266d!2sStadion%20Utama%20Gelora%20Bung%20Karno!5e0!3m2!1sid!2sid!4v1700357066896!5m2!1sid!2sid" ></iframe>
        </div>
    </div>

    <div class="copy"> &copy maulana dias putra 2023</div>

</body>
</html>