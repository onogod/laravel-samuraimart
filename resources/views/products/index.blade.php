 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
{{-- <a href="{{ route('products.create') }}"> Create New Product</a> --}}

    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category ID</th>
            <th>Action</th>
        </tr>
    {{--    @foreach ($products as $product)--}}
        <tr>
    {{-- <td>{{ $product->name}}</td> --}}
    {{--     <td>{{ $product->description }}</td> --}}
    {{--      <td>{{ $product->price }}</td> --}}
    {{--    <td>{{ $product->category_id }}</td> --}}
        <td>
            {{--     <form action="{{ route('products.destroy', $product->id) }}" method="POST"> --}}
            {{--    <a href="{{ route('products.show', $product->id)}}">Show</a>  --}}
            {{--    <a href="{{ route('products.edit', $product->id) }}">Edit</a> --}}
            {{--    @csrf  --}}
            {{--    @method('DELETE') --}} 
                <button type="submit">Delete</button>           
            </form>
            </td>
        </tr>
    {{-- @endforeach --}}
    </table> -->
    @extends('layouts.app')

    @section('content')
    <div class="row">
        <div class="col-9">
            <div class="container mt-4">
            <div class="row w-100">
                @foreach($products as $product)
                <div class="col-3">
                    <a href="{{ route('products.show',$product) }}">
                        <img src="{{ asset('img/dummy.png') }}" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="samuraimart-product-label mt-2">
                                {{ $product->name }}<br>
                                <label>¥{{ $product->price }}</label>
                            </p>
                        </div>
                    </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
</body>


</html>