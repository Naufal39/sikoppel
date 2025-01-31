@extends('layouts/main')

@section('isihalaman')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">{{ $post['title'] }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <a href="../berita?user={{ $post->user->username }}">
                        <li class="breadcrumb-item" aria-current="page">Penulis : {{ $post->user->name }}</li>
                    </a>
                </ol>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item" aria-current="page"><a
                            href="../berita?category={{ $post->category->slug }}">Kategori : {{ $post->category->nama }}</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Isi Berita -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-8" style="text-align: justify">
                    @if ($post->image)
                        <img style="max-width: 100%" src="{{ asset('storage/' . $post->image) }}" alt="rakornis">
                    @else
                        <p> </p>
                    @endif
                    <p class="text-dark"
                        style="text-align: justify; color: black; font-family: Arial, Helvetica, sans-serif;">
                        {!! $post['body'] !!}
                    </p>
                </div>

                <div class="col-4" style="max-width: 50%; height: 80%;">
                    <div class="card mb-4 shadow-lg">
                        <div class="card-header">Pencarian</div>
                        <div class="card-body">
                            <form action="/berita">
                                <div class="input-group">
                                    @if (request('category'))
                                        <input type="hidden" name="category" value="{{ request('category') }}">
                                    @endif
                                    <input class="form-control" type="text" placeholder="Enter search term..."
                                        name="search" value="{{ request('search') }}">
                                    <button class="btn btn-primary" type="submit">Go!</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="list-group">
                        @foreach ($sideberita as $data)
                            <a href="../berita/{{ $data->slug }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $data->title }}</h5>
                                    <small class="text-muted">{{ $data->updated_at->diffForHumans() }}</small>
                                </div>
                                <p class="mb-1">{{ $data->excerpt }}</p>
                                <small class="text-muted">{{ $data->category->nama }}</small>
                            </a>
                        @endforeach
                    </div>
                </div>
                {{-- @foreach ($sideberita as $data)
                        <a href="../berita/{{ $data->slug }}">
                            <div class="card bg-dark text-white">
                                @if ($data->image)
                                    <img style="max-height: 550px" src="{{ asset('storage/' . $data->image) }}"
                                        class="card-img img-thumbnail" alt="...">
                                @else
                                    <img style="max-height: 550px" src="https://picsum.photos/700/350"
                                        class="card-img img-thumbnail" alt="...">
                                @endif

                                <div class="card-img-overlay">
                                    <h6 class="card-title">{{ $data->title }}</h6>
                                    <p class="card-text" style="font-size: 10px">{{ $data->excerpt }}</p>
                                    <p class="card-text" style="font-size: 10px">Last updated
                                        {{ $data->updated_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach --}}
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
