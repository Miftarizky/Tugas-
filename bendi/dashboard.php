<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>PT.Bendi Car</title>
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
                     <li class="nav-item">
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <a class="nav-link" href="logout.php">Logout</a>
                        <?php else: ?>
                            <a class="nav-link" href="login.php">Login</a>
                        <?php endif; ?>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <div class="call_text_main">
         <div class="container">
            <div class="call_taital">
               <div class="call_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Bandar Lampung</span></a></div>
               <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+62)877983</span></a></div>
               <div class="call_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">PtBendi@gmail.com</span></a></div>
            </div>
         </div>
      </div>
      <div class="banner_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div id="banner_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Sewa Mobil <br><span style="color: #fe5b29;">Pilihan Anda</span></h1>
                              <p class="banner_text">Kemudahan perjalanan Anda dimulai di sini. 
                                 Kami menawarkan berbagai pilihan kendaraan yang siap mengantar Anda ke tujuan dengan nyaman dan aman.</p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="about.php">Read More</a></div>
                                 <div class="contact_bt active"><a href="contact.php">Contact Us</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Sewa Mobil <br><span style="color: #fe5b29;">Pilihan Anda</span></h1>
                              <p class="banner_text">Nikmati layanan profesional dengan armada terawat dan pengemudi berpengalaman. Kami hadir untuk memastikan perjalanan Anda berjalan lancar dan memuaskan.</p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="#">Read More</a></div>
                                 <div class="contact_bt active"><a href="#">Contact Us</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Sewa Mobil <br><span style="color: #fe5b29;">Pilihan Anda</span></h1>
                              <p class="banner_text">Solusi terbaik untuk kebutuhan transportasi Anda. Dengan berbagai pilihan mobil yang tersedia, 
                                 kami siap memenuhi kebutuhan perjalanan Anda, baik untuk bisnis, liburan, maupun acara khusus
                                 Pilih mobil sesuai keinginan dan kebutuhan Anda. Kami menyediakan kendaraan dengan berbagai tipe, mulai dari mobil keluarga yang nyaman 
                                 hingga mobil mewah untuk pengalaman berkendara premium. Temukan pilihan terbaik hanya di Bendi Car!</p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="#">Read More</a></div>
                                 <div class="contact_bt active"><a href="#">Contact Us</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                     </a>
                     <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="banner_img"><img src="images/display.png"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6"> 
                     <div class="image_iman"><img src="images/rubicon.png" class="about_img"></div>
                  </div>
                  <div class="col-md-6"> 
                     <div class="about_taital_box">
                        <h1 class="about_taital">About <span style="color: #fe5b29;">Us</span></h1>
                        <p class="about_text">Selamat datang di PT. Bendi Car, penyedia layanan rental mobil terpercaya di Indonesia. Kami hadir untuk memenuhi kebutuhan transportasi Anda dengan menyediakan 
                           berbagai jenis kendaraan berkualitas tinggi, mulai dari mobil keluarga hingga kendaraan premium.
                           Dengan pengalaman bertahun-tahun di industri otomotif, kami berkomitmen memberikan pelayanan terbaik bagi 
                           pelanggan kami. Kepuasan Anda adalah prioritas kami, karena itu kami selalu memastikan kendaraan dalam kondisi prima, bersih, dan siap digunakan kapan pun Anda membutuhkannya.</p>
                        <div class="readmore_btn"><a href="about.php">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="search_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="search_taital">Cari Mobil Terbaik Anda</h1>
                <p class="search_text">Cari Mobil Ternyaman Anda Disini</p>
                <div class="container">
                    <div class="select_box_section">
                    <form action="booking.php" method="POST"> 
                            <div class="select_box_main">
                                <div class="row">
                                    <div class="col-md-3 select-outline">
                                        <select class="mdb-select md-form md-outline colorful-select dropdown-primary" name="brand">
                                            <option value="" disabled selected>Any Brand</option>
                                            <option value="Mitsubishi">Mitsubishi</option>
                                            <option value="Toyota">Toyota</option>
                                            <option value="Honda">Honda</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 select-outline">
                                        <select class="mdb-select md-form md-outline colorful-select dropdown-primary" name="type">
                                            <option value="" disabled selected>Any Type</option>
                                            <option value="SUV">SUV</option>
                                            <option value="MPV">MPV</option>
                                            <option value="Sedan">Sedan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 select-outline">
                                        <select class="mdb-select md-form md-outline colorful-select dropdown-primary" name="price">
                                            <option value="" disabled selected>Price</option>
                                            <option value="250000">Under Rp250,000</option>
                                            <option value="350000">Under Rp350,000</option>
                                            <option value="450000">Under Rp450,000</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="search_btn"><button type="submit" class="btn btn-primary">Search Now</button></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="gallery_taital">Penawaran terbaik kami</h1>
               </div>
            </div>
            <div class="gallery_section_2">
   <div class="row">
      <div class="col-md-4">
         <div class="gallery_box">
            <div class="gallery_img"><img src="images/xpander.png" alt="Mitsubishi Xpander"></div>
            <h3 class="types_text">Mitsubishi Xpander</h3>
            <p class="looking_text">Start per day Rp250.000</p>
            <div class="read_bt"><a href="booking.php?car_id=xpander&price=250000">Book Now</a></div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="gallery_box">
            <div class="gallery_img"><img src="images/rush.png" alt="Toyota Rush"></div>
            <h3 class="types_text">Toyota Rush</h3>
            <p class="looking_text">Start per day Rp100.000</p>
            <div class="read_bt"><a href="booking.php?car_id=rush&price=100000">Book Now</a></div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="gallery_box">
            <div class="gallery_img"><img src="images/avanza.png" alt="Toyota Avanza"></div>
            <h3 class="types_text">Toyota Avanza</h3>
            <p class="looking_text">Start per day Rp115.000</p>
            <div class="read_bt"><a href="booking.php?car_id=avanza&price=115000">Book Now</a></div>
         </div>
      </div>
   </div>
</div>
<div class="gallery_section_2">
   <div class="row">
      <div class="col-md-4">
         <div class="gallery_box">
            <div class="gallery_img"><img src="images/pajero.png" alt="Mitsubishi Pajero"></div>
            <h3 class="types_text">Mitsubishi Pajero</h3>
            <p class="looking_text">Start per day Rp150.000</p>
            <div class="read_bt"><a href="booking.php?car_id=pajero&price=150000">Book Now</a></div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="gallery_box">
            <div class="gallery_img"><img src="images/civic.png" alt="Honda Civic"></div>
            <h3 class="types_text">Honda Civic</h3>
            <p class="looking_text">Start per day Rp350.000</p>
            <div class="read_bt"><a href="booking.php?car_id=civic&price=350000">Book Now</a></div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="gallery_box">
            <div class="gallery_img"><img src="images/rubicoon.png" alt="Rubicon"></div>
            <h3 class="types_text">Rubicon</h3>
            <p class="looking_text">Start per day Rp450.000</p>
            <div class="read_bt"><a href="booking.php?car_id=rubicoon&price=450000">Book Now</a></div>
         </div>
      </div>
   </div>
</div>
         </div>
      </div>
      <div class="choose_section layout_padding">     
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1   class="choose_taital">WHY CHOOSE US</h1>
               </div>
            </div>
            <div class="choose_section_2">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="icon_1"><img src="images/icon-1.png"></div>
                     <h4 class="safety_text">SAFETY & SECURITY</h4>
                     <p class="ipsum_text">Kami memastikan kendaraan kami selalu dalam kondisi prima melalui perawatan berkala. 
                        Dengan sistem keamanan terkini dan tim yang berpengalaman, Anda dapat menikmati perjalanan dengan tenang dan aman</p>
                  </div>
                  <div class="col-sm-4">
                     <div class="icon_1"><img src="images/icon-2.png"></div>
                     <h4 class="safety_text">Online Booking</h4>
                     <p class="ipsum_text">Pesan kendaraan dengan mudah dan cepat melalui sistem booking online kami. 
                        Aksesibilitas 24/7 memudahkan Anda memilih kendaraan yang sesuai kebutuhan kapan saja dan di mana saja.</p>
                  </div>
                  <div class="col-sm-4">
                     <div class="icon_1"><img src="images/icon-3.png"></div>
                     <h4 class="safety_text">Best Drivers</h4>
                     <p class="ipsum_text">Kami memiliki tim pengemudi profesional yang berpengalaman, ramah, dan memahami rute dengan baik. 
                        Mereka siap memberikan layanan terbaik untuk menjamin kenyamanan perjalanan Anda.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Hubungi Kami Disini</h1>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Nama" name="Nama">
                        <input type="text" class="mail_text" placeholder="Email" name="Email">
                        <input type="text" class="mail_text" placeholder="Nomor Telepon" name="Nomor Telepon">
                        <textarea class="massage-bt" placeholder="Pesan" rows="5" id="comment" name="Pesan"></textarea>
                        <div class="send_bt"><a href="#">Send</a></div>
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
                  <div class="footeer_logo"><img src="images/logo.png"></div>
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
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>