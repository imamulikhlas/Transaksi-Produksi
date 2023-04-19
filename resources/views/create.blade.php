@extends('layouts.master')


@section('content')
<div class="container-fluid">

    <!-- Title -->
    <h1 class="h2">
        Create Transaksi
    </h1>
    <div class="row">
        <div class="col-xxl-5 d-flex">

            <!-- Card -->
            <div class="card border-0 flex-fill w-100">
                <div class="card-header border-0 card-header-space-between">
                    
                    <!-- Title -->
                    <h2 class="card-header-title h4 text-uppercase">
                        Transaksi Produksi
                    </h2>
                    @if(session()->has('success'))
                        <div class="alert alert-success">{{ session()->get('success') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="card-body">
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="row mb-4">
                          <div class="col-lg-3">
                            <label for="fullName" class="col-form-label">Tanggal Transaksi</label>
                          </div>
                          <div class="col-lg">
                            <input type="datetime-local" name="tanggal_transaksi" class="form-control" value="{{ date('Y-m-d\TH:i:s') }}">                          </div>
                        </div> <!-- / .row -->
                        <div class="row mb-4">
                          <div class="col-lg-3">
                            <label for="fullName" class="col-form-label">Lokasi</label>
                          </div>
                          <div class="col-lg">
                            <select name="kode_lokasi" class="form-select" autocomplete="off" data-select='{
                              "placeholder": "Select a person..."}'>
                              <option value="">-- Select a person --</option>
                              @foreach ($lokasis as $lokasi)
                              <option value="{{ $lokasi->kode_lokasi }}">{{ $lokasi->nama_lokasi }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div> <!-- / .row -->
                        <div class="row mb-4">
                          <div class="col-lg-3">
                            <label for="fullName" class="col-form-label">Item</label>
                          </div>
                          <div class="col-lg">
                            <select name="kode_item" class="form-select" autocomplete="off" data-select='{
                              "placeholder": "Select a person..."}'>
                              <option value="">-- Select a person --</option>
                              @foreach ($items as $item)
                              <option value="{{ $item->kode_item }}">{{ $item->nama_item }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div> <!-- / .row -->
                        <div class="row mb-4">
                          <div class="col-lg-3">
                            <label for="fullName" class="col-form-label">Quantity</label>
                          </div>
                          <div class="col-lg">
                            <input type="text" id="exampleFormControlInput1" name="qty_actual" class="form-control">
                          </div>
                        </div> <!-- / .row -->
                        <div class="row mb-4">
                          <div class="col-lg">
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div> <!-- / .row -->
                      </form>                      
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
</div> <!-- / .container-fluid -->
@endsection