@extends('layout.master')
@section('title', 'Jemput Sampah')
@section('jemput', 'active')

@section('konten')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Layanan Jemput Sampah</h1>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5">
                        <span class="pr-2">Jemput Sampah by E-Trash</span>
                    </p>
                    <h1 class="mb-4">Sekarang Jemput Sampah Jadi Lebih Mudah</h1>
                    <p>Mudahkan aktivitas keseharian mu dengan menggunakan E-Trash Jemput Sampah. Rumah nyaman, Sampah
                        Beres!</p>
                    <ul class="list-inline m-0">
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Jemput Sampah Langsung Depan Rumahmu
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Penjemputan Sampah Menggunakan Truk Sampah
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Biaya Penjemputan Murah
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Buat Penjemputan Sampahmu</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-3" style="height: 50px">
                                        <option selected>Jenis Sampah</option>
                                        <option value="1">Organik</option>
                                        <option value="2">Non Organik</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-3" style="height: 50px">
                                        <option selected>Sampah</option>
                                        <option value="1">Sampah Plastik</option>
                                        <option value="2">Sampah Logam</option>
                                        <option value="3">Sampah Pipa</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input id="berat" name="berat" type="text" class="form-control border-0 p-4"
                                        placeholder="Berat (Kg)" required="required">
                                </div>
                                <br>
                                <div class="form-group">
                                    <input id="alamat" name="alamat" type="text" class="form-control border-0 p-4"
                                        placeholder="Alamat" required="required">
                                </div>
                                <br>
                                <div class="form-group">
                                    <input id="tanggal_penjemputan" name="tanggal_penjemputan" type="text"
                                        class="form-control border-0 p-4" placeholder="Tanggal Penjemputan"
                                        required="required">
                                </div>
                                <br>
                                <div>
                                    <button class="btn btn-secondary btn-block border-0 py-3" type="submit">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    @include('user.testimoni')

@endsection
