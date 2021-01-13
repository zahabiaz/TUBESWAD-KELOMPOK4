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
                                <th scope="col">Tanggal Abesni</th>
                                <th scope="col">Keterangan</th>
                                     </tr>
                            </thead>
                            @php $no=1;  @endphp
                            @foreach ($data as $data)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->user->name }}</td>
                                    <td>{{ $data->created_at->format('d M Y') }}</td>

                                    <td>
                                    @if($data->status =='alfa')
                                    <button type="button" class="btn btn-warning btn-sm">Alfa</button>
                                    @elseif($data->status =='hadir')
                                    <button type="button" class="btn btn-success btn-sm">hadir</button>
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
