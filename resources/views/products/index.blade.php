@extends('dashboard.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-info">New product</a>
        <br><br>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>#</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>${{ $product->price }}</td>
                    <td >
                        <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('products.destroy',$product->id) }}" method="post" style="display:inline-block">
                            @method("delete")
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm" onclick="confirm('Are you sure ?')" >
                        </form>
                    </td>
                </tr>
            @endforeach
            </thead>
        </table>

    </div>
    <!-- /.col-lg-3 -->
@endsection
