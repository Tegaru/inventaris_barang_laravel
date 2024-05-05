<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // Mengambil dan menampilkan semua data barang
    public function index() 
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

     // Menampilkan formulir untuk menambahkan barang baru
    public function create()
    {
        return view('barang.formulir_tambah');
    }
    
    // Menyimpan data barang baru ke dalam database
    public function store(Request $request)
    // Mendapatkan data dari permintaan HTTP POST
    {
        $data = [
            'nama_barang' => $request->input('nama_barang'),
            'jenis_barang' => $request->input('jenis_barang'),
            'satuan' => $request->input('satuan'),
            'jumlah' => $request->input('jumlah')
        ];
    
        // Membuat barang baru menggunakan metode create dari model Barang
        Barang::create($data);
    
        // Mengarahkan pengguna kembali ke halaman indeks barang
        return redirect()->route('barang.index');
    }

    // Menampilkan formulir untuk mengedit barang
    public function edit(Barang $barang)
    {
        return view('barang.formulir_edit', compact('barang'));
    }

    // Memperbarui data barang yang sudah ada
    public function update(Request $request, Barang $barang)

    // Mendapatkan data yang diubah dari formulir edit
    {
        $data = [
            'nama_barang' => $request->input('nama_barang')
            , 'jenis_barang' => $request->input('jenis_barang')
            , 'satuan' => $request->input('satuan')
            , 'jumlah' => $request->input('jumlah')
        ];

        // Memperbarui data barang yang sesuai dengan ID barang yang diberikan
        $barang->update($data);

        // Mengarahkan pengguna kembali ke halaman indeks barang
        return redirect()->route('barang.index');
    }

    // Menghapus data barang yang sudah ada
    public function destroy(Barang $barang)
    {
        // Menghapus barang dari basis data
        $barang->delete();

        // Mengarahkan pengguna kembali ke halaman indeks barang
        return redirect()->route('barang.index');
    }
}

