<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OPD</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    /* Grid layout for circles */
    .circle-container {
      display: grid;
      grid-template-columns: repeat(5, 1fr); /* Adjust column count and size */
      gap: 30px; /* Set gap between circles to 30px */
      justify-content: center;
      padding: 20px;
    }
    .circle-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    .circle {
      width: 100px; /* Updated width for circles */
      height: 100px; /* Updated height for circles */
      border-radius: 50%;
      overflow: hidden;
      background-color: #f0f0f0;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      position: relative;
    }
    .circle img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .caption {
      text-align: center;
      font-size: 14px;
      margin-top: 10px; /* Increase margin for better spacing */
    }
    /* Header and Footer CSS */
    header {
      background-color: #343a40;
      color: white;
      padding: 10px 0;
    }
    header .container {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    header h1 {
      margin: 0;
    }
    footer {
      background-color: #f1f1f1;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .footer-left, .footer-center, .footer-right {
      width: 30%;
    }
    .footer-left img {
      height: auto;
      width: 30%;
      margin-right: 10px;
    }
    .footer-center i {
      margin-right: 10px;
    }
    .footer-media a {
      margin-right: 10px;
    }
    .footer-media i {
      font-size: 20px;
      color: #333;
    }
    .footer-about {
      text-align: justify;
    }
    .footer-about span {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <img src="image/logo.png.png" width="100px" height="100px" alt="">
      <h1 class="navbar-brand">Portal</h1>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" aria-current="page" href="home.html">Home</a>
            </div>
          </div>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success me-2" style="width: 20%; " type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
          </form>
      </nav>
      <a href="login.html">
        <button type="button" class="btn btn-success me-5">Login</button>
      </a>
    </div>
  </header>
  <main>
    <div class="circle-container"></div>
  </main>
  <footer>
    <div class="footer-left">
      <h3>Supported By</h3>
      <div class="credit-cards">
        <img src="image/logoblitar.png" style="height: 50%; width: 20%;" alt="">
        <img src="image/logo.png.png" style="height: 50%; width: 20%;" alt="">
        <img src="image/jatim-removebg-preview.png" style="height: 50%; width: 20%;" alt="">
      </div>
    </div>
    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p style="font-size: 15px;">Blitar, Jawa Timur, Indonesia</p>
      </div>
    </div>
    <div class="footer-right">
      <div class="footer-media">
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const imageUrls = [
      'image/prokopin.jpeg', 'image/dinaspendidikan.jpg', 'image/dinsos.webp',
      'image/dispora.jpeg', 'image/dinkes.jpeg', 'image/dispendukcapil.jpg',
      'image/disnaker.jpeg', 'image/dishub.png', 'image/dinas_PUPR.jpeg',
      'images/dpkp.jpeg', 'image/diskop.jpeg', 'image/disperindag.jpeg',
      'image/dpp.jpeg', 'image/dlh.jpeg', 'image/perpus.jpg',
      'image/disnakan.jpg', 'image/logo.png.png', 'image/dpmptsp.jpg',
      'images/dppkbp3a.jpeg', 'image/logo.png.png', 'image/satpolpp.jpeg',
      'image/bappeda.jpeg', 'image/bakesbapol.jpeg', 'image/bappeda.jpeg',
      'image/bpkad.jpeg', 'image/bkpsdm.jpeg', 'image/rsud.png',
      'image/inspektorat.jpeg', 'image/bpbd.png', 'image/logoblitar.png'
    ];

    const links = [
      'https://www.blitarkab.go.id/lokasi/', 'https://dispendik.blitarkab.go.id/', 'https://dinsos.blitarkab.go.id/',
      'https://www.blitarkab.go.id/2012/06/11/dinas-pariwisata-pemuda-dan-olah-raga/', 'https://dinkes.blitarkab.go.id/', 'https://linktr.ee/dispendukcapilblitarkab',
      'https://disnaker.blitarkab.go.id/', 'https://linktr.ee/dishubkabblitar', 'https://dpupr.blitarkab.go.id/',
      'https://www.blitarkab.go.id/2012/06/11/dinas-pu-cipta-karya-dan-tata-ruang/', 'https://diskopukm.blitarkab.go.id/', 'https://disperindag.blitarkab.go.id/',
      'https://dkpp.blitarkab.go.id/', 'https://dlh.blitarkab.go.id/', 'https://linktr.ee/inovasidispusipkabblitar',
      'https://linktr.ee/seputardisnakkan', 'https://kominfo.blitarkab.go.id/', 'https://sippn.menpan.go.id/instansi/144016/pemerintah-kab-blitar/dinas-penanaman-modal-dan-pelayanan-terpadu-satu-pintu',
      'https://www.blitarkab.go.id/2012/06/12/badan-pp-kb/', 'https://www.blitarkab.go.id/2012/06/12/badan-pemberdayaan-masyarakat/', 'https://www.blitarkab.go.id/2012/07/18/satpol-pp-2/',
      'https://data.blitarkab.go.id/archive/v2/kegiatansektoral/list/7', 'https://bakesbangpol.blitarkab.go.id/', 'https://bapenda.blitarkab.go.id/',
      'https://www.instagram.com/bpkad.kabblitar?igsh=MXJsaWhqeDJqZmV4bg==', 'https://bkpsdm.blitarkab.go.id/', 'https://rsudngudiwaluyo.blitarkab.go.id/index.php/en/',
      'https://inspektorat.blitarkab.go.id/', 'https://bpbd.blitarkab.go.id/', 'https://dprd.blitarkab.go.id/'
    ];

    const captions = [
      'SEKDA Kabupaten Blitar', 'Dinas Pendidikan', 'Dinas Sosial', 'DISPORA', 'Dinas Kesehatan', 'Dinas Pendukcapil',
      'Dinas Tenaga Kerja', 'Dinas Perhubungan', 'Dinas PUPR', 'Dinas Perumahan dan Kawasan Permukiman', 'Dinas Koperasi dan Usaha Mikro', 'DISPERINDAG',
      'Dinas Pertanian dan Pangan', 'Dinas Lingkungan Hidup', 'Dinas Perpustakaan dan Arsip', 'Dinas Peternakan dan Perikanan', 'Dinas Komunikasi dan Informatika', 'DPMPTSP',
      'DPPKBP3A', 'Dinas Komunikasi dan Informatika', 'Satpol PP', 'BAPPEDA', 'BAKESBANGPOL', 'BAPENDA',
      'BPKAD', 'BKPSDM', 'RSUD Ngudi Waluyo Wlingi', 'INSPEKTORAT', 'BPBD', 'SEKRETARIAT DEWAN'
    ];

    const circleContainer = document.querySelector('.circle-container');
    imageUrls.forEach((url, index) => {
      const circleWrapper = document.createElement('div');
      circleWrapper.classList.add('circle-wrapper');

      const circle = document.createElement('div');
      circle.classList.add('circle');
      const img = document.createElement('img');
      img.src = url;
      img.alt = `Gambar ${index + 1}`;
      circle.appendChild(img);
      circle.onclick = function() {
        window.location.href = links[index];
      };

      const caption = document.createElement('div');
      caption.classList.add('caption');
      caption.textContent = captions[index];

      circleWrapper.appendChild(circle);
      circleWrapper.appendChild(caption);
      circleContainer.appendChild(circleWrapper);
    });
  </script>
</body>
</html>
