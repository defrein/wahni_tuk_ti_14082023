@extends('layout')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Dashboard</h3>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-success">
                    <h5>Selamat Datang!</h5>
                    <p>{{ auth()->user()->nama }}</p>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-gradient-danger">
                    <div class="inner">
                        <h3>12</h3>
                        <p>Surat Masuk</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-file-excel"></i>
                    </div>
                    <a href="/surat-masuk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-gradient-warning">
                    <div class="inner">
                        <h3>20</h3>
                        <p>Surat Keluar</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-file"></i>
                    </div>
                    <a href="/surat-keluar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
