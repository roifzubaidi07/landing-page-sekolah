@extends('template.main')
@section('title','Halaman Galeri')

@section('content')
<div class="container">
    <main id="main">
        <div class="section-title" data-aos="zoom-in" data-aos-delay="100">
            <p>Galeri</p>
            <h2>Berikut Adalah Daftar Galeri Kegiatan di SMK Negeri 1 Sumenep</h2>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach ($galeries as $galery)
            <div class="col-sm-3 m-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../storage/{{ $galery->gambar }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{ $galery->deskripsi }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</div>
@endsection