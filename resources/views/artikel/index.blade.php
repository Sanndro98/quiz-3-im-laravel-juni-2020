@extends('layouts.master')

@section('content')
	<section class="content">
		<div class="card">
		  <div class="card-header">
		  	<div class="navbar navbar-light bg-light justify-content-between">
			  <a class="navbar-brand">Artikel</a>
			  <form class="form-inline">
			    <a class="btn btn-outline-primary mr-sm-2" type="submit" href="/artikel/create">Tambah Artikel</a>
			  </form>
			</div>
		  </div>
		  <div class="card-body">
			@foreach($artikel as $a)
				<div class="card">
				  <div class="card-header">
				    <div class=" justify-content-between">
					  <a class="">{{$a->judul}}</a>
					  <form class="form-inline">
					    <a class="btn btn-outline-primary mr-sm-2 btn-sm" type="submit" href="/artikel/{{$a->id}}">Lihat Detail</a>
					    <a class="btn btn-outline-warning mr-sm-2 btn-sm" type="submit" href="/artikel/{{$a->id}}/edit">Edit</a>
					    <a class="btn btn-outline-danger mr-sm-2 btn-sm" type="submit" href="/artikel/{{$a->id}}/delete">Hapus</a>
					  </form>
					</div>
				  </div>
				  <div class="card-body">
				    <p>{{$a->isi}}</p>
				  </div>
				</div>
			@endforeach
		  </div>
		</div>
	</section>
	<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endsection