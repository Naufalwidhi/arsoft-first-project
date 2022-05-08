<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class u_user extends Model
{
    use HasFactory;

    protected $table = 'd_user';
    protected $primaryKey = 'u_id';
    protected $fillable = [
        'u_name',
        'u_email',
        'u_password',
        'u_last_access',
    ];
}
