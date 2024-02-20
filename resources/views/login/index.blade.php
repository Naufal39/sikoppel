@extends('layouts.main')

@section('isihalaman')
  
{{-- <div class="row justify-content-center my-5">
    <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <form>
            
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Belum daftar? <a href="/register">Daftar dulu donggggg!!!</a></small>
            </main>
    </div>
</div> --}}

<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if (session()->has('LoginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('LoginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center shadow-lg">
            <h2 class="fw-bold mb-5">Form Login</h2>
            <form action="/login" method="POST">
              <!-- Email input -->
              @csrf
              <div class="form-outline mb-4">
                <input type="text" id="username" class="form-control" name="username" autofocus required/>
                <label class="form-label" for="username">username</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control" name="password" required />
                <label class="form-label" for="password">Password</label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Login
              </button>

            </form>
              <!-- Register buttons -->
              {{-- <div class="text-center">
                Belum daftar? <a href="/register">daftar dulu dong !!!</a>
              </div> --}}
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="../img/ship.jpg" class="w-100 rounded-4 shadow-4" style="max-height: 700px;"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

@endsection