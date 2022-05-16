@extends('layouts.admin')

@section('title')
    Product Gallery Create Store Dashboard
@endsection

@section('container')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title mt-3">Gallery</h2>
            <p class="dashboard-subtitle">
              Create New Gallery
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                  @endif
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                              <div class="row">
                                <div class="col md-12">
                                    <div class="form-group">
                                      <label>My Post</label>
                                        <select name="posts_id" class="form-control">
                                          @foreach ($posts as $post)
                                            <option value="{{ $post->id }}">{{ $post->name }}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mt-2">
                                      <label>Gallery</label>
                                      <input type="file" name="photos" class="form-control" required>
                                    </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col text-right">
                                  <button type="submit" class="btn btn-success px-5 mt-3">
                                    Save Now</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection