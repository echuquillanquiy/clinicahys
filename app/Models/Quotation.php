<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    const RECEPCIONADO = 1;
    const ENVIADO = 2;

    protected $guarded = ['id', 'status'];
}
