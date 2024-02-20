@extends('layouts/main')

@section('isihalaman')
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5 mt-4">
        <h1 class="display-2 text-white mb-3 animated slideInDown">{{ $post["title"] }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <a href="../berita?user={{ $post->user->username }}"><li class="breadcrumb-item" aria-current="page">Penulis : {{ $post->user->name }}</li></a>
            </ol>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item" aria-current="page"><a href="../berita?category={{ $post->category->slug }}">Kategori : {{ $post->category->nama }}</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Isi Berita -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <img src="../img/BANNER.jpg" alt="rakornis">
            <div class="col-md-8">
                <p style="text-align: justify; color: black; font-family: Arial, Helvetica, sans-serif;">
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
            
              </div>
        </div> 
    </div>        
</div>
@endsection

{{-- Berita::create([
     'title' => 'Judul Keempat',
    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae totam dolor aspernatur libero eligendi sit optio quo, dignissimos nostrum et pariatur, quia eius repellendus dolorem adipisci quod impedit tempore hic.',
    'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A repudiandae, deleniti, culpa quibusdam soluta commodi iste nostrum iusto vitae veritatis sequi fugit debitis dignissimos explicabo rem dicta dolore rerum ea. lo </p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quae, sit rem fugit dignissimos impedit eius voluptates illo accusamus quia aut ex neque vero autem est architecto numquam adipisci eum.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae quos vel cupiditate ex laboriosam quas architecto quam. Ex, debitis incidunt cumque reiciendis aut rerum optio impedit laboriosam praesentium quibusdam sint.</p>'
]) --}}

{{-- insert into beritas (title,category_id,slug,author,excerpt,body) values ('Judul Ke Enam','1','judul-ke-Enam','Jajang Halo' ,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae totam dolor aspernatur libero eligendi sit optio quo, dignissimos nostrum et pariatur, quia eius repellendus dolorem adipisci quod impedit tempore hic.', '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A repudiandae, deleniti, culpa quibusdam soluta commodi iste nostrum iusto vitae veritatis sequi fugit debitis dignissimos explicabo rem dicta dolore rerum ea. lo </p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quae, sit rem fugit dignissimos impedit eius voluptates illo accusamus quia aut ex neque vero autem est architecto numquam adipisci eum.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae quos vel cupiditate ex laboriosam quas architecto quam. Ex, debitis incidunt cumque reiciendis aut rerum optio impedit laboriosam praesentium quibusdam sint.</p>'); --}}