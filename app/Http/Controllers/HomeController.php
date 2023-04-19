<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiProduksi;
use App\Models\Item;
use App\Models\Lokasi;
use App\Models\Planning;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        //get all data
        $transaksiProduksi = TransaksiProduksi::join('item', 'transaksi_produksi.kode_item', '=', 'item.kode_item')
        ->join('lokasi', 'transaksi_produksi.kode_lokasi', '=', 'lokasi.kode_lokasi')
        ->select('transaksi_produksi.*', 'item.nama_item', 'lokasi.nama_lokasi')
        ->get();

        //Logic
        $transaksiProduksi->total = TransaksiProduksi::sum('qty_actual');
        $transaksiProduksi->total_lokasi = Lokasi::count();
        $transaksiProduksi->total_item = Item::count();
        $transaksiProduksi->total_planning = Planning::count();
        
        return view('dashboard', compact('transaksiProduksi'));
    }

    public function create()
    {
        $items = Item::all();
        $lokasis = Lokasi::all();
        // dd($items);
        return view('create', compact('items','lokasis'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diinputkan pada form
        $request->validate([
            'tanggal_transaksi' => 'required',
            'kode_lokasi' => 'required',
            'kode_item' => 'required',
            'qty_actual' => 'required|numeric',
        ]);

        // Buat instance model TransaksiProduksi dan set nilai atributnya sesuai dengan data yang diinputkan pada form
        $transaksi = new TransaksiProduksi();
        $transaksi->npk = Auth::user()->username; // set nilai default NPK
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->kode_lokasi = $request->kode_lokasi;
        $transaksi->kode_item = $request->kode_item;
        $transaksi->qty_actual = $request->qty_actual;

        // Simpan data ke dalam tabel transaksi_produksi
        $transaksi->save();

        // Redirect ke halaman yang diinginkan setelah data berhasil disimpan
        return redirect()->route('create')->with('success', 'Data transaksi berhasil disimpan.');
    }

    public function show()
    {

        $transaksiProduksi = TransaksiProduksi::join('item', 'transaksi_produksi.kode_item', '=', 'item.kode_item')
        ->join('lokasi', 'transaksi_produksi.kode_lokasi', '=', 'lokasi.kode_lokasi')
        ->select('transaksi_produksi.*', 'item.nama_item', 'lokasi.nama_lokasi')
        ->get();

        return view('show', compact('transaksiProduksi'));
    }

    public function destroy($id)
    {
        $transaksiProduksi = TransaksiProduksi::findOrFail($id);
        $transaksiProduksi->delete();
        return redirect()->route('show');
    }

    public function edit($id)
    {
        $transaksiProduksi = TransaksiProduksi::findOrFail($id);
        $items = Item::all();
        $lokasis = Lokasi::all();
        return view('edit', compact('transaksiProduksi', 'items', 'lokasis'));
    }

    public function update(Request $request, $id)
    {
        $transaksiProduksi = TransaksiProduksi::findOrFail($id);
        $transaksiProduksi->update($request->all());
        return redirect()->route('show');
    }
}
