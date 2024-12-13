<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->created_at = now();
            $model->updated_at = now();
        });
    }
}
