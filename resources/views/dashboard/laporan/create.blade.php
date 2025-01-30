@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Laporan Bulanan</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="../../dashboard/laporan-bulanan" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3" style="color: black">
                <label for="category" class="form-label">Tahun</label>
                <select class="form-select" name="tahun_id" style="color: black">
                    <option selected>Open this select menu</option>
                    @foreach ($tahun as $data)
                        @if (old('bulan_id') == $data->id)
                            <option value="{{ $data->id }}" style="color: black" selected>{{ $data->tahun }}</option>
                        @else
                            <option value="{{ $data->id }}" style="color: black">{{ $data->tahun }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3" style="color: black">
                <label for="category" class="form-label">Bulan</label>
                <select class="form-select" name="bulan_id" style="color: black">
                    <option selected>Open this select menu</option>
                    @foreach ($bulan as $data)
                        @if (old('bulan_id') == $data->id)
                            <option value="{{ $data->id }}" style="color: black" selected>{{ $data->nama_bulan }}
                            </option>
                        @else
                            <option value="{{ $data->id }}" style="color: black">{{ $data->nama_bulan }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <p style="color:black ">Select File</p>
            <p style="color:black ">Max : 2,5 MB</p>
            <div class="input-group mb-3">
                <input type="file" class="form-control" @error('laporan') is-invalid @enderror id="nama_file"
                    name="nama_file">
                @error('file')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Tambah Laporan</button>
        </form>
    </div>
@endsection
