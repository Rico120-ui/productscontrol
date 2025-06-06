@extends('layout.template')
{{-- we user . instead of / in php as it is much easier its seemed? --}}
{{-- we use section to replace the yield('name') define by the name --}}
@section('pageTitle')
    EDIT EXISTING PRODUCT
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{ URL::asset ('css/form.css') }}">
@endsection

@section('toolbar')
    <a href="{{ route('products.index')}}">Back</a>
@endsection

@section('rightTitle')
    EDIT EXISTING PRODUCT
@endsection

@section('content')
    
    <form action="{{route('products.update', $product->id)}}" method="post">
        @method('put')
        @csrf  
        {{-- @csrf => Cross Site Request Fogery --}}
        <div class="field">
            <label for="productName">Product Name:</label>
            <input value="{{old('product_name', $product->product_name)}}" type="text" name="product_name" id="product_name">
            @error('product_name')
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="field">
            <label for="price">Price:</label>
            <input value="{{old('price', $product->price)}}" type="text" name="price" id="price">
            @error('price')
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="field">
            <label for="quantity">Quantity:</label>
            <input value="{{old('quantity', $product->quantity)}}" type="text" name="quantity" id="quantity">
            @error('quantity')
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="field">
            <label for="warranty">Warranty:</label>
            <input value="{{old('warranty', $product->warranty)}}" type="text" name="warranty" id="warranty">
            @error('warranty')
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="field">
            <label for="description">Description:</label>
            <textarea name="description" id="description" cols="30" rows="10">{{old('description', $product->description)}}</textarea>
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