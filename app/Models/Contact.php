<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Contact extends Model
{
    use HasFactory,SoftDeletes;
    public $incrementing = false;
    protected static function booted(): void
    {
        static::creating(function (Contact $model) {
            $model->id = Str::uuid()->toString();
        });
    }
}
