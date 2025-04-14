<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    if(empty($_POST['name']) || empty($_POST['email'])) {
        $message ="Mohon isi semua kolom.";
    }else {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        try{
            $stmt = $pdo->preapre("INSERT INTO rentals(name, email) VALUES(:name, :email)");
            $stmt->execute(['name' => $name, 'email' => $email]);
            $message ="Terima kasih, $name! Penyewaan Anda telah di terima.";
        } catch (Exception $e){
            $message = "Terjadi Kesalahan :" .$e->getMessage();
        }

        echo "<script>
            alert('$message');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furdoor Advanture</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="img/mountain .jpg" alt="Furdor Advanture" width="100px"  margin="auto">
            </div>
            <ul class="nav-links">
                <li><a href="#tentangkami ">tentang kami</a></li>
                <li><a href="#product ">product</a></li>
                <li><a href="#testimoni ">testimoni</a></li>
                <li><a href="#location ">location</a></li>
                <li><a href="#contact ">contact</a></li>
        <ul>
        </nav>
        <div class="hero-section">
            <h1>Furdoor Advanture</h1>
            <p>Selamat datang di rental perlengkapan pendakian kami ,
               destinasi terpercaya bagi para petualang yang siap menjelajahi
               keindahan alam dengan mendaki gunung</p>
            <a href="#" class="rent-now">RENT NOW</a>
        </div>
    </header>

    <!--section about-->
    
    <section id="about">
        <h2>Tentang kami</h2>
        <p>Furdor Adventure adalah penyedia layanan penyewaan alat camoping terpercaya
        dengan fokus ada pengalaman luar ruangan  yang tak terlupakan, kami menyediakan
        alat camping berkualitas untuk memastikan anda merasakan petualangan maksimal
        </p>
        <div class ="features">
            <div class="feature-item">
                <h3>Harga Terjangkau</h3>
                <p>furdor menyediakan harga sewa yang 
               terjangkau dan terhitung sangat ramah di kantong
                </p>
            </div>
        </div>
        <br>
             <div class="feature-item">
                <h3>Bisa di antar</h3>
                <p>Furdor menyeduikan  alat camping yang 
                bisa  diantar ke rumah anda
                </p>
            </div>
         </div>
         <br>
            <div class="feature-item">
                <h3>higienis dan wangi</h3>
                 <p>
                    Furdor menyediakan alat camping
                    yang higienis dan wangi </p>
             <div>
        <div>
    <section>   

        <!--Product Section-->
    <section id="products">
        <h2>produk kami</h2>
        <div class="product-slider">
            <div class="product-item">
                <img src="img/tenda-java.png" alt="Tenda Dome Borneo 4 Red">
                <p>Tendaki - Tenda Dome Borneo 4 Red</p>
                <p>Rp20000/hari - kabupaten Malang</p>
            </div>
            <div class="product-item">
                <img src="img/tenda-java.png" alt="Tas Deuter AC Lite 50+10">
                <p>Tendaki - Tas Deuter AC Lite 50+10</p>
                <p>Rp30000/hari - kabupaten Malang</p>
            <div>
            <div class="product-item">
                <img src="img/tenda-java.png" alt="Tenda Java 4 light">
                <p>Tendaki - Tenda Java 4 Light</p>
                <p>Rp21898000/hari - Chincag0 <p>
            <div>
        <div>
    </section>
    <!--Testimonial Section-->
    <section id="testimonials">
        <h2>testimoni</h2>
        <div class="testimonial item">
            <p>tempat persewaan perlengkapan outdoor di kecamatan Bululawang. lokasi yang tidak jauh dari
                jalan raya Bululawang (jalan utama menuju daerah pantai selatan),cocok apabila ada teman
                teman yang hendak melakukan aktivitas camping  atau outbound di daerah malang selatan</p>
            <p>Clarissa merise, Local Guide</p>
        </div>
    </section>

    <!--Location Section-->
    <section id="location">
        <h2>Lokasi kami</h2>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.
            1763777781844!2d112.62114897434886!3d-8.039870994102025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
            1!3m3!1m2!1s0x2dd6286b634c552b%3A0x54db1268a1c2d7cd!2sBululawang%2C%20Malang%2C%20Jawa%20Timur!
            5e0!3m2!1sid!2sid!4v1692617173747!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div>
    </section>

    <!-- formulir penyewaan -->
     <section>
        <h2>Formulir Penyewaan</h2>
        <form id="rent-form" method="POST" action="">
            <input type="text" id="name" name="name" placeholder="Nama" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <button type="submit">Submit</button>
        </form>
     </section>
    <!--Footer Section-->
    <footer>
        <div class="join-us">
            <h2>Ayo gabung Bersama Kami</h2>
            <a href="#" class="join-now">Gabung Sekarang</a>
        </div>
        <div class="footer-info">
            <p>Kunjungi Kami</p>
            <p>JL. suropati Raya No. 20 RT, 29 RW, 07 Kecamatan Bululawang</p>
            <p>malang, Jawa Timur 65171</p>
            <p>0895-8751-8985</p>
            <p>furdor-adventure@gmail.com</p>
        </div>
        <div class="footer-links">
                <p>Links</p>
                <ul>
                    <li><a href="#products">Produk</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Made with By radityaa </p>
        </div>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>