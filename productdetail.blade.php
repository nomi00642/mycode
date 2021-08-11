@extends('layouts.inc.frontend')
@section('title')
{{$pro->name}}
@endsection
@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
	<div class="container">
  <strong> <h5 class="mb-0"> Collections/ {{$pro->Catagory->name}}/ {{$pro->name}}</h5></strong> 
</div>
</div>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">




<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{asset('assets/uploads/products/'.$pro->image)}}" /></div>
						  <div class="tab-pane" id="pic-2"><img src="{{asset('assets/uploads/products/'.$pro->image)}}" /></div>
		
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{asset('assets/uploads/products/'.$pro->image)}}" /></a></li>
	
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$pro->name}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">{{$pro->short_desi}}</p>
                        <p class="product-description">{{$pro->long_desi}}</p>
                        <h4 class="price">Old price: <span><s>{{$pro->orignal_price}}</s></span></h4>
						<h4 class="price">current price: <span>{{$pro->selling_price}}</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						@if($pro->size)
                        {
                        <h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
                        }
                        @endif
						@if($pro->qty> 1)
							<label class="badge bg-success">In Stock</label>
							@else
							<label class="badge bg-success">Out Of Stock</label>
							@endif
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						
                        <div class="row-mt-2">
                                        <div class="col-md-4">
										<label for ="quantity">Quantity</label>
										<div class="input-group text-center mb-3" style="width:100px">
										<span class="input-group-text decrement-btn">-</span>
										
										<input type="text" name="quantity" class=" form-control qty-input text-center" value="1">
										<span class="input-group-text increment-btn">+</span>
					</div>
					</div>
							<button class="add-to-cart btn btn-default addToCart" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
					</div>	
					</div>
				</div>
			</div>
		</div>
	</div>     
	
@endsection
@section('scripts')
<script> 

	$(document).ready(function()
	$('.addToCart').click(function(e)
	e.preventDefault();

	});
	$('.increment-btn').click(function(e){	

		e.preventDefault();
		var inc_val =$('.qty-input').val();
		var value = parseInt(inc_val,10);
		value= isNaN(value)? 0 : value;
		if(value < 10)
		{
			value++;
			$('.qty-input').val(value);
		}
	});
	});
      </script> 
	  @endsection