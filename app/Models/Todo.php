<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'slug',
        'title',
        'intro',
        'detail',
        'start_date',
        'image',
        'showed',
        'confirmed',
        'is_display'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
