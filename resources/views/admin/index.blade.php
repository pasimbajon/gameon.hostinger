@extends('admin.layout')
@section('admin')

    <div>Admin DashBoard</div>
    <a href="{{ route('admin.logout') }}">Logout</a>
@endsection