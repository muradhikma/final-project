<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waitlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'noofperson',
        'date',
        'time',
        'phone',
        'withfoodornot',
        'paymenttype',
        'approve',
    ];
}