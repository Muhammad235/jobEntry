<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
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

        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . $filters['tag'] . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . $filters['search']  . '%')
            ->orWhere('description', 'like', '%' . $filters['search'] . '%')
            ->orWhere('tags', 'like', '%' . $filters['search'] . '%')
            ->orWhere('company', 'like', '%' . $filters['search'] . '%')
            ;
        }
    }

    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
