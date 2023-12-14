<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','author', 'excerpt', 'body'];

    protected $with = ['user', 'category']; //eager load

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        }); //versi callback

        $query->when($filters['user'] ?? false, fn($query, $user)=>
            $query->whereHas('user', fn($query) =>
                $query->where('username', $user)
            )
        ); //versi erofunction
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
