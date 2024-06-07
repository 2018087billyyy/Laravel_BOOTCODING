<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="Style/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
</head>

<body onload="onModal()">
  <nav>
    <span class="logo">
      <img src="assets/code.png" width="38px" />
      <p>Chocoding</p>
    </span>
    <ul>
      <a href="">
        <p>Program Choco</p>
      </a>
      <a href="">
        <p>Location</p>
      </a>
      <a href="">
        <p>About Us</p>
      </a>
    </ul>

    <div class="button">
      <span class="btn">
        <a href="login.php">
          <p>Masuk</p>
        </a>
      </span>
      <span class="btn">
        <a href="register.php">
          <p>Daftar</p>
        </a>
      </span>
    </div>
  </nav>

  <div class="jumbotron">
    <div class="banner">
      <h1>Bootcamp FrontEnd Web Developer</h1>
      <h3>
        Pelajari cara membangun tampilan website menggunakan HTML, CSS,
        Bootstrap, Redux, React atau Next js selama 5+ bulan yang akan
        dibimbing langsung oleh para praktisi digital berpengalaman.
      </h3>
      <div class="button">
        <span class="btn">
          <p>Dapatkan Promo</p>
        </span>
        <span class="btn">
          <p>Konsultasi Sekarang</p>
        </span>
      </div>
    </div>
  </div>

  <main>
    <div class="content">
      <h2>Tentang Program</h2>
      <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="assets2/card-4.jpg" style="width: 100%" />
          <div class="text">Front End Developer</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="assets2/card-2.jpg" style="width: 100%" />
          <div class="text">Front End Engineer</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="assets2/card-3.jpg" style="width: 100%" />
          <div class="text">UI UX Developer</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br />

      <!-- The dots/circles -->
      <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
      <br />
      <h1>Platform Tepat untuk Belajar Frontend Web Development</h1>
      <p>
        Bootcamp Frontend Web Development ini sangat cocok untuk tech
        enthusiast yang mempunyai passion di bidang pemrograman, terutama di
        bagian tampilan website. Pelajari cara membangun desain antarmuka
        pengguna dan pengembangan web menggunakan HTML, CSS, Bootstrap, Redux,
        React atau Next js selama 5+ bulan yang akan dibimbing langsung oleh
        para praktisi digital berpengalaman.
      </p>
      <h1>Gaji Di Bidang Front End Development</h1>
    </div>
  </main>
  <div class="card-content">
    <div class="card">
      <p>Front End Developer</p>
      <p>84-180 Juta/Tahun</p>
    </div>
    <div class="card">
      <p>Front End Engineer</p>
      <p>84-180 Juta/Tahun</p>
    </div>
    <div class="card">
      <p>Web Designer</p>
      <p>84-180 Juta/Tahun</p>
    </div>
    <div class="card">
      <p>Front End Testing Engineer</p>
      <p>84-180 Juta/Tahun</p>
    </div>
  </div>
  <div class="content-2">
    <div class="text-content">
      <h2>Program Unggulan Kami</h2>
      <h1>Job Connector Bootcamp Chocoding</h1>
      <p>
        Training intensif keahlian digital yang akan membawa kamu kepada
        pekerjaan menjanjikan di lebih dari 1000+ hiring partner Purwadhika
        seluruh Asia baik secara full time, freelance, remote, atau
        project-based.
      </p>
    </div>
  </div>

  <div class="card-content-2">
    <div class="card">
      <img src="assets/icon-1.png" width="130px" />
      <p>
        Akses seumur hidup kepada pekerjaan
        <span style="color: rgb(34, 127, 209)">dengan income tanpa batas.</span>
      </p>
    </div>
    <div class="card">
      <img src="assets/icon-2.png" width="130px" />
      <p>
        <span style="color: rgb(34, 127, 209)">Raih keahlian yang akan</span>
        selalu dibutuhkan industri dalam keadaan apapun.
      </p>
    </div>
    <div class="card">
      <img src="assets/icon-4.png" width="130px" />

      <p>
        Dapatkan
        <span style="color: rgb(34, 127, 209)">dukungan karir seumur hidup</span>
      </p>
    </div>
    <div class="card">
      <img src="assets/icon-3.png" width="130px" />
      <p>
        Tersedia pilihan kerja
        <span style="color: rgb(34, 127, 209)">full time, freelance, remote, atau project-based</span>
      </p>
    </div>
  </div>

  <div class="header-contact">
    <h1>
      Jadilah yang pertama mengetahui promo
      <span style="color: rgb(34, 127, 209)">Chocoding</span>!
    </h1>
  </div>
  <div class="form-contact">
    <div class="newsletter">
      <div class="text-form-content">
        <h3>Bergabung Dengan Newsletter Kami!</h3>
        <p>
          Dapatkan informasi terkini serta penawaran dan promo menarik melalui
          newsletter kami.
        </p>
      </div>
      <div class="form">
        <input type="text" />
        <button>Kirim</button>
      </div>
    </div>
    <div class="whatsapp">
      <div class="text-form-content">
        <h3>Bergabung dengan Whatsapp Group kami</h3>
        <p>
          Untuk mengetahui informasi terupdate mengenai promo, program baru,
          workshop & event kami!
        </p>
      </div>
      <div class="form">
        <button>Gabung Whatsapp Group</button>
      </div>
    </div>
  </div>
  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="content-modal">
        <img src="assets/cookie.png" alt="" width="40px" />
        <p>
          We use cookies for improving user experience, analytics and
          marketing
        </p>
        <div class="btn-modal" id="btnModal">That's Fine!</div>
      </div>
    </div>
  </div>
</body>
<script>
  let slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides((slideIndex += n));
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides((slideIndex = n));
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }

  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  let btnModal = document.getElementById("btnModal");

  btnModal.onclick = function() {
    modal.style.display = "none";
  };

  function onModal() {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    console.log("yy");
    modal.style.display = "none";
  };

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
</script>

</html>