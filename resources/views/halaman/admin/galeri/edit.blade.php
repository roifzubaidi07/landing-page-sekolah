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
        <h3 class="mt-4">Edit Galeri</h3>
        <form action="/admin/galeri/{{ $galery->id }}" method="post">
            <div class="row">
                <div class="col-md-6">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <div class="form-group">
                          <label for="deskripsi">Deskripsi</label>
                          <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3">{{ $galery->deskripsi }}</textarea>
                          @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                    <button type="submit" class="btn btn-primary align-self-end">Simpan</button>
                    <a type="button" class="btn btn-link align-self-end" href="/admin/galeri">Batal</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>