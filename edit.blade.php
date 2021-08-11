@extends('layouts.admin')
@section('content')
<h2>update Catagory</h2>
<div class="card-body">

                <form role="form" action="{{url('catagory-update/'.$catagory->id)}}" method="post" enctype='multipart/form-data'>
                  @csrf
                  
                  <div class="row">
                    <div class="col-sm-6">
                    <input type="hidden" name="id" class="form-control" value= "{{$catagory->id}}">
                      <div class="form-group">
                      <label>Product Name</label>
                        <input type="text" name="name" class="form-control" value= "{{$catagory->name}}">
                      </div>
                      </div>
                      <div class="col-sm-6">
                     
                     <div class="form-group">
                     <label>Product Slug</label>
                       <input type="text" name="slug" class="form-control" value= "{{$catagory->slug}}">
                     </div>
                     </div>
                     </div>
                     <div class="row">
                    <div class="col-sm-10">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Desicription</label>
                        <textarea class="form-control" name="description" rows="2">  {{$catagory->description}}</textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="col-mb-6">
                    <label for="">status</label>
                    <input type="checkbox" name="status" {{$catagory->status =="1"?'checked':''}}>

                    </div>
                    </div> 
                    <div class="col-md-6">
                    <div class="col-mb-6">
                    <label for="">popular</label>
                    <input type="checkbox" name="popular" {{$catagory->popular =="1"?'checked':''}}>

                    </div>
                    </div> 
                    </div>
                    <div class="col-sm-6">
                     
                     <label>image</label>
                       <input type="file" class="form-control" name="image" class= "w-50" >
                       @if($catagory->image)
                       <img src="{{asset('assets/uploads/catagory/'.$catagory->image)}}" alt="catagory image">
                     @endif
                     </div>
                     </div>
                    <div class="col-md-6">
                    <div class="col-mb-6">
                    <label for="">Meta_title</label>
                    <input type="text" name="meta_title" class="form-control" value= "{{$catagory->meta_title}}">

                    </div>
                    </div> 
                    <div class="col-md-6">
                    <div class="col-mb-6">
                    <label for="">Meta_desi</label>
                    <input type="text" name="meta_desi" class="form-control"  value= "{{$catagory->meta_desi}}">

                    </div>
                    </div> 
                    <div class="col-md-12">
                    <div class="form-group">
                        <label>Mata_keywords</label>
                        <textarea class="form-control" name="meta_keyword" rows="1">{{$catagory->meta_keyword}}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class = "col-md-12">
                  <button input type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
@endsection