<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Halaman Admin | Galeri</title>
</head>
<body>
    <div class="container">
      <h3 class="mt-4">Daftar Galeri SMK</h3>
      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
      @error('error')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
      @enderror
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Gambar</th>
              <th scope="col">Deskripsi</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($galeries as $index => $galery)
              <tr>
                  <th scope="row">{{ $index+1 }}</th>
                  <td><img src="../storage/{{ $galery->gambar }}" alt="kegiatan" srcset="" style="width: 7rem"></td>
                  <td>{{ $galery->deskripsi }}</td>
                  <td><a href="/admin/galeri/{{ $galery->id }}/edit" class="btn btn-success" >Edit</a> 
                    <form action="/admin/galeri/{{ $galery->id }}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger text-decoration-none border-0 d-inline" onclick="return confirm(`Apakah Anda yakin ingin menghapus Gambar No. {{ $index+1 }} dari database ?`)">Hapus</button>
                    </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>


        {{-- Button Untuk Trigger Modal --}}
        <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>
        <a href="/admin" class="btn btn-link">Kembali</a>

        {{-- Modal --}}
        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Galeri</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <div class="modal-body">
                  <form action="/admin/galeri" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                          <label for="gambar" class="form-label">Gambar</label>
                          <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar" accept="image/*" >
                          @error('gambar')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="mb-3">
                        <div class="form-group">
                          <label for="deskripsi">Deskripsi</label>
                          <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"></textarea>
                          @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  </div>
              </form>
          </div>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>