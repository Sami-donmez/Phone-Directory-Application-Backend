<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ContactInformation extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected static function booted(): void
    {
        static::creating(function (ContactInformation $model) {
            $model->id = Str::uuid()->toString();
        });
    }

}
