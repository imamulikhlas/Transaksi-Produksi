@extends('layouts.master')


@section('content')
<div class="container-fluid">

    <!-- Title -->
    <h1 class="h2">
        View Transaksi
    </h1>
    <div class="row">
        <div class="col-xxl-12 d-flex">

            <!-- Card -->
            <div class="card border-0 flex-fill w-100">
                <div class="card-header border-0 card-header-space-between">
                    
                    <!-- Title -->
                    <h2 class="card-header-title h4 text-uppercase">
                        Transaksi Produksi
                    </h2>
                    
                </div>
                <div class="alert text-bg-primary-soft mx-6" role="alert">

                    Anda dapat melakukan pencarian apapun berdasarkan data yang diinginkan pada kolom search!
                
                </div>

                <!-- Table -->
                <div class="table-responsive" data-list='{"valueNames": ["tanggal_transaksi", "kode_item", "nama_item", "kode_lokasi", "nama_lokasi", "qty_actual", "user"]}' id="listSearch">
                    <input class="form-control list-search mw-300px mb-5 ms-auto me-3" type="search" placeholder="Search">
                 
                    <table class="table table-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th class="min-w-100px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="tanggal_transaksi">
                                        Tanggal
                                    </a>
                                </th>
                                <th class="min-w-100px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="kode_item">
                                        Kode Item
                                    </a>
                                </th>
                                <th class="min-w-100px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="nama_item">
                                        Nama Item
                                    </a>
                                </th>
                                <th class="min-w-100px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="kode_lokasi">
                                        Kode Lokasi
                                    </a>
                                </th>
                                <th class="min-w-100px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="nama_lokasi">
                                        Nama Lokasi
                                    </a>
                                </th>
                                <th class="min-w-100px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="qty_actual">
                                        Qty Actual
                                    </a>
                                </th>
                                <th class="min-w-100px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="user">
                                        Created By
                                    </a>
                                </th>
                                <th class="min-w-100px">
                                    <a href="javascript: void(0);">
                                        
                                    </a>
                                </th>
                            </tr>
                        </thead>
                 
                        <tbody class="list">
                            @foreach ($transaksiProduksi as $tp)
                            <tr>
                                <td class="tanggal_transaksi">{{ $tp->tanggal_transaksi }}</td>
                                <td class="kode_item">{{ $tp->kode_item }}</td>
                                <td class="nama_item">{{ $tp->nama_item }}</td>
                                <td class="kode_lokasi">{{ $tp->kode_lokasi }}</td>
                                <td class="nama_lokasi">{{ $tp->nama_lokasi }}</td>
                                <td class="qty_actual">{{ $tp->qty_actual }}</td>
                                <td class="user">{{ $tp->npk }}</td>
                                <td>
                                    <a href="{{ route('edit', $tp->id) }}">Edit</a>
                                    <form action="{{ route('destroy', $tp->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div> <!-- / .container-fluid -->
@endsection