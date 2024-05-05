<!DOCTYPE html>
<html>
<head>
   <title>Aplikasi Inventaris Barang</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
   <h1>Edit Barang</h1>

   <!-- Form untuk mengedit barang -->
   <form action="{{ route('barang.update', $barang->id) }}" method="POST">
   @csrf <!-- Melindungi form dari serangan Cross-Site Request Forgery (CSRF) -->
    @method('PUT') <!-- Menggunakan metode PUT untuk update -->
      <div class="form-group">
         <strong>Nama Barang:</strong>
         <input type="text" name="nama_barang" required="" class="form-control" placeholder="Nama Barang" value="{{ $barang->nama_barang }}">
      </div>
      <div class="form-group">
         <strong>Jenis Barang:</strong>
         <input type="text" name="jenis_barang" required="" class="form-control" placeholder="Jenis Barang" value="{{ $barang->jenis_barang }}">
      </div>
      <div class="form-group">
         <strong>satuan:</strong>
         <input type="text" name="satuan" required="" class="form-control" placeholder="Satuan" value="{{ $barang->satuan }}">
      </div>
      <div class="form-group">
         <strong>Jumlah:</strong>
         <input type="number" name="jumlah" required="" class="form-control" placeholder="Jumlah" value="{{ $barang->jumlah }}">
      </div>
      <div class="form-group">
        <!-- Tombol untuk menyimpan perubahan -->
         <button type="submit" name="update" class="btn btn-success" style="margin-top: 15px;">Ubah</button>
        <!-- Tombol untuk kembali ke halaman indeks barang -->
         <a href="{{ route('barang.index') }}" class="btn btn-dark" style="margin-top: 15px;">Kembali</a>
      </div>
   </form>
</div>
</body>
</html>
