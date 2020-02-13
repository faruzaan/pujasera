@extends('templates/header')
@section('content')

	<div class="row">
                <div class="col-lg">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">
                      {{empty($feedback) ? 'Tambah' : 'Edit'}}
                      Feedback</h1>
                    </div>
                    <form class="user" action="{{empty($feedback) ? url('feedback/add') : url("feedback/$feedback->id/edit")}}" method="POST">
                      {{ csrf_field() }}

                      @if (!empty($feedback))
                        {{method_field('patch')}}
                      @endif
                      <div class="form-group">
                          <input type="text" class="form-control form-control-user" name="nama_pelanggan" id="Nama" placeholder="Nama Anda" value="{{ @$feedback->nama_pelanggan }}">                
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control form-control-user" name="email" id="email" placeholder="Alamat Email Anda" value="{{ @$feedback->email }}">                
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control form-control-user" name="feedback_pelanggan" id="feedback_pelanggan" placeholder="Pesan Anda" value="{{ @$feedback->feedback_pelanggan }}">                
                      </div>
                      <div class="form-group">  
                        <div class="col-sm-6">
                          <label for="">Bari Kami Rating (5 Adalah Paling Puas)</label><br>
                          <input type="radio" name="service_rating" value="1" {{(@$feedback->service_rating=="1")? "checked":""}}> 1
                          <input type="radio" name="service_rating" value="2" {{(@$feedback->service_rating=="2")? "checked":""}}> 2
                          <input type="radio" name="service_rating" value="3" {{(@$feedback->service_rating=="3")? "checked":""}}> 3
                          <input type="radio" name="service_rating" value="4" {{(@$feedback->service_rating=="4")? "checked":""}}> 4
                          <input type="radio" name="service_rating" value="5" {{(@$feedback->service_rating=="5")? "checked":""}}> 5
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block">Simpan</button>
                      <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                        Tambah 
                      </a> -->
                  </div>
                </div>
              </div>

@endsection