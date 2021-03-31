@extends('dashboard.app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">New Category</h1>
        <form action="{{ route('categories.store') }}" method="post">
           @csrf
            Name:
            <br>
            <input type="text" name="name" value="" class="form-control">
            <br>
            <input type="submit" class="btn btn-primary" value="Save"/>

        </form>

    </div>
    <!-- /.col-lg-3 -->
@endsection
