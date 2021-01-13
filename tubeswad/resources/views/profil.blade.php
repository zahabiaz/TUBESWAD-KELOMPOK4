@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Data Profil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama : {{ auth()->user()->name }}</li>
                        <li class="list-group-item">No Pegawai : {{ auth()->user()->no_pegawai }}</li>
                        <li class="list-group-item">No Telpon : {{ auth()->user()->no_telpon }}</li>
                        <li class="list-group-item">Email : {{ auth()->user()->email }}</li>
                        <li class="list-group-item">Jabatan : {{ auth()->user()->jabatan }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection