@extends('layout.template')
{{-- we user . instead of / in php as it is much easier its seemed? --}}
{{-- we use section to replace the yield('name') define by the name --}}
@section('pageTitle')
    Create New Products
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset ('css/form.css') }}">
@endsection

@section('rightTitle')
    Adding New Product
@endsection

@section('toolbar')
    <a href="{{ route('products.index')}}">BACK</a>
@endsection

@section('content')
    @if (!empty( session('success')))
        <div class="success">{{session('success')}}</div>
        
    @endif
    <form action="/products" method="post">
        @csrf  
        {{-- @csrf => Cross Site Request Fogery --}}
        <div class="field">
            <label for="productName">Product Name:</label>
            <input value="{{old('product_name')}}" type="text" name="product_name" id="product_name">
            @error('product_name')
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="field">
            <label for="price">Price:</label>
            <input value="{{old('price')}}" type="text" name="price" id="price">
            @error('price')
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="field">
            <label for="quantity">Quantity:</label>
            <input value="{{old('quantity')}}" type="text" name="quantity" id="quantity">
            @error('quantity')
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="field">
            <label for="warranty">Warranty:</label>
            <input value="{{old('warranty')}}" type="text" name="warranty" id="warranty">
            @error('warranty')
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="field">
            <label for="description">Description:</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
            @error('description')
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="field">
            <input type="submit" value="SUBMIT">
            <input type="reset" value="RESET">
        </div>
    </form>
@endsection

{{-- @section('content')
    <h1 style="color: blue">This is the ABOUT Page</h1>
    <a href="{{ route('aboutus') }}">About Us</a>
    <a href="{{ route('contactus') }}">Contact Us</a>
    <a href="{{ route('homepage') }}">Homepage</a>
@endsection --}}