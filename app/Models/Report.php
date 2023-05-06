<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public  $table = 'reports';
    public $fillable = [
        'status',
        'user_id',
        'title',
        'body'
    ];
}
