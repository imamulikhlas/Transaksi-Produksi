@extends('layouts.master')


@section('content')
<div class="container-fluid">

    <!-- Title -->
    <h1 class="h2">
        Dashboard
    </h1>
    
    <div class="row">
        <div class="col-xxl-5">
            <div class="row">
                <div class="col-md-6">

                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-between">

                                    <div>
                                        <!-- Title -->
                                        <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-success"></span>
                                            Lokasi
                                        </h5>

                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                            {{ $transaksiProduksi->total_lokasi }}
                                        </h2>
                                    </div>

                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="32" width="32"><defs><style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><title>cash-briefcase</title><path class="a" d="M9.75,15.937c0,.932,1.007,1.688,2.25,1.688s2.25-.756,2.25-1.688S13.243,14.25,12,14.25s-2.25-.756-2.25-1.688,1.007-1.687,2.25-1.687,2.25.755,2.25,1.687"/><line class="a" x1="12" y1="9.75" x2="12" y2="10.875"/><line class="a" x1="12" y1="17.625" x2="12" y2="18.75"/><rect class="a" x="1.5" y="6.75" width="21" height="15" rx="1.5" ry="1.5"/><path class="a" d="M15.342,3.275A1.5,1.5,0,0,0,13.919,2.25H10.081A1.5,1.5,0,0,0,8.658,3.275L7.5,6.75h9Z"/></svg>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>

                <div class="col-md-6">

                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-between">

                                    <div>
                                        <!-- Title -->
                                        <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-success"></span>
                                            Item
                                        </h5>

                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                            {{ $transaksiProduksi->total_item }}
                                        </h2>
                                    </div>

                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="32" width="32"><defs><style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><title>cash-briefcase</title><path class="a" d="M9.75,15.937c0,.932,1.007,1.688,2.25,1.688s2.25-.756,2.25-1.688S13.243,14.25,12,14.25s-2.25-.756-2.25-1.688,1.007-1.687,2.25-1.687,2.25.755,2.25,1.687"/><line class="a" x1="12" y1="9.75" x2="12" y2="10.875"/><line class="a" x1="12" y1="17.625" x2="12" y2="18.75"/><rect class="a" x="1.5" y="6.75" width="21" height="15" rx="1.5" ry="1.5"/><path class="a" d="M15.342,3.275A1.5,1.5,0,0,0,13.919,2.25H10.081A1.5,1.5,0,0,0,8.658,3.275L7.5,6.75h9Z"/></svg>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>        
            </div> <!-- / .row -->
        </div>

        <div class="col-xxl-7">
            <div class="row">
                <div class="col-md-6">

                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-between">

                                    <div>
                                        <!-- Title -->
                                        <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-success"></span>
                                            Planning
                                        </h5>

                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                            {{ $transaksiProduksi->total_planning }}
                                        </h2>
                                    </div>

                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="32" width="32"><defs><style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><title>cash-briefcase</title><path class="a" d="M9.75,15.937c0,.932,1.007,1.688,2.25,1.688s2.25-.756,2.25-1.688S13.243,14.25,12,14.25s-2.25-.756-2.25-1.688,1.007-1.687,2.25-1.687,2.25.755,2.25,1.687"/><line class="a" x1="12" y1="9.75" x2="12" y2="10.875"/><line class="a" x1="12" y1="17.625" x2="12" y2="18.75"/><rect class="a" x="1.5" y="6.75" width="21" height="15" rx="1.5" ry="1.5"/><path class="a" d="M15.342,3.275A1.5,1.5,0,0,0,13.919,2.25H10.081A1.5,1.5,0,0,0,8.658,3.275L7.5,6.75h9Z"/></svg>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-between">

                                    <div>
                                        <!-- Title -->
                                        <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-success"></span>
                                            Total Transaksi Produksi
                                        </h5>

                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                            {{ $transaksiProduksi->total }}
                                        </h2>
                                    </div>

                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="32" width="32"><defs><style>.a{fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5px;}</style></defs><title>cash-briefcase</title><path class="a" d="M9.75,15.937c0,.932,1.007,1.688,2.25,1.688s2.25-.756,2.25-1.688S13.243,14.25,12,14.25s-2.25-.756-2.25-1.688,1.007-1.687,2.25-1.687,2.25.755,2.25,1.687"/><line class="a" x1="12" y1="9.75" x2="12" y2="10.875"/><line class="a" x1="12" y1="17.625" x2="12" y2="18.75"/><rect class="a" x="1.5" y="6.75" width="21" height="15" rx="1.5" ry="1.5"/><path class="a" d="M15.342,3.275A1.5,1.5,0,0,0,13.919,2.25H10.081A1.5,1.5,0,0,0,8.658,3.275L7.5,6.75h9Z"/></svg>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </div> <!-- / .row -->

    <div class="row">
        <div class="d-flex justify-content-end mb-5">
            <ul class="nav">
                <li class="nav-item" data-toggle="chart" data-action="visibility" data-target="#overviewChart" data-dataset="0">
                    <a class="nav-link chart-legend" href="#">
                        <span class="legend-circle-lg bg-white border border-2 border-primary"></span>
                        Expected revenue
                    </a>
                </li>
                <li class="nav-item" data-toggle="chart" data-action="visibility" data-target="#overviewChart" data-dataset="1">
                    <a class="nav-link chart-legend" href="#">
                        <span class="legend-circle-lg rounded-0 h-4px bg-blue"></span>
                        Actual revenue
                    </a>
                </li>
            </ul>
        </div>
         
        <div class="chart-container h-250px">
            <canvas id="overviewChart"></canvas>
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container-fluid -->
@endsection