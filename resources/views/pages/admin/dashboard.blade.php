@extends('layouts.admin')

@section('title')
    Admin dashboard
@endsection

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="dashboard-title">Welcome, {{Auth::user()->name}}</h1>
</div>
@endsection