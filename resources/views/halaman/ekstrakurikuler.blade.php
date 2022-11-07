@extends('template.main')
@section('title','Halaman Ekstrakurikuler')

@section('content')
<main id="main" class="container">
    <div class="section-title" data-aos="fade-up" data-aos-delay="100">
        <p>Ekstrakurikuler</p>
        <h2>Berikut Adalah Daftar Ekstrakurikuler di SMK Negeri 1 Sumenep</h2>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <ul class="list-group" data-aos="fade-up" data-aos-delay="100">
                <li class="list-group-item">Robotika</li>
                <li class="list-group-item">PIK-R</li>
                <li class="list-group-item">Sepakbola</li>
                <li class="list-group-item">Tahfidz</li>
                <li class="list-group-item">Paskibraka</li>
              </ul>
        </div>
    </div>
</main>
@endsection