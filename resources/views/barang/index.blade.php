<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Inventaris Barang</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 style="margin-bottom: 20px; margin-top: 20px">Data Barang</h1>
        
        <!-- Tombol untuk menambah barang baru -->
        <a href="{{ route('barang.create') }}" class="btn btn-success">Tambah</a>
        
        <!-- Tabel untuk menampilkan data barang -->
        <div class="table-responsive">
            <table class="table table-striped shadow p-3 bg-body-tertiary rounded" style="margin-top: 10px">
                <thead class="table-dark">
                    <tr>
                        <!-- Kolom yang akan ditampilkan -->
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Satuan</th>
                        <th>Jumlah</th>
                        <th><center>Aksi</center></th>
                    </tr>
                </thead>
                
                <!-- Looping untuk menampilkan setiap data barang -->
                @foreach($barangs as $index => $barang)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->jenis_barang }}</td>
                    <td>{{ $barang->satuan }}</td>
                    <td>{{ $barang->jumlah }}</td>
                    
                    <!-- Tombol aksi untuk mengubah dan menghapus barang -->
                    <td><center>
                        <a href='/barang/{{ $barang->id }}/edit/' class='btn btn-primary'>Ubah</a>
                        <form action='/barang/{{ $barang->id }}' method='POST' style='display:inline'>
                            @csrf <!-- Melindungi form dari serangan Cross-Site Request Forgery (CSRF) -->
                            @method('DELETE') <!-- Menggunakan metode DELETE -->
                            <!-- Tombol untuk menghapus barang -->
                            <button type='submit' class='btn btn-danger' onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                        </form>
                    </center></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
<!-- Script JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
