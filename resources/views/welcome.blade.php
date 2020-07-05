@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="card">
          <div class="card-header">
            <div class="navbar navbar-light bg-light justify-content-between">
              <a class="navbar-brand">ERD</a>
            </div>
          </div>
          <div class="card-body">
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <img src="{{asset('/ERD.jpg')}}">
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection