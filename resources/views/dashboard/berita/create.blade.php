@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Berita dan Publikasi</h1>
  </div>

  <div class="col-lg-8">
    <form method="POST" action="../../dashboard/berita" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3" style="color: black">
            <label for="title" class="form-label">Judul</label>
            <input style="color: black" type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Judul Berita/Publikasi" name="title" required autofocus value="{{ old ('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3" style="color: black">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" readonly name="slug" required value="{{ old ('slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3" style="color: black">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" name="category_id" style="color: black">
                <option selected>Open this select menu</option>
                @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                    <option value="{{ $category->id }}" style="color: black" selected>{{ $category->nama }}</option>
                @else
                    <option value="{{ $category->id }}" style="color: black">{{ $category->nama }}</option>
                @endif
                @endforeach
              </select>
        </div>

        <p style="color:black ">Pilih Gambar</p>
        <p style="color:black ">Max : 2,5 MB</p>
        <div class="input-group mb-3">
            <input type="file" class="form-control" @error('image') is-invalid @enderror id="image" name="image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label" style="color: black">Body</label>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body" style="color: black"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Post</button>
    </form>
  </div>

  <script>
    const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });
  </script>
@endsection