<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <style>
          .more-text {
            display: none;
            margin-top: 10px;
        }
        .readmore_btn {
            margin-top: 20px;
            cursor: pointer;
            color: #fe5b29;
            text-decoration: none;
        }
        .vision-mission {
            margin-top: 30px;
            display: none;
        }
        .vision-mission h2 {
            color: #fe5b29;
            font-weight: bold;
        }
        .vision-mission p {
            margin: 10px 0;
        }
        .bold-text {
            font-weight: bold;
        }
      </style>
   </head>
   <body>
   <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"href="dashboard.php"><img src="images/LOGOO.jpg" width="120px"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="dashboard.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Kendaraan</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <div class="call_text_main">
         <div class="container">
            <div class="call_taital">
               <div class="call_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Bandar Lampung</span></a></div>
               <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+62) 877983</span></a></div>
               <div class="call_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">PtBendi@gmail.com</span></a></div>
            </div>
         </div>
      </div>
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
                <div class="row">
                    <div class="col-md-6"> 
                        <div class="image_iman"><img src="images/rubicoon.png" class="about_img" alt="Image"></div>
                    </div>
                    <div class="col-md-6"> 
                        <div class="about_taital_box">
                            <h1 class="about_taital">About <span style="color: #fe5b29;">Us</span></h1>
                            <p class="about_text" id="about-text">
                                Selamat datang di PT. Bendi Car, penyedia layanan rental mobil terpercaya di Indonesia. Kami hadir untuk memenuhi kebutuhan transportasi Anda dengan menyediakan berbagai jenis kendaraan berkualitas tinggi, mulai dari mobil keluarga hingga kendaraan premium.
                                <span id="more-text" class="more-text">
                                    Dengan pengalaman bertahun-tahun di industri otomotif, kami berkomitmen memberikan pelayanan terbaik bagi pelanggan kami. Kepuasan Anda adalah prioritas kami, karena itu kami selalu memastikan kendaraan dalam kondisi prima, bersih, dan siap digunakan kapan pun Anda membutuhkannya. Kami juga memiliki pengemudi yang terlatih dengan baik untuk memastikan keselamatan selama perjalanan, sehingga Anda dapat merasa tenang dan nyaman saat berada di jalan.
                                </span>
                            </p>
                            <div class="vision-mission" id="vision-mission" style="display: none;">
                           <h2>Tentang</h2>
                           <div class="mission">
                              <h3 class="bold-text">Visi:</h3>
                              <p><span class="bold-text">Menjadi penyedia layanan rental mobil terbaik dan terpercaya di Indonesia, yang selalu berinovasi dalam menyediakan kendaraan berkualitas serta pelayanan yang memuaskan untuk setiap pelanggan kami.</span></p>
                           </div>
                           <div class="mission">
                              <h3 class="bold-text">Misi:</h3>
                              <p><span class="bold-text">1. Menyediakan armada kendaraan yang selalu terjaga kualitasnya dan memenuhi standar keselamatan tertinggi.</span></p>
                              <p><span class="bold-text">2. Memberikan pelayanan yang cepat, ramah, dan profesional dalam setiap transaksi dengan pelanggan.</span></p>
                              <p><span class="bold-text">3. Berkomitmen untuk memberikan harga yang kompetitif dan sesuai dengan kebutuhan pelanggan kami.</span></p>
                              <p><span class="bold-text">4. Membangun hubungan jangka panjang dengan pelanggan dengan memberikan pengalaman yang luar biasa dan kepuasan maksimal.</span></p>
                           </div>
                        </div>
                            <div class="readmore_btn">
                                <a href="javascript:void(0)" id="read-more-about-us" onclick="toggleText()">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </div>

      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footeer_logo"><img src="images/logo.png" alt="Logo"></div>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col">
                  <h4 class="footer_taital">Subscribe Now</h4>
                     <p class="footer_text">Tetap terhubung dengan kami untuk mendapatkan penawaran menarik, tips perjalanan, dan pembaruan terbaru tentang layanan kami.</p>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                     </div>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Information</h4>
                     <p class="lorem_text">Temukan informasi lengkap tentang layanan kami, termasuk pilihan kendaraan, tarif, dan panduan pemesanan.</p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Helpful Links</h4>
                     <p class="lorem_text">Akses cepat ke halaman penting seperti Home, About Us, Services, Gallery, dan Contact untuk mempermudah Anda menemukan informasi yang diperlukan.</p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Invesments</h4>
                     <p class="lorem_text">Bendi Car terus berinvestasi dalam armada terbaru, teknologi modern, dan pelatihan tim untuk memberikan pengalaman berkendara yang tak tertandingi. Kepercayaan Anda adalah investasi kami untuk masa depan.</p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Contact Us</h4>
                     <div class="location_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Bandar Lampung</span></a></div>
                     <div class="location_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+62) 877983</span></a></div>
                     <div class="location_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">PtBendi@gmail.com</span></a></div>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
               <p text align="center">2024 PT. Bendi Car. All rights reserved.</p>
               </div>
            </div>
         </div>
      </div>
      <script>
         function toggleText() {
    var moreText = document.getElementById("more-text");
    var visionMission = document.getElementById("vision-mission");
    var readMoreButton = document.getElementById("read-more-about-us");
 
    if (moreText.style.display === "none") {
        moreText.style.display = "inline";   
        readMoreButton.innerHTML = "Read Less";   
    } else {
        moreText.style.display = "none";   
        readMoreButton.innerHTML = "Read More";   
    }

   
    if (visionMission.style.display === "none") {
        visionMission.style.display = "block";  
    } else {
        visionMission.style.display = "none";   
    }
}
      </script>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
