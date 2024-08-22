<!DOCTYPE html>
<html lang="en">
<head>
    <html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <script src="js/all.js"></script>
  <script src="https://kit.fontawesome.com/8e23404ed8.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container">
                <img src="image/logo.png.png" width="100px" height="100px" alt="">
              <h1 class="navbar-brand">Portal Layanan Dinas Komunikasi dan Informasi</h1>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" aria-current="page" href="home.html">Home</a>
                  <a class="nav-link" href="layanan.html">Layanan</a>
                  <a class="nav-link" href="kontak.html">Kontak</a>
                </div>
              </div>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success me-2" style="width: 20%; " type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
              </form>
              <a href="login.html">
                <button type="button" class="btn btn-success me-5">Login</button>
              </a>
            </div>
          </nav>
      </header>
      <br>
      <br>
    
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Selamat Datang</div>
        <div class="title signup">Form Registrasi</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Daftar</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="home.html" class="login" id="login">
            <pre>
            </pre>
            <div class="field">
              <input type="email" placeholder="Masukan Email " required>
            </div>
            <div class="field">
              <input type="password" placeholder="Masukan Password" required>
            </div>
            <div class="pass-link"><a href="#">Lupa password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
          </form>
          <form onsubmit="return validatePassword()" action="home.html" class="signup" id="signup">
            <div class="field">
              <input type="text" placeholder="Masukan Nama" required>
            </div>
            <div class="field">
              <input type="text" placeholder="Masukan Email" required>
            </div>
            <div class="field">
              <input type="password" id="password" placeholder="Masukan Password" required>
            </div>
            <div class="field">
              <input type="password" id="confirmPassword" placeholder="Ulangi password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Daftar">
            </div>
          </form>
        </div>
      </div>
    </div>
    
        <p class="footer-copyright">Portal Layanan</p>
    </footer>
          <script>
            const loginText = document.querySelector("title-text .login");
            const loginForm = document.querySelector("form.login");
            const loginBtn = document.querySelector("label.login");
            const daftarBtn = document.querySelector("label.signup");
            const daftarLink = document.querySelector("form.signup-link a");
            daftarBtn.onclick=(()=>{
              loginForm.style.marginLeft = "-50%";
              loginText.style.marginLeft = "-50%";
            });
            loginBtn.onclick=(()=>{
              loginForm.style.marginLeft = "0%";
              loginText.style.marginLeft = "0%";
            });
            daftarLink.onclick=(()=>{
              daftarBtn.click();
              return false;
            })
    
            function validatePassword() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
    
            if (password != confirmPassword) {
              alert("Password and confirm password do not match!");
              return false;
            }
            return true;
    }
          </script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
    </html>
</body>
</html>