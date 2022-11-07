@extends('template.main')
@section('title','Halaman Beranda')

@section('content')
<!-- ======= Hero Section ======= -->

@include('parts.hero')

<!-- End Hero -->
<main id="main">
    <div class="m-4">
        <div class="row">
            <div class="col-sm-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/EwSdiYQfYcU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col">
                <h1>Video Profil SMK Negeri 1 Sumenep</h1>
                <h6>SMKN 1 SUMENEP adalah salah satu satuan pendidikan dengan jenjang SMK di Patian, Kec. Batuan, Kab. Sumenep, Jawa Timur. Dalam menjalankan kegiatannya, SMKN 1 SUMENEP berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.
                </h6>
            </div>
        </div>
    </div>

    <!-- ======= Counts Section ======= -->
        
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F6F7F6" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,85.3C384,96,480,160,576,165.3C672,171,768,117,864,106.7C960,96,1056,128,1152,138.7C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <section id="counts" class="counts section-bg">
      <div class="container">
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1048" data-purecounter-duration="1" class="purecounter"></span>
            <p>Siswa</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Guru & TU</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
            <p>Program Keahlian</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
            <p>Ekstrakurikuler</p>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F6F7F6" fill-opacity="1" d="M0,160L48,138.7C96,117,192,75,288,85.3C384,96,480,160,576,197.3C672,235,768,245,864,229.3C960,213,1056,171,1152,133.3C1248,96,1344,64,1392,48L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <!-- End Counts Section -->

    <!-- ======= Trainers Section ======= -->

    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="section-title">
            <h2>Guru & TU</h2>
            <p>Daftar Guru</p>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="../img/trainers/trainer-1.jpg" class="img-fluid" alt="" />
              <div class="member-content">
                <h4>Walter White</h4>
                <span>RPL</span>
                <p>Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="../img/trainers/trainer-2.jpg" class="img-fluid" alt="" />
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Matematika</span>
                <p>Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="../img/trainers/trainer-3.jpg" class="img-fluid" alt="" />
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Bahasa Indonesia</span>
                <p>Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End Trainers Section -->
</main>
@endsection