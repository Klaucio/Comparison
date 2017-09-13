<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //
    protected $fillable = [
        'nome', 'descricao'
    ];
    public function bancos()
    {
        return $this->belongsToMany(Banco::class)->withTimestamps();
    }
    public function recursos()
    {
        return $this->belongsToMany(Recurso::class)->withTimestamps();
    }
}
