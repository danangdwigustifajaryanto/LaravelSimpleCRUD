<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    use HasFactory; //Untuk test input data dummy (purpose pengembangan)

    // Agar kolom 'text' bisa diisi mass-assignment
    protected $fillable = ['text'];
}
