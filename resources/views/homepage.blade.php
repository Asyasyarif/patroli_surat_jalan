@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

  <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">

                  <div class="col-lg-12">
                      <div class="p-5">
                          <div class="text-center">
                              <h1 class="h2 text-gray-900 mb-4">Welcome Back! 🧑‍🚀</h1>
                          </div>
                          <hr>
                          <form class="user">
                              <a href="/login" class="btn btn-primary btn-user btn-block">
                                <i class="fas fa-sign-in-alt"></i> Sign In
                              </a>

                              <a href="/register" class="btn btn-secondary btn-user btn-block">
                                <i class="fas fa-user-plus"></i> Sign Up
                              </a>
                          </form>
                          <hr>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection