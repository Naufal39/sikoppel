<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use App\Models\Bulan;
use App\Models\Tahun;
use Illuminate\Http\Request;

class LapbulController extends Controller
{
    public function index()
    {
        if (auth()->user()->is_superadmin == '1') {
            if (request('perusahaan')) {
                $perusahaan = User::firstWhere('id', request('perusahaan'));
                $title = "Laporan Bulanan dari " . $perusahaan->name;
            } else
                $title = "";

            return view('dashboard.laporan.index', [
                'perusahaan' => User::where('is_comp', '1')->get(),
                'bulan' => Bulan::all(),
                'tahun' => Tahun::all(),
                'posts' => File::filter(request(['perusahaan', 'tahun']))->get(),
                'title' => $title
            ]);
        } else {
            return view('dashboard.laporan.index', [
                'posts' => File::where('user_id', auth()->user()->id)->filter(request(['tahun']))->get(),
                'perusahaan' => User::where('is_comp', '1')->get(),
                'bulan' => Bulan::all(),
                'tahun' => Tahun::all(),
            ]);
        }
    }

    public function create()
    {
        return view('dashboard.laporan.create', [
            'bulan' => Bulan::all(),
            'tahun' => Tahun::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_file' => 'file|max:5000',
            'tahun_id' => 'required',
            'bulan_id' => 'required',
        ]);

        if ($request->file('nama_file')) {
            $validatedData['nama_file'] = $request->file('nama_file')->store('post-laporan');
        }

        $validatedData['user_id'] = auth()->user()->id;

        File::create($validatedData);
        return redirect('/dashboard/laporan-bulanan')->with('success', 'Berhasil ditambahkan!');
    }

    public function destroy(File $file)
    {
        File::destroy($file->id);
        return redirect('/dashboard/laporan-bulanan')->with('success', 'Data Terhapus!');
    }
}
