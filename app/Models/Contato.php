<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    // Excluídos da atribuição em massa.
    protected $guarded = ['id', '_token', 'lida'];
}
