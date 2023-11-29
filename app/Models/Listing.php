<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'tags',
        'company',
        'location',
        'website',
        'email',
        'description',
        'sallary_from',
        'sallary_to',
        'employment_type',
        'logo',
    ];

    public function scopeFilter($query, array $filters)
    {
// dd($filters['tag']);

        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . $filters['tag'] . '%');
        }
    }
}
