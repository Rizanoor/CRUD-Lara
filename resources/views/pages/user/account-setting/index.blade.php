@extends('layouts.dashboard')

@section('title')
    Account Setting
@endsection

@section('content')
  <div class="section-content">
    <div class="container-fluid ">
      
      <div class="dashboard-content">
        <div class="row justify-content-center">
          <div class="col-10">
            <form action="{{ route('dashboard-settings-redirect', 'dashboard-settings-account') }}" method="POST"
             enctype="multipart/form-data"
            id="locations">
              @csrf
              <div class="card">
                <div class="card-header">
                  <div class="dashboard-heading">
                    <h2 class="dashboard-title">My Account</h2>
                    <p class="dashboard-subtitle">
                      Update your current profile
                    </p>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{old('name') ?: Auth::user()->name}}">
                      </div>
                    </div>
        
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required value="{{old('email') ?: Auth::user()->email}}">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group mt-2">
                        <label>Password User</label>
                        <input type="password" class="form-control" name="password" />
                        <small>Kosongkan jika tidak ingin mengganti password</small>
                      </div>
                    </div>
        
                    <div class="form-group mt-2">
                      <label>Foto</label>
                      <input type="file" name="photos" id="photos" class="form-control" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <button type="submit" class="btn btn-success mt-3">
                        Save now
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection


