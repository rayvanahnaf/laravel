@extends('admin.parent')

@section('content')
<div class="container d-flex justify-content-end">
    <a href="{{ route('Admin.create') }}" class="btn btn-primary">Create Admin</a>
</div>
@endsection