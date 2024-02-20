@extends('dashboard.layouts.main')

@section('container')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5 mt-4">
        <h1 style="font-family: Arial, Helvetica, sans-serif;" class="display-2 text-black mb-3 animated slideInDown">{{ $post["title"] }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <a href=""><li class="breadcrumb-item" aria-current="page">Penulis : {{ $post->user->name }}</li></a>
            </ol>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item" aria-current="page"><a href="">Kategori : {{ $post->category->nama }}</a></li>
            </ol>
            <ol>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                <form action="../../dashboard/berita/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button button class="btn btn-danger border-0" onclick="return confirm('Yakin untuk hapus data?')"></span>Delete</button>
                  </form>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Isi Berita -->
<div class="container-fluid py-5">
    <div class="container" style="color: black">
        <div class="row">
            <div class="col-md-8">
                <p style="text-align: justify; color: rgb(3, 16, 77); font-family: Arial, Helvetica, sans-serif;">
                    {!! $post["body"] !!} 
               </p>
            </div>
            <div class="col-md-4 py-3">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body text-primary">
                      <h5 class="card-title">Primary card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
            <img src="../../img/BANNER.jpg" alt="">
            
              </div>
        </div> 
    </div>        
</div>
@endsection