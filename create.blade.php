@extends('layouts.master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Data</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('pelanggan')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="tanggal_transaksi" class="form-control" placeholder="Tanggal Transaksi" />
   </div>
   <div class="form-group">
    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" />
   </div>
   <div class="form-group">
    <input type="text" name="alamat" class="form-control" placeholder="Alamat" />
   </div>
   <div class="form-group">
    <input type="integer" name="no_telepon" class="form-control" placeholder="No.Telepon" />
   </div>
   <div class="form-group">
    <input type="text" name="pilihan_paket_laundry" class="form-control"/>
    <option value="dry_clean">Dry Clean (1 Day)</option>
    <option value="express">Express (2 Day)</option>
    <option value="premium">Premium (3 Day)</option>
    <option value="standart">Standart (5 Day)</option>
   </div>
   <div class="form-group">
    <input type="integer" name="berat" class="form-control" placeholder="Berat" />
   </div>
   <div class="form-group">
    <input type="integer" name="diskon" class="form-control" placeholder="0" />
   </div>
   <div class="form-group">
    <input type="integer" name="total_bayar" class="form-control" placeholder=" " />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection
