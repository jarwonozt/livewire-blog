<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'email', 'phone', 'image', 'address', 'status', 'crated_by', 'created_at', 'updated_at'
    ];
}
