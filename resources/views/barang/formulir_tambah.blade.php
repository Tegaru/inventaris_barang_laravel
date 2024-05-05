<!DOCTYPE html>
<html>
<head>
   <title>Aplikasi Inventaris Barang</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
   <h1>Tambah Barang</h1>

    <!-- Form untuk menambahkan barang -->
   <form action="{{ route('barang.store') }}" method="POST">
   @csrf
     <!-- Input untuk nama barang -->
      <div class="form-group">
         <strong>Nama Barang:</strong>
         <input type="text" name="nama_barang" required="" class="form-control" placeholder="Nama Barang">
      </div>
      <!-- Input untuk jenis barang -->
      <div class="form-group">
         <strong>Jenis Barang:</strong>
         <input type="text" name="jenis_barang" required="" class="form-control" placeholder="Jenis Barang">
      </div>
      <!-- Input untuk satuan barang -->
      <div class="form-group">
         <strong>satuan:</strong>
         <input type="text" name="satuan" required="" class="form-control" placeholder="Satuan">
      </div>
      <!-- Input untuk jumlah barang -->
      <div class="form-group">
         <strong>Jumlah:</strong>
         <input type="number" name="jumlah" required="" class="form-control" placeholder="Jumlah">
      </div>
      <div class="form-group">
         <button type="submit" name="simpan" class="btn btn-success" style="margin-top: 15px;">Tambah</button>
         <a href="{{ route('barang.index') }}" class="btn btn-dark" style="margin-top: 15px;">Kembali</a>
      </div>
   </form>
</div>
</body>
</html>

