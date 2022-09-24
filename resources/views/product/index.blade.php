@extends('product.layout')
@section('content')

<div class="jumbotron container">


    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ( $product as $item )
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$item->product_name}}</td>
                <td>{{$item->product_price}}</td>
                <td>
                    <div class="row">
                        <div class="col-sm">
                            <a class="btn btn-success" href="{{route('products.edit',$item->id) }}">Edit</a>
                        </div>
                        <div class="col-sm">
                            <a class="btn btn-primary" href="{{route('products.show',$item->id) }}">Show</a>
                        </div>
                        <div class="col-sm">
                            <form action="{{route('products.destroy', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>                        </div>
                      </div>


                </td>
              </tr>

            @endforeach



        </tbody>
      </table>
{!! $product->links() !!}

  </div>

@endsection
