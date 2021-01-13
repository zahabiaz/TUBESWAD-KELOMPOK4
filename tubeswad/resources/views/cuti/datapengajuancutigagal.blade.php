@extends('layouts.master')

@section('content')

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">

                    <header class="panel-heading">
                        Data Pengajuan Cuti Gagal
                        <br>
                        <br>
                    </header>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Tanggal Awal</th>
                                <th>Tanggal Selesai</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                {{-- <th>Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($data as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->tanggal }}</td>
                                <td>{{ $data->tanggal_selesai }}</td>
                                <td>{{ $data->keterangan }}</td>
                                <td>
                                    @if($data->status=='pending')
                                    <span class="badge badge-sm label-warning">Pending</span>
                                    @elseif($data->status=='sukses')
                                    <span class="badge badge-sm label-success">Sukses</span>
                                    @else
                                    <span class="badge badge-sm label-danger">Gagal</span>
                                    @endif

                                </td>
                                {{-- <td>
                                    <a href="/cuti/{{ $data->id }}/update" class="btn btn-primary btn-sm">Terima</a>
                                     <a href="/cuti/{{ $data->id }}/tolakcuti" class="btn btn-danger btn-sm">Tolak</a>
                                </td> --}}

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