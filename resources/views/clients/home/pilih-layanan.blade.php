@extends('clients.client-layout')
@section('title', 'Service AC')
@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="fw-bold text-uppercase">Service AC</h1>
                <form method="post" action="{{ route('buat_transaksi') }}">
                    @csrf
                    <div class="mb-3">
                        <div class="form-label">Jenis Jasa</div>
                        <input type="text" class="form-control" name="layanan" value="{{$layanan->nama_layanan}}" readonly>
                    </div>
                 
                    <div class="mb-3">
                        <div class="form-label">Perkiraan Biaya</div>
                        <input type="number" class="form-control" name="biaya_jasa" id="biaya_jasa" value="{{$layanan->biaya_layanan}}"
                            readonly>
                    </div>

                    <div class="mb-3">
                        <div class="form-label">Jumlah AC</div>
                        <input type="number" class="form-control" name="jumlah_ac" id="jumlah_ac">
                    </div>

                    <h1 class="fw-bold text-uppercase my-3">Identitas Penyewa </h1>
                    <div class="mb-3">
                        <div class="form-label">Kontak</div>
                        <input type="number" name="nomor_hp" id="nomor_hp" class="form-control">

                    </div>
                    <div class="mb-3">
                        <div class="form-label">Alamat</div>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="form-label">Penerima layanan</div>
                        <input type="text" name="penerima_layanan" id="penerima_layanan" class="form-control">
                    </div>

                    <h1 class="fw-bold text-uppercase my-3">Waktu Kedatangan </h1>
                    <div class="mb-3">
                        <div class="form-label">Tanggal Kedatangan </div>
                        <input type="date" class="form-control" name="tanggal_kedatangan">
                    </div>
                    <div class="mb-3">
                        <div class="form-label">Tanggal Waktu Kedatangan</div>
                        <input type="time" class="form-control" name="waktu_kedatangan">
                    </div>


                    <button type="submit" class="btn btn-dark">Lakukan Penyewaan</button>


                </form>
            </div>
            <div class="col-lg-4 offset-2">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="{{ asset('dokumentasi/bongkar-ac.jpeg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('dokumentasi/service-ac.jpeg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('dokumentasi/perbaikin-2.jpeg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('dokumentasi/perbaikin-ac.jpeg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Deskripsi Layanan</h4>
                        <hr>
                        <ul>
                            <li>Layanan 1</li>
                            <li>Layanan 2</li>
                            <li>Layanan 3</li>
                            <li>Layanan 4</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
{{--  --}}
