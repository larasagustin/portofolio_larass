<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Tambahkan ini
    protected $table = 'contact_messages'; // Sesuaikan dengan nama table di database

    protected $fillable = [
        'name',
        'email', 
        'subject',
        'message'
    ];
}