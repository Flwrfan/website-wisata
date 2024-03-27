<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Destinasi Wisata Indonesia</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet"/>
  </head>
  <body>
    <header>
      <a href="#" class="brand">Wisata yuk</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <div class="navigation-items">
          <a href="#home">Home</a>
          <a href="penginapan.php">Penginapan</a>
          <a href="#galeri">Galeri</a>
          
        </div>
      </div>
    </header>

    <section class="home" id="home">
      <video class="video-slide active" src="video/1.mp4" autoplay muted loop></video>
      <video class="video-slide" src="video/2.mp4" autoplay muted loop></video>
      <video class="video-slide" src="video/3.mp4" autoplay muted loop></video>
      <video class="video-slide" src="video/4.mp4" autoplay muted loop></video>
      <video class="video-slide" src="video/5.mp4" autoplay muted loop></video>
      <div class="content active">
        <h1>Varied Natural <br /><span>Beauty</span></h1>
        <p>
        Indonesia offers diverse natural beauty, ranging from towering mountains, exotic beaches, lush tropical forests, to stunning lakes. Each region in Indonesia offers unique and captivating natural landscapes, ensuring unforgettable travel experiences.
        </p>
        
      </div>
      <div class="content">
        <h1>Thrilling Adventure <br /><span>Activities</span></h1>
        <p>
        Indonesia offers a variety of adventurous activities for thrill-seekers. From challenging mountain hikes, such as Mount Rinjani in Lombok or Mount Bromo in East Java, to white-water rafting in rivers like the Ayung River in Bali or the Elo River in Magelang. Adventurers can explore Indonesia's natural beauty while experiencing an adrenaline rush.
        </p>
        
      </div>
      <div class="content">
        <h1>Breathtaking <br /><span>Archipelagos</span></h1>
        <p>
        Indonesia consists of thousands of islands scattered throughout the archipelago. The beauty of these islands makes Indonesia a paradise for beach lovers, snorkelers, and divers. For example, the Raja Ampat Islands in West Papua are renowned as one of the best diving spots in the world, with incredible marine biodiversity. Meanwhile, the Gili Islands in Lombok offer white sandy beaches and stunning underwater life. Each island has its own charm, enriching the travel experience in Indonesia.
        </p>
        
      </div>
      <div class="content">
        <h1>Stunning Tourist <br /><span>Destinations</span></h1>
        <p>
        Indonesia boasts numerous breathtaking tourist destinations, such as the famous beaches of Bali, the Komodo National Park, home to rare creatures like the Komodo dragon, Lake Toba, the largest volcanic lake in the world, and Raja Ampat, offering incredible underwater beauty. Each destination has its own allure, satisfying the adventurous spirit and appreciation for natural beauty of travelers.
        </p>
        
      </div>
      <div class="content">
        <h1>Rich Cultural <br /><span>Heritage</span></h1>
        <p>
        Indonesia is rich in diverse cultural heritage. From arts, dances, music, architecture, to traditional customs, each region has its own captivating cultural uniqueness. Travelers can immerse themselves in Indonesia's artistic and cultural wonders by visiting ancient temples, traditional villages, and engaging in cultural festivals.
        </p>
       
      </div>
      <div class="media-icons">
        <a href="#"> <i class="fab fa-facebook-f"></i></a>
        <a href="#"> <i class="fab fa-instagram"></i></a>
        <a href="#"> <i class="fab fa-twitter"></i></a>
      </div>
        <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>
    </section>

<!--Wisata section start-->
<section class="galeri" id="galeri">

      <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>i</span>
      </h1>
</section>

<img src="wisata/aceh.jpg" class="rounded float-start" alt="...">
<img src="wisata/bali.jpeg" class="rounded float-end" alt="...">
<img src="wisata/banten.jpg" class="rounded float-end" alt="...">
<img src="wisata/jakarta.jpg" class="rounded float-end" alt="...">
<img src="wisata/jogja.jpg" class="rounded float-end" alt="...">
<img src="wisata/maluku.jpg" class="rounded float-end" alt="...">
<img src="wisata/mlg.jpg" class="rounded float-end" alt="...">
<img src="wisata/ntt.jpg" class="rounded float-end" alt="...">
<img src="wisata/nusa.jpg" class="rounded float-end" alt="...">
<img src="wisata/papua.jpg" class="rounded float-end" alt="...">
<br>
<br>
<br>
<br>

<!--Footer section start-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col">
        <h3>About Us</h3>
        <p>Welcome to the Wonderful Indonesia website! We are here to showcase the enchanting beauty, rich culture, and diverse wonders of Indonesia. From pristine beaches and majestic mountains to vibrant festivals and mouthwatering cuisine, Indonesia has it all. Explore our site and immerse yourself in the captivating charm of this incredible nation. Come and discover the wonders that make Indonesia truly extraordinary.</p>
      </div>
      <div class="col">
        <h3>Contact</h3>
        <p>Email: nnsmadani@gmail.com</p>
        <p>Phone: 087861116798</p>
        <p>Address: Jl Simpang Sunan Kalijaga no 6, Malang</p>
      </div>
    </div>
  </div>
</footer>

<!--Footer section end-->

<script type="text/javascript">
      //Javascript of responsive navigation menu
      const menuBtn = document.querySelector(".menu-btn");
      const navigation = document.querySelector(".navigation");

      menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle("active");
        navigation.classList.toggle("active");
      });

      //Javascript for video slider navigation
      const btns = document.querySelectorAll(".nav-btn");
      const slides = document.querySelectorAll(".video-slide");
      const contents = document.querySelectorAll(".content");

      var sliderNav = function (manual) {
        btns.forEach((btn) => {
          btn.classList.remove("active");
        });

        slides.forEach((slide) => {
          slide.classList.remove("active");
        });

        contents.forEach((content) => {
          content.classList.remove("active");
        });

        btns[manual].classList.add("active");
        slides[manual].classList.add("active");
        contents[manual].classList.add("active");
      };

      btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
          sliderNav(i);
        });
      });
    </script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>
</html>
