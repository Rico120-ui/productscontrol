@extends('layout.template')
{{-- we user . instead of / in php as it is much easier its seemed? --}}
{{-- we use section to replace the yield('name') define by the name --}}
@section('pageTitle')
    PRODUCT LISTING
@endsection

@section('headerBlock')
    <link rel="stylesheet" href="{{URL::asset('css/table.css')}}">
@endsection

@section('rightTitle')
    PRODUCT LISTING
@endsection

@section('toolbar')
    <a id="bckpr" href="/products/create">Add New Product</a>
@endsection

@section('content')

@if (!empty( session('success')))
        <div class="success">{{session('success')}}</div>
        
    @endif
    
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Warranty</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->warranty}}</td>
            <td>{{$product->description}}</td>
            <td class="action-buttons">
                {{-- <button class="btn-show" onclick="alert('Show details for USB-C Cable (ID: 005)')">Show</button>
                <button class="btn-update" onclick="alert('Update USB-C Cable (ID: 005)')">Update</button>
                <button class="btn-delete" onclick="alert('Delete USB-C Cable (ID: 005)')">Delete</button> --}}
                
                {{-- <a href="" class="btn-show" >Show</a>
                <a href="" class="btn-update" >Update</a>
                <a href="" class="btn-delete" >Delete</a> --}}


                <a href="{{route('products.show', $product->id) }}" class="btn-show" >Show</a>
                <a href="{{route('products.edit', $product->id)}}" class="btn-update" >Edit</a>
                <a href="{{route('products.delete', $product->id)}}" class="btn-delete" >Delete</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


