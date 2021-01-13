@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Upload Bukti Absensi') }}
                    <br>
                    <br>

                    <form action="/absensi/{{ $data->id }}/uploadbuktiabsensi" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Masukkan Bukti Absensi</label>
                       <input type="file" class="form-control-file" name ="bukti_absensi" id="exampleFormControlFile1">
                    </div>

                    <input type="submit" class="btn btn-warning" value="Upload"></input>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection