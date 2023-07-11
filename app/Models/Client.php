<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'clients';

    // Define the fillable attributes of the model
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'city',
        'country',
    ];
}
