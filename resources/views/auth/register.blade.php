@extends('layouts.auth')

@section('title')
    Register
@endsection 

@section('content')
<section class="h-100 w-100" style="box-sizing: border-box; background-color: #ffffff;">
    <div class="content-4-1 d-flex flex-column align-items-center h-100 flex-lg-row"
      style="font-family: 'Poppins', sans-serif">
      <div class="position-relative d-none d-lg-block h-100 width-left">
        <img class="position-absolute img-fluid centered"
          src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-11.png"
          alt="" />
      </div>
      <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
        <div class="right ms-lg-0 ms-auto">
          <div class="align-items-center justify-content-center d-lg-none d-flex">
            <img class="img-fluid"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-11.png"
              alt="" />
          </div>
          <h3 class="title-text">Registration to continue</h3>
          <p class="caption-text">
            Please register before
            log in on the website.
          </p>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-3">
                    <label for="name" class="col-md-5 col-form-label text-md-start">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control 
                               @error('name') is-invalid @enderror" 
                               name="name" value="{{ old('name') }}" 
                               required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-5 col-form-label text-md-start">Email Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" 
                               class="form-control 
                               @error('email') is-invalid @enderror" 
                               name="email" value="{{ old('email') }}" 
                               required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-5 col-form-label text-md-start">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" 
                               class="form-control 
                               @error('password') is-invalid @enderror" 
                               name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-5 col-form-label text-md-start">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" 
                              class="form-control" 
                              name="password_confirmation" 
                              required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-5">
                      <button class="btn btn-fill text-white d-block w-100 mt-4" type="submit">
                        Register
                      </button>
                    </div>
                </div>
            </form>
          </div>

          <p class="text-center bottom-caption col-md-6 offset-md-5 mt-0">
            Already have an account? <br>
            <a href="{{ route('login') }}" class="green-bottom-caption">Log In Here</a>
          </p>
        </div>
      </div>
    </div>
</section>
@endsection

