<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/all.js"></script>
    <script src="https://kit.fontawesome.com/8e23404ed8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      /* Additional styles to ensure dropdown functionality */
      .dropdown-menu .dropdown-submenu {
        position: relative;
      }
      .dropdown-menu .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px;
        border-radius: .25rem;
        display: none; /* Hide submenu by default */
      }
  
      .dropdown-menu .dropdown-submenu:hover .dropdown-menu {
        display: block; /* Show submenu on hover */
      }
  
      .clickable {
        cursor: pointer;
      }
      .clickable img {
        transition: transform 0.3s ease;
      }
      .clickable img:hover {
        transform: scale(1.05);
      }
      .home-tag {
        text-align: center;
        margin: 20px 0;
      }
      .footer {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        background-color: #f1f1f1;
      }
      .footer-left, .footer-center, .footer-right {
        width: 30%;
      }
    </style>
    <body>
      <header>
          <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
              <div class="container">
                  <img src="image/icon.png" width="100px" height="100px" alt="Icon">
                  <h1 class="navbar-brand">Layanan</h1>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                          <a class="nav-link" href="home.html">Home</a>
                          <div class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Macam Layanan
                              </a>
  </head>