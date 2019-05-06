@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   

                  <form class="form-horizontal form-label-left" method="POST" action="{{url('save')}}" >

                        {{ csrf_field() }}
                      <div class="form-group">
                        <div class="row clearfix">
                          <div class="col-md-2">
                            <label class="control-label" for="name">Nama Barang </label>
                          </div>
                          <div class="col-md-6">
                            <input class="form-control " name="nama_produk" type="text">
                          </div>
                        </div>
                      </div>
                 
                      <div class="item form-group">
                        <div class="row clearfix">
                          <div class="col-md-2">
                          <label class="control-label " for="name">Harga </label>
                        </div>
                        <div class="col-md-6">
                          <input  class="form-control" name="harga" type="text">
                        </div>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="{{url('/home')}}" class="btn btn-primary">Cancel</a>
                          <button type="submit" class="btn btn-success">simpan</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
