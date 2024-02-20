@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Postingan Berita dari {{ auth()->user()->name }}</h1>
  </div>

  @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

  <div class="table-responsive">
    <a href="/dashboard/berita/create" class="btn btn-primary mb-3">Tambah Baru</a>
    <table class="table table-striped table-sm" style="color: black">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Kategori</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $data)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->title }}</td>
            <td>{{ $data->category->nama }}</td>
            <td>
                <a href="../../dashboard/berita/{{ $data->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="../dashboard/berita/{{ $data->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="../dashboard/berita/{{ $data->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin untuk hapus data?')"><span data-feather="x-circle"></button>
                </form>
            </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection