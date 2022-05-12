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
        <h2 class="title-text">3 Games Traditional</h2>
        <br>
        <ul style="padding: 0; margin: 0">
          <li class="list-unstyled" style="margin-bottom: 2rem">
            <h4
              class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
              <span class="circle text-white d-flex align-items-center justify-content-center">
                1
              </span>
              Petak umpet
            </h4>
            <img src="https://source.unsplash.com/400x50" alt="">
            <p class="text-caption">
              We have provided highly experienced mentors<br class="d-sm-inline d-none" />
              for several years.
              <a href="" class="badge bg-success" style="text-decoration:none">Try</a>
            </p>
          </li>

        </ul>
        <button class="btn btn-learn text-white">Learn More</button>
      </div>
    </div>
  </div>

  {{-- <section class="store-trend-categories">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>Trend Categories</h5>
        </div>
      </div>
      <div class="row ">
        @forelse ($categories as $category)
          <div class="col-6 col-md-3 col-lg-2">
            <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
              <div class="categories-image">
                <img src="{{ Storage::url($category->photo) }}" alt="">
              </div>
              <p class="categories-text">{{ $category->name }}</p>
            </a>
          </div>
        @empty
            <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
              Category Not Found
            </div>
        @endforelse

      </div>
    </div>
  </section> --}}
@endsection
  
@push('addon-style')
  
  <style>
    <styl>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-3-2 .btn:focus,
      .content-3-2 .btn:active {
        outline: none !important;
      }

      .content-3-2 {
        padding: 5rem 2rem;
      }

      .content-3-2 .img-hero {
        width: 100%;
        margin-bottom: 3rem;
      }

      .content-3-2 .right-column {
        width: 100%;
      }

      .content-3-2 .title-text {
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 2.5rem;
        letter-spacing: -0.025em;
        color: #121212;
      }

      .content-3-2 .title-caption {
        font: 500 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 1.25rem;
        color: #121212;
      }

      .content-3-2 .circle {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        height: 3rem;
        width: 3rem;
        margin-bottom: 1.25rem;
        border-radius: 9999px;
        background-color: #27c499;
      }

      .content-3-2 .text-caption {
        font: 400 1rem/1.75rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #565656;
      }

      .content-3-2 .btn-learn {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 2.5rem;
        background-color: #27c499;
        transition: 0.3s;
        letter-spacing: 0.025em;
        border-radius: 0.75rem;
      }

      .content-3-2 .btn:hover {
        background-color: #45dbb2;
        transition: 0.3s;
      }

      @media (min-width: 768px) {
        .content-3-2 .title-text {
          font: 600 2.25rem/2.5rem Poppins, sans-serif;
        }
      }

      @media (min-width: 992px) {
        .content-3-2 .img-hero {
          width: 50%;
          margin-bottom: 0;
        }

        .content-3-2 .right-column {
          width: 50%;
        }

        .content-3-2 .circle {
          margin-right: 1.25rem;
          margin-bottom: 0;
        }
      }
    </style>

@endpush