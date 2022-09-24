@extends('product.layout')
@section('content')

<div class="container" style="padding-top: 10%">

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInput1">Name</label>
          <input type="text" name="product_name" class="form-control" placeholder="product name">

        </div>
        <div class="form-group">
          <label for="exampleInput2">Price</label>
          <input type="text" name="product_price" class="form-control" placeholder="product price">
        </div>
        <div class="form-group">
            <label for="exampleInput3">Details</label>
           <textarea name="product_detail" class="form-control"  rows="3"></textarea>
          </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">save</button>

        </div>
      </form>

</div>

@endsection
