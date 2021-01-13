@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Form Cuti') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Silahkan Isi Form Cuti') }}
                    <br>
                    <br>

                    <form action="addtambahcuti" method="POST" >
                     {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Awal</label>
                        <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                     <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <input type="submit" class="btn btn-info" value="Submit"></input>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection