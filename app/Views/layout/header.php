<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'UMKMku'; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* === NAVBAR === */
    .navbar-custom {
      background-color: transparent;
      transition: background-color 0.4s ease, box-shadow 0.4s ease;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    .navbar-scrolled {
      background-color: #709D61 !important;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand img {
      height: 50px;
      transition: all 0.3s ease;
    }

    .navbar-nav .nav-link {
      color: white !important;
      font-weight: 600;
      margin-right: 15px;
      transition: color 0.3s ease;
    }

    .navbar-scrolled .nav-link {
      color: black !important;
    }

    /* === HERO === */
    .hero {
      height: 100vh;
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), 
                  url('<?= base_url("img/hero.png") ?>') center/cover no-repeat;
      display: flex;
      align-items: center;
      color: white;
    }

    .hero-content {
      max-width: 600px;
      margin-left: 5%;
    }

    .hero h1 {
      font-size: 4rem;
      font-weight: 800;
    }

    .hero p {
      font-size: 1.25rem;
      margin-top: 1rem;
      line-height: 1.6;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
      padding: 12px 24px;
      margin-top: 1.5rem;
      font-weight: 600;
    }

    body {
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url('img/UMKMku_logo.png') ?>" alt="Logo UMKMku">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="/event">Event</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Insight</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Join</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
      } else {
        navbar.classList.remove('navbar-scrolled');
      }
    });
  </script>
</body>
</html>
