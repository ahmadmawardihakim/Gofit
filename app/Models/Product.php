<?php

namespace App\Models;

use App\Models\User;
use App\Models\Merchant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'image',
        'price',
        'body',
        'user_id',
        'merchant_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
}
