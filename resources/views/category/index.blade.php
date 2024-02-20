@extends('admin.parent')

@section('content')
ini halaman index category  

<div class="card p-4">
    <h1>Category Index</h1>

    <hr>

    <div class="d-flex justify-contend-end">
        <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
    </div>
</div>
@endsection