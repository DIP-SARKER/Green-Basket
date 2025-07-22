@extends('index')
@push('style')
    <title>Customer Authentication | Green Basket | Farm to Table</title>
@endpush
@section('main-content')
    <div>
        <h1>This is Customer Profile</h1>
        <h2>Welcome, {{ session('name') }}!</h2>
    </div>
@endsection