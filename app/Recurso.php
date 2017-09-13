<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    //
    protected $fillable = [
        'nome', 'descricao', 'preco',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function servicos()
    {
        return $this->belongsToMany(Servico::class)->withTimestamps();
    }
}
