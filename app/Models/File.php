<?php

namespace App\Models;

use App\Models\User;
use App\Models\Bulan;
use App\Models\Tahun;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['user', 'tahun', 'bulan']; //eager load


    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['perusahaan'] ?? false, function ($query, $perusahaan) {
            return $query->where('user_id', 'like', '%' . $perusahaan . '%');
        });

        $query->when($filters['tahun'] ?? false, function ($query, $tahun) {
            return $query->where('tahun_id', 'like', '%' . $tahun . '%');
        });
        // versi erofunction
    }

    public function Bulan()
    {
        return $this->belongsTo(Bulan::class);
    }

    public function Tahun()
    {
        return $this->belongsTo(Tahun::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
