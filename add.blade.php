@extends('layouts.admin')
@section('content')
<div class="card-body">
                <form role="form" action="/insert-catagory" method="post" enctype='multipart/form-data'>
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                     
                      <div class="form-group">
                      <label>Product Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name.">
                      </div>
                      </div>
                      <div class="col-sm-6">
                     
                     <div class="form-group">
                     <label>Product Slug</label>
                       <input type="text" name="slug" class="form-control" placeholder="Enter Slug">
                     </div>
                     </div>
                     </div>
                     <div class="row">
                    <div class="col-sm-10">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Desicription</label>
                        <textarea class="form-control" name="description" rows="2" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="col-mb-6">
                    <label for="">status</label>
                    <input type="checkbox" name="status">

                    </div>
                    </div> 
                    <div class="col-md-6">
                    <div class="col-mb-6">
                    <label for="">popular</label>
                    <input type="checkbox" name="popular">

                    </div>
                    </div> 
                    </div>
                    <div class="col-sm-6">
                     
                     <label>image</label>
                       <input type="file" class="form-control" name="image">
                     </div>
                     </div>
                    <div class="col-md-6">
                    <div class="col-mb-6">
                    <label for="">Meta_title</label>
                    <input type="text" name="meta_title" class="form-control" placeholder="Enter ...">

                    </div>
                    </div> 
                    <div class="col-md-6">
                    <div class="col-mb-6">
                    <label for="">Meta_desi</label>
                    <input type="text" name="meta_desi" class="form-control" placeholder="Enter ...">

                    </div>
                    </div> 
                    <div class="col-md-12">
                    <div class="form-group">
                        <label>Mata_keywords</label>
                        <textarea class="form-control" name="meta_keyword" rows="1" placeholder="Enter ..."></textarea>
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