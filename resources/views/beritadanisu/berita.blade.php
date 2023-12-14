@extends('layouts/main')

@section('isihalaman')
    <!-- Berita Start -->
    {{-- <div class="container-fluid container-service py-5">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Berita dan Isu</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
            </div>
            <div class="row g-4">
                @foreach ($posts as $data)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="berita/{{ $data->slug }}"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">January 1, 2023</div>
                        <h2 class="card-title h4">{{ $data->title }}</h2>
                        <p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{ $data->excerpt }}</p>
                        <a class="btn btn-primary" href="berita/{{ $data->slug }}">Read more →</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <!-- Berita End -->    

<!-- Page content-->
<div class="container">
    <div class="row">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 mb-3">{{ $title }}</h1>
            <p class="mb-5"> {{ $deskripsi }} </p>
        </div>
        <!-- Blog entries-->
        <div class="col-lg-8 mt-7">
            <!-- Featured blog post-->
            @if ($posts->count())
            <div class="card mb-4 shadow-lg">
                <h3 class="small text-light px-2 position-absolute" style="background-color: rgba(0,0,0,0.7)">{{ $posts[0]->category->nama }}</h3>
                <a href="#!"><img class="card-img-top" src="https://picsum.photos/700/350" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">{{ $posts[0]->created_at->diffForHumans() }}</div>
                    <h2 class="card-title">{{ $posts[0]->title }}</h2>
                    <h3 class="small text-muted">Penulis : {{ $posts[0]->user->name }}</h3>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a class="btn btn-primary" href="../berita/{{ $posts[0]->slug }}">Read more →</a>
                </div>
            </div>
            @else
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.5s">
                    <h2>UPSSSSS!!!</h2>
                    <h2>BERITA TIDAK DITEMUKAN</h2>
                </div>
            @endif
            
            <!-- Nested row for non-featured blog posts-->
            <div class="row g-6">
                @foreach ($posts->skip(1) as $data)
                <div class="col-lg-6 col-md-6 wow fadeInUp mt-3 shadow-lg" data-wow-delay="0.1s">
                    <div class="small text-light px-2 position-absolute" style="background-color: rgba(0,0,0,0.7)">{{ $data->category->nama }}</div>
                    <a href="berita/{{ $data->slug }}"><img class="card-img-top" src="https://picsum.photos/700/350" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $data->created_at->diffForHumans() }}</div>
                        <h2 class="card-title h4">{{ $data->title }}</h2>
                        <h5 class="small text-muted">Penulis : {{ $data->user->name }}</h5>
                        {{-- <h3 class="small text-muted">{{ $data->category->nama }}</h3> --}}
                        <p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{ $data->excerpt }}</p>
                        <a class="btn btn-primary" href="../berita/{{ $data->slug }}">Read more →</a>
                    </div>
                </div>
                @endforeach
                <div class="container d-flex align-items-center justify-content-center">
                    {{-- {{ $posts->Links() }} --}}
                </div>
            </div>
            <!-- Pagination-->
                    
                
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4 shadow-lg">
                <div class="card-header">Pencarian</div>
                <div class="card-body">
                    <form action="/berita">
                        <div class="input-group">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            <input class="form-control" type="text" placeholder="Enter search term..." name="search" value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Go!</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4 shadow-lg">
                <div class="card-header">Kategori</div>
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-sm-6"> --}}
                            <ul class="list-unstyled mb-0">
                                @foreach ($categories as $data)
                                <li><a href="../berita?category={{ $data->slug }}">▹ {{ $data->nama }}</a></li>
                                @endforeach
                            </ul>
                        {{-- </div> --}}
                        {{-- <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                @foreach ($categories1 as $data)
                                <li><a href="../berita?category={{ $data->slug }}">> {{ $data->nama }}</a></li>
                                @endforeach
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4 shadow-lg">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
        <div class="d-flex mt-4 justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>

@endsection