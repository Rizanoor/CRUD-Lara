@extends('layouts.app')

@section('title')
    Home
@endsection 

@section('content')
  <div class="content-3-2 container-xxl mx-auto  position-relative" style="font-family: 'Poppins', sans-serif">
    <div class="d-flex flex-lg-row flex-column align-items-center">
      <!-- Left Column -->
      <div class="img-hero text-center justify-content-center d-flex">
        <img id="hero" class="img-fluid"
          src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-1.png"
          alt="" />
      </div>

      <!-- Right Column -->
      <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
        <h2 class="title-text">3 Keys Benefit</h2>
        <ul style="padding: 0; margin: 0">
          <li class="list-unstyled" style="margin-bottom: 2rem">
            <h4
              class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
              <span class="circle text-white d-flex align-items-center justify-content-center">
                1
              </span>
              Trusted Mentor
            </h4>
            <p class="text-caption">
              We have provided highly experienced mentors<br class="d-sm-inline d-none" />
              for several years.
            </p>
          </li>
          <li class="list-unstyled" style="margin-bottom: 2rem">
            <h4
              class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
              <span class="circle text-white d-flex align-items-center justify-content-center">
                2
              </span>
              Access Forever
            </h4>
            <p class="text-caption">
              Are you busy at work so it's hard to consult? don't<br class="d-sm-inline d-none" />
              worry because you can access anytime.
            </p>
          </li>
          <li class="list-unstyled" style="margin-bottom: 4rem">
            <h4
              class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
              <span class="circle text-white d-flex align-items-center justify-content-center">
                3
              </span>
              Halfpenny
            </h4>
            <p class="text-caption">
              We provide economical packages for those of you<br class="d-sm-inline d-none" />
              who are still in school or workers.
            </p>
          </li>
        </ul>
        <button class="btn btn-learn text-white">Learn More</button>
      </div>
    </div>
  </div>
@endsection