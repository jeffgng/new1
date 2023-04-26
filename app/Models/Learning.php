<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learning extends Model
{
    use HasFactory;

    protected $table = 'learnings';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'prenom',
        'email',
        'pays',
        'photo',
        'pdf',
        'word',
    ];
}

