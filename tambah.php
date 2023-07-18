<!DOCTYPE html>
<html>
<head>
    <title>Personal Web</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="navigasi">
        <div class="logo">
            <h2>My Identity</h2>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#edu">Education</a></li>
                <li><a href="#skill">Softskill</a></li>
                <li><a href="#kontak">Contact</a></li>
                <li><a href="#komen">Comment</a></li>
            </ul>
        </div>  
    </div>
<!-- Banner -->
    <div class="banner" id="home">
        <img src="image/lathifa.jpg">
        <h1>Halo!!  <span></span></h1>
        <p>Terimakasih sudah mengunjungi web pribadiku</p>
        <a href="https://kuliah.itspku.ac.id/"><button>Selengkapnya</button></a>
    </div>
<!-- Menu riwayat pendidikan -->
    <div class="pendidikan" id="edu">
        <br><br><br><br>
        <h1>Riwayat Pendidikan</h1>
        <div class="boxkiri">
            <img src="image/sd.jpg">
            <p><h3>SD</h3></p>
            <script type="text/javascript">
                document.writeln("Saya telah menamatkan Sekolah Dasar di SDIT Darul Falah");
            </script>
        </div>
        <div class="boxtengah">
            <img src="image/smp.png">
            <p><h3>SMP</h3></p>
            <script type="text/javascript">
                document.writeln("Saya telah menamatkan Sekolah Dasar di SMP Muhammadiyah 8 Surakarta");
            </script>
        </div>
        <div class="boxkanan">
            <img src="image/sma.jpeg">
            <p><h3>SMA</h3></p>
            <script type="text/javascript">
                document.writeln("Saya telah menamatkan Sekolah Dasar di MA AL-Ukhuwah Sukoharjo");
            </script>
        </div>
    </div>
<!-- Menu Softskill -->
    <section id="skill">
    <div class="skill">
        <br><br><br><br>
        <h1>Softskill</h1>
        <div class="boxkiriskill">
            <img src="image/baca.jpg">
            <p><h3>Membaca</h3></p>
            <script type="text/javascript">
                document.writeln("Jujur saya tidak terlalu suka membaca buku, akan tetapi saya sangat suka membaca buku tentang Psikologi");
            </script>
        </div>
        <div class="boxtengahskill">
            <img src="image/nonton.jpg">
            <p><h3>Nonton</h3></p>
            <script type="text/javascript">
                document.writeln("Selain suka membaca buku psikologi, saya juga bisa maraton menonton film dan drama");
            </script>
            
        </div>
        <div class="boxkananskill">
            <img src="image/masak.jpg">
            <p><h3>Memasak</h3></p>
            <script type="text/javascript">
                document.writeln("Saya bisa memasak semua makanan, walau harus memakai resep google akan tetapi rasanya sangat enak")
            </script>
        </div>
    </div>
    </section>
<!-- Menu Contact -->
    <section id="kontak">   
    <div class="kontak">
        <h1>Hubungi Contact</h1>
        <p>Perum Griya Karya RT02/RW11, Sonorejo, Sukoharjo</p>
        <p>Telp. 081227018195</p>
        <p>lathifasyahidah@gmail.com</p><br>
        <h2>Sosial Media</h2>
        <a href="https://wa.me/qr/WOOIJZBLOEDZN1"><img src="image/whatsapp.png"></a>
        <a href="https://instagram.com/lathifaas_?igshid=MzNlNGNkZWQ4Mg=="><img src="image/instagram.png"></a>
        <a href="https://twitter.com/ipaaooo?t=AS71N1SpiO33eJGU7jvoTQ&s=08"><img src="image/twitter.png"></a>
        <a href=""><img src="image/youtube.png"></a>
        <a href="https://github.com/l-a-t-h-i-f-a"><img src="image/github.png"></a>
    </div>
    </section>
<!-- Menu Comment -->
    <div class="komen" id="komen">
       <h1>Komentar</h1>
        <form action="tambah.php" method="post" name="form1">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="input" class="form-control" name="nama">
            </div>
            <div class="mb-2">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                 <label class="form-label">Pesan</label>
                 <textarea class="form-control" name="pesan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="Submit" value="Add">Submit</button>
        </form>
        <?php

        if(isset($_POST['Submit'])) {
            $nama= $_POST['nama'];
            $email= $_POST['email'];
            $pesan = $_POST['pesan'];

            // include database
            include_once("config.php");

            // Insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO komen(nama,email,pesan) VALUES('$nama','$email','$pesan')");

            // pesan yang keluar
            echo "Sukses menambahkan komen";
        }
        ?>
    </div>
    <div class="footer">
        <p>Made by Lathifa Asy Syahidah | 2023</p>
    </div>
</body>
</html>