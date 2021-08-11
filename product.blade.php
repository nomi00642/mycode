@extends('layouts.inc.frontend')
@section('title')
Products
@endsection
@section('content')
<div class="py-5">
    <div class="container">
        <h2> {{$catagory->name}}</h2>
        <div class="row">
            @foreach($product as $item)
            <div class="col-md-3 mb-3">
           
            <div class="card">
            <a href="{{url('catagory/'.$catagory->slug.'/'.$item->pro_slug)}}">             
                    <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="Image">
                    <div class="card-body">
                        <h3>{{$item->name}}</h3>
                            <span class="float-start"><s>{{$item->orignal_price}}</s></span>
                            <span class="float-end">{{$item->selling_price}}</span>
                    </div>
</a>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection