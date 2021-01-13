@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Absensi') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal Absensi</th>
                                <th scope="col">Bukti Absensi</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            @foreach ($data as $data )
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data->created_at->format('d M Y') }}</td>
                                    <td><img src="/images/{{ $data->bukti_absensi }}"  alt=""
                                    style="width: 100px;"></td>
                                    <td>
                                    @if($data->status =='alfa')
                                    <button type="button" class="btn btn-danger btn-sm">Alfa</button>
                                    @else
                                    <button type="button" class="btn btn-primary btn-sm">Hadir</button>
                                    @endif
                                    </td>
                                    <td>
                                        <a href="/absensi/{{ $data->id }}/update" type="button" class="btn btn-sm btn-outline-primary">Absensi</a>
                                        <a href="/absensi/{{ $data->id }}/buktiabsensi" type="button" class="btn btn-sm btn-outline-secondary">Upload Bukti</a>
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
