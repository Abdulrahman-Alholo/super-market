@extends('product.layout')
@section('content')

<div class="container" style="padding-top: 10%">


        <div class="form-group">
          <label for="exampleInput1">{{$product->product_name}}</label>
        </div>
        <div class="form-group">
          <label for="exampleInput2">{{$product->product_price}}</label>
        </div>
        <div class="form-group">

           {!! $product->product_detail !!}

          </div>



</div>

@endsection
