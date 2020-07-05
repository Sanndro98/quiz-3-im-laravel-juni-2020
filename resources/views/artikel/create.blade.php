@extends('layouts.master')

@section('content')
<div class="card">
  <div class="card-header">
    Buat Artikel Baru
  </div>
  <div class="card-body">
   <form action="{{url('/artikel')}}" method="post">
	  	{{csrf_field()}}
	  <div class="form-group">
	    <label>Judul</label>
	    <input type="text" class="form-control" name="judul">
	  </div>
	  <div class="form-group">
	    <label>Isi</label>
	    <input type="text" class="form-control" name="isi">
	  </div>
	  <div class="form-group">
	    <label>Tag</label>
	    <input type="text" class="form-control" name="tag">
	  </div>	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection('content')