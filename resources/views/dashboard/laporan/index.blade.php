@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        @if (auth()->user()->is_superadmin == '1')
            <h1 class="h2">{{ auth()->user()->name }}</h1>
        @endif

        @if (auth()->user()->is_comp == '1')
            <h1 class="h2">Laporan Bulanan dari {{ auth()->user()->name }}</h1>
        @endif

    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- <label for="tahun" class="form-label">Tahun</label> --}}

    <form action="/dashboard/laporan-bulanan">
        @if (auth()->user()->is_superadmin == '1')
            <select class="form-select" name="perusahaan" style="color: black; width: 20%">
                <option selected>Pilih User</option>
                @foreach ($perusahaan as $data)
                    <option value="{{ $data->id }}" style="color: black">{{ $data->name }}</option>
                @endforeach
            </select>
        @endif

        @if (auth()->user()->is_comp == '1')
            <input type="hidden" name="perusahaan" value="{{ auth()->user()->id }}">
        @endif

        <select class="form-select" name="tahun" style="color: black; width: 20%">
            <option selected>Pilih Tahun</option>
            @foreach ($tahun as $data)
                <option value="{{ $data->id }}" style="color: black">{{ $data->tahun }}</option>
            @endforeach
        </select>

        <div class="table-responsive">
            <button>search</button>
    </form>

    <br><br>
    <a href="/dashboard/laporan-bulanan/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if (auth()->user()->is_superadmin == '1')
        <h5>{{ $title }}</h5>
    @endif

    <table class="table table-striped table-sm" style="color: black">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tahun</th>
                <th scope="col">Bulan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->tahun->tahun }}</td>
                    <td>{{ $data->bulan->nama_bulan }}</td>
                    <td>
                        <a href="{{ asset('storage/' . $data->nama_file) }}" class="badge bg-info"><span
                                data-feather="eye"></span></a>
                        {{-- <a href="../../dashboard/berita/{{ $data->slug }}" class="badge bg-info"><span
                                data-feather="eye"></span></a>
                        <a href="../dashboard/berita/{{ $data->slug }}/edit" class="badge bg-warning"><span
                                data-feather="edit"></span></a> --}}
                        <form action="../dashboard/laporan-bulanan/{{ $data->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0"
                                onclick="return confirm('Yakin untuk hapus data?')"><span data-feather="x-circle"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
