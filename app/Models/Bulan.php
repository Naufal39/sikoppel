<?php

namespace App\Models;

use App\Models\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bulan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function File()
    {
        return $this->hasMany(File::class);
    }
}
