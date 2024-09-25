<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'locais';
    use HasFactory;


    public function getImagemAttribute($value)
    {
        // Get the base URL from the environment file
        $baseUrl = env('URL_IMAGE');

        // Return the full URL by appending the image path from the database
        return $baseUrl . $value;
    }
}
