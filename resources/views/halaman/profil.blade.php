@extends('template.main')
@section('title','Halaman Profil')

@section('content')
<main id="main">
        <!-- ======= Struktur Section ======= -->
        
    <div class="m-4">
        <div class="section-title" data-aos="zoom-in" data-aos-delay="100">
            <h2>Halaman Profil</h2>
            <p>Struktur Organisasi</p>
            <img class="img-fluid rounded mx-auto d-block" src="../img/struktur.png" alt="">
        </div>
    </div>
    
        <!-- ======= End Struktur Section ======= -->

        <!-- ======= Table Jajaran Pimpinan Section ======= -->

    <div class="m-4">
        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
            <h2>Halaman Profil</h2>
            <p>Jajaran Pimpinan</p>
        </div>
        <table class="table table-striped" data-aos="fade-up" data-aos-delay="100">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">NIP</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($leaders as $index => $leader)
                <tr>
                    <th scope="row">{{ $index+1 }}</th>
                    <td>{{ $leader->name }}</td>
                    <td>{{ $leader->department }}</td>
                    <td>{{ $leader->nip }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        <!-- ======= End Tabel Jajaran Pimpinan Section ======= -->
</main>
@endsection