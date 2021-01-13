@extends('layouts.master')

@section('content')
<section id="main-content">
            <section class="wrapper">
                <!--state overview start-->
                <div class="row state-overview">
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol terques">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="value">
                                <h1 >
                                    {{ $jumlahpegawai }}
                                </h1>
                                <p>Jumlah Pegawai</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol red">
                                <i class="fa fa-tags"></i>
                            </div>
                            <div class="value">
                                <h1>
                                    {{ $jumlahcuti }}
                                </h1>
                                <p>Total Cuti Pegawai</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol yellow">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="value">
                                <h1 >
                                    {{ $jumlahcutipending }}
                                </h1>
                                <p>Total Cuti Pending</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol blue">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="value">
                                <h1 >
                                    {{ $jumlahcutisukses }}
                                </h1>
                                <p>Total Cuti Sukses</p>
                            </div>
                        </section>
                    </div>
                     <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol blue">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="value">
                                <h1 >
                                    {{ $jumlahcutigagal }}
                                </h1>
                                <p>Total Cuti Di tolak</p>
                            </div>
                        </section>
                    </div>
                </div>
            

            </section>
        </section>

@stop