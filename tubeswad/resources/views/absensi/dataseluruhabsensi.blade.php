@extends('layouts.master')

@section('content')

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">

                    <header class="panel-heading">
                        Data Absensi Pegawai

                        <br>
                        <br>
                    </header>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Bulan</th>
                                <th>Jumlah Kehadiran</th>
                                <th>Jumlah Pertemuan</th>
                                <th>Persentase</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($user as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->created_at->format('M') }}</td>
                                @php
                                $totalabsen = App\Absensi::where('user_id',$data->id)->where('status','hadir')->count()
                                @endphp
                                @php
                                $jumlahpertemuan = App\Absensi::where('user_id',$data->id)->count()
                                @endphp
                                @php
                                $persentase = $totalabsen*100/$jumlahpertemuan;
                                @endphp

                                <td>{{ $totalabsen }}</td>
                                <td>{{ $jumlahpertemuan }}</td>
                                <td>{{ round($persentase,2) }}%</td>

                                <td><a href="/detail/{{ $data->id }}/absenpegawai"
                                        class="btn btn-success btn-sm pull-left" href="#">Detail</a></td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>

    </section>
</section>
@stop