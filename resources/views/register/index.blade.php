@extends('layouts.main')

@section('isihalaman')
  
{{-- <div class="row justify-content-center my-5">
    <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
            <form>
            
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="name">
                <label for="floatingInput">Nama</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Udah daftar? <a href="/login">Login disini!!!</a></small>
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
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-lg text-center">
            <h2 class="fw-bold mb-5">Daftar Sekarang</h2>
            <form action="/register" method="post" class="text-dark">
              @csrf
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="name" class="form-control text-dark @error('name') is-invalid @enderror" name="name" required value="{{ old('name') }}"/>
                    <label class="form-label" for="form3Example1">Nama</label>
                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="username" class="form-control text-dark @error('username') is-invalid @enderror" name="username" required value="{{ old('username') }}"/>
                    <label class="form-label" for="form3Example2">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control text-dark @error('email') is-invalid @enderror" name="email" required value="{{ old('email') }}"/>
                <label class="form-label" for="form3Example3">Email</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control text-dark @error('password') is-invalid @enderror" name="password" required/>
                <label class="form-label" for="form3Example4">Password</label>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Daftar
              </button>

            </form>
              <!-- Register buttons -->
              <div class="text-center">
               Udah punya akun? <a href="/login">Loginnya disini !!!</a>
              </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="../img/ship2.jpg" class="w-100 rounded-4 shadow-4" style="max-height: 700px"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

@endsection