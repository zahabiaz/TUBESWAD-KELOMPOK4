@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Cuti') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal Awal</th>
                                <th scope="col">Tanggal Selesai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Status</th>
                               
                                </tr>
                            </thead>
                            @php $no=1; @endphp
                            @foreach ($data as $data)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>{{ $data->tanggal_selesai }}</td>
                                    <td>{{ $data->keterangan }}</td>
                                    
                                    <td>
                                    @if($data->status =='pending')
                                    <button type="button" class="btn btn-warning btn-sm">Pending</button>
                                    @elseif($data->status =='gagal')
                                    <button type="button" class="btn btn-danger btn-sm">Gagal</button>
                                    @else
                                    <button type="button" class="btn btn-success btn-sm">Sukses</button>
                                    @endif
                                    </td>

                                   
                                </tr>
                            </tbody>
                             @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
