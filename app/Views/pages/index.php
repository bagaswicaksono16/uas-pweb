<!-- Hero Section -->
<section class="hero d-flex align-items-center"
  style="margin-top: 0; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?= base_url("img/hero.png") ?>') center/cover no-repeat; height: 100vh;">
  <div class="container text-white">
    <h1 class="fw-bold display-4">UMKMku</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam mattis libero tempus magna gravida aliquam.</p>
    <a href="#" class="btn btn-primary mt-3">Pelajari Lebih Lanjut</a>
  </div>
</section>

<!-- Tujuan Section -->
<section class="tujuan-section d-flex align-items-center bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-3">Tujuan UMKMku</h2>
    <p class="mb-5">Program UMKMku memiliki berbagai tujuan untuk mendukung pertumbuhan dan daya saing pelaku UMKM di Indonesia.</p>

    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="card tujuan-card shadow-sm border-0 h-100">
          <div class="card-body">
            <h5 class="card-title fw-bold mb-3">Meningkatkan Branding</h5>
            <p class="card-text">Membantu UMKM membangun identitas dan kepercayaan melalui strategi branding yang kuat.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card tujuan-card shadow-sm border-0 h-100">
          <div class="card-body">
            <h5 class="card-title fw-bold mb-3">Digitalisasi Bisnis</h5>
            <p class="card-text">Mendorong UMKM untuk beradaptasi dengan teknologi digital agar lebih efisien dan produktif.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card tujuan-card shadow-sm border-0 h-100">
          <div class="card-body">
            <h5 class="card-title fw-bold mb-3">Akses Permodalan</h5>
            <p class="card-text">Menjembatani pelaku UMKM dengan lembaga keuangan agar dapat memperluas modal usaha.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card tujuan-card shadow-sm border-0 h-100">
          <div class="card-body">
            <h5 class="card-title fw-bold mb-3">Peningkatan Kualitas Produk</h5>
            <p class="card-text">Mendorong inovasi dan peningkatan mutu produk agar mampu bersaing di pasar nasional maupun global.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card tujuan-card shadow-sm border-0 h-100">
          <div class="card-body">
            <h5 class="card-title fw-bold mb-3">Edukasi & Pelatihan</h5>
            <p class="card-text">Memberikan pelatihan manajemen bisnis, pemasaran, dan keuangan untuk mendukung keberlanjutan usaha.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card tujuan-card shadow-sm border-0 h-100">
          <div class="card-body">
            <h5 class="card-title fw-bold mb-3">Kolaborasi & Networking</h5>
            <p class="card-text">Membangun jejaring dan kerja sama antara UMKM, pemerintah, dan mitra bisnis strategis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Media Partner -->
<section class="py-5 text-center text-dark bg-light">
  <div class="container">
    <h3 class="fw-bold mb-3">Media Partner</h3>
    <p class="mb-5">Media partner yang bekerja sama dalam mendukung kegiatan dan program UMKMku.</p>

    <div class="row justify-content-center">
      <!-- Card 1 -->
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card partner-card shadow-sm border-0 p-4 h-100">
          <img src="<?= base_url('img/partner1.png') ?>" alt="Banten Host" class="img-fluid mx-auto" style="max-width: 120px;">
          <div class="card-body">
            <h5 class="card-title fw-semibold mt-3 mb-0">Banten Host</h5>
          </div>
        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card partner-card shadow-sm border-0 p-4 h-100">
          <img src="<?= base_url('img/partner2.png') ?>" alt="Partner 2" class="img-fluid mx-auto" style="max-width: 120px;">
          <div class="card-body">
            <h5 class="card-title fw-semibold mt-3 mb-0">Social Hub</h5>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card partner-card shadow-sm border-0 p-4 h-100">
          <img src="<?= base_url('img/partner2.png') ?>" alt="Partner 2" class="img-fluid mx-auto" style="max-width: 120px;">
          <div class="card-body">
            <h5 class="card-title fw-semibold mt-3 mb-0">Social Hub</h5>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card partner-card shadow-sm border-0 p-4 h-100">
          <img src="<?= base_url('img/partner2.png') ?>" alt="Partner 2" class="img-fluid mx-auto" style="max-width: 120px;">
          <div class="card-body">
            <h5 class="card-title fw-semibold mt-3 mb-0">Social Hub</h5>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</section>

<style>
.partner-card {
  background-color: #f9fbff;
  border-radius: 16px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.partner-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
}

.partner-card img {
  display: block;
}
</style>



  <style>
.lead{
  width: 450px;
}

    .tujuan-section {
      min-height: 100vh; /* Biar 1 layar penuh */
      padding-top: 20px;
      padding-bottom: 20px;
    }
  
    .tujuan-card {
      padding: 15px 25px;
      border-radius: 16px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
  
    .tujuan-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    }
  
    .tujuan-section h2 {
      font-size: 2.5rem;
    }
  
    .tujuan-section p {
      font-size: 1.1rem;
    }
  </style>