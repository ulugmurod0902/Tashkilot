<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'my_companies';
    protected $primaryKey = 'company_id';
    public $incrementing = false;
    public $timestamps = false;
}
