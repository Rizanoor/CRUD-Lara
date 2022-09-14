@extends('layouts.admin')

@section('title')
    Admin dashboard
@endsection

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="dashboard-title">Welcome, {{Auth::user()->name}}</h1>
</div>
<p class="dashboard-subtitle">
  This Is Administrator Panel
</p>

    <div class="dachboard-content">
      <div class="row">
        <div class="col-md-3">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">
                User
              </div>
              <div class="dashboard-card-subtitle">
                16
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">
                Categories
              </div>
              <div class="dashboard-card-subtitle">
                0
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">
                My Post
              </div>
              <div class="dashboard-card-subtitle">
                0
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('addon-style')

<style>
    .card {
    background: #fefefe;
    -webkit-box-shadow: 0px 4px 15px #f1f1f8;
    box-shadow: 0px 4px 15px #f1f1f8;
    border-radius: 18px;
    border: none;
    text-decoration: none !important;
  }

  .card .dashboard-card-title {
    font-size: 16px;
    line-height: 24px;
    color: #c5c5c5;
  }

  .card .dashboard-card-subtitle {
    font-weight: 600;
    font-size: 24px;
    line-height: 48px;
    color: #0c0d36;
  }

  .card-list {
    margin-bottom: 10px;
  }

  .card-list .card-body {
    font-weight: normal;
    font-size: 18px;
    line-height: 40px;
    border-radius:
    color: #0c0d36;
  }

</style>

@endpush
