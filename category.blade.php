@extends('layouts.inc.frontend')
@section('title')
 Categories
@endsection
@section('content')

    
    <div class="py-5">
    <div class="container">
    <div class="row">
       
        <div class="col-md-12">
            <h2>All Categories</h2>
            <div class="row">
            @foreach($cate as $cat)
            <div class="col-md-3">
               
            <div class="card">
            <a href="{{url('view-catagory/'.$cat->slug)}}"> 
                <img src="{{asset('assets/uploads/catagory/'.$cat->image)}}" alt="Image">
                <div class="card-body">
                        <h3>{{$cat->name}}</h3>
                            <span class="float-start">{{$cat->description}}</span>
                            <span class="float-end"><s>{{$cat->selling_price}}</s></span>
                   
                </div></a>
                </div>
                    
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
                    </div>
@endsection