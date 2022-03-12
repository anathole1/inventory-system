<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invent extends Model
{
    use HasFactory;
    protected $fillable = [
        'inames','icode', 'iserial', 'iprocessor' ,'ihddc' ,'ihddh', 
        'iwin' ,'iram', 'icomment', 'inextm', 'upsinfo','stId', 'userId' ,'insId', 'depId',
    ];
}
