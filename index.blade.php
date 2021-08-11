@extends('layouts.admin')
@section('content')
<div class="card">
<div class="card-body">
<h2>catagory</h2>
</div>
</div> 
{{session('status')}}
<div class="card">
<div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>ID</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Popular</th>
                  <th>Image</th>
                  <th>Meta_Title</th>
                  <th>Mete_description</th>
                  <th>Mete_Keywords</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}} </td>
                  <td>{{$item->slug}}</td>
                  <td>{{$item->description}}</td>
                  <td>{{$item->status}}</td>
                  <td>{{$item->popular}}</td>
                  <td><img src="{{asset('assets/uploads/catagory/'.$item->image)}}" class ="w-100"alt="image"></td>
                  <td>{{$item->meta_title}}</td>
                  <td>{{$item->meta_desi}}</td>
                  <td>{{$item->meta_keyword}}</td>
                  <td><div class="card-footer clearfix">
                    <a href="{{route('catagory-edit',$item['id'])}}">
              <button type="button" class="btn btn-success ">Edit</button></a>
              <div class="card-footer clearfix">
                    <a href="{{route('catagory-delete',$item['id'])}}">
              <button type="button" class="btn btn-Warning ">Delete</button></a></td>
                </tr>
               @endforeach
           
             </table>
            </div>
            
          </div>
        
</div>
          @endsection