<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    use HasFactory;

    public $table = 'telefones';

    protected $fillable = [
        'numero',
        'tipo',
    ];

    protected $hidden = [
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
