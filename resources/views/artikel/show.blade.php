@extends('layouts.master')

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Answer Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="{{ url('/artikel') }}" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-circle-left"></i> Back</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
                <!-- /.card-header -->
                
                <div class="card-body">
                  <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> Judul </th>
                            <td>
                              <div>
                                {{ $artikel->judul }}
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th> Slug </th>
                            <td>
                              <div>
                                {{ $artikel->slug }}
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th> Isi </th>
                            <td>
                              <div>
                                {{ $artikel->isi }}
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th> Tag </th>
                            <td>
                              <div>
                                {{ $artikel->tag }}
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th> Tanggal Dibuat </th>
                            <td>
                              <div>
                                {{ $artikel->created_at }}
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th> Tanggal Diperbaharui</th>
                            <td>
                              <div>
                                {{ $artikel->updated_at }}
                                
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      

                </div>

                </div>
                
                <!-- /.card-body -->
      
      <!-- /.card -->

    </section>
  
    
@endsection('content')