<head>
    <title>product</title>
    <link rel="stylesheet" href="{{url('css/product_index.css')}}">
</head>
@extends('layouts.app')
<div>
    @extends('layouts.product')
</div>

@section('content')
    <div class="product_cards">
    @foreach($product as $item)
            <div class="product_item">
                <div class="product-img">
                    <img src="{{$item->img}}" alt=""></div>
            </div>
            <div class="product-info">
                <p class="product-name">{{$item->name}}</p>
                <p class="product-price">{{$item->price}}</p>
            </div>

    @endforeach
    </div>
@endsection
