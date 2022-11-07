<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Halaman Admin | Jabatan</title>
</head>
<body>
    <div class="container">
      <h3 class="mt-4">Daftar Jabatan SMK</h3>
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
              <th scope="col">Nama</th>
              <th scope="col">Jabatan</th>
              <th scope="col">NIP</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($leaders as $index => $leader)
              <tr>
                  <th scope="row">{{ $index+1 }}</th>
                  <td>{{ $leader->name }}</td>
                  <td>{{ $leader->department }}</td>
                  <td>{{ $leader->nip }}</td>
                  <td><a href="/admin/jabatan/{{ $leader->id }}/edit" class="btn btn-success" >Edit</a> 
                    <form action="/admin/jabatan/{{$leader->id}}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger text-decoration-none border-0 d-inline" onclick="return confirm(`Apakah Anda yakin ingin menghapus {{$leader->name}} dari database ?`)">Hapus</button>
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
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Jabatan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <div class="modal-body">
                  <form action="/admin/jabatan" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                          <label for="name" class="form-label">Nama</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">
                          @error('name')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="department" class="form-label">Jabatan</label>
                          <input type="text" class="form-control @error('department') is-invalid @enderror" name="department" id="department">
                          @error('department')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="mb-3">
                          <label for="nip" class="form-label">NIP</label>
                          <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip">
                          @error('nip')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
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