@extends('layouts.master')

@section('content')

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
               
                    <header class="panel-heading">
                        Data Absensi Hari Ini
                        <form action="/inputabsensihariini" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary pull-right">Open Absensi Hari Ini</button>
                        </form>
                        <br>
                        <br>
                    </header>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pegawai</th>
                                        <th>Bukti Absensi</th>
                                        <th>Tanggal Absensi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $no=1; @endphp
                                @foreach ($data as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->user->name }}</td>
                                        <td><img src="/images/{{ $data->bukti_absensi }}"  alt=""
                                            style="width: 100px;"></td>
                                        <td>{{ $data->created_at->format('d M Y') }}</td>
                                        <td>
                                        @if($data->status=='alfa')
                                        <span class="badge badge-sm label-danger">Alfa</span>
                                        @else
                                        <span class="badge badge-sm label-success">Hadir</span>
                                        @endif
                                        
                                        </td>
                                         <td> 
                                            
                                            <a href="/absensi/{{ $data->id }}/updateadmin" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                           
                                            </td>
                                        
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