@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{url('tambah')}}" class="btn btn-primary"> Tambah </a><br><br>
                   
                    <table class="table">
                        <tr>
                            <td> No </td>
                            <td> Nama barang </td>
                            <td> Harga </td>
                            <td> Opsi </td>

                        </tr>
                        <?php $no = 1; ?>
                         @foreach($tampung2 as $data)
                         <tr>
                             <td> {{ $no }} </td>
                             <td> {{$data->nama_barang}} </td>
                             <td> {{$data->harga}} </td>
                             <td>
                                 <a href="{{url('ubah')}}/{{ $data->id }}" > Edit </a>
                                 <a href="{{url('hapus')}}/{{ $data->id }}" > delete </a>
                             </td>
                              
                         </tr>
                        <?php $no++; ?>
                         @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
