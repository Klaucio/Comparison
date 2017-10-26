<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //
    protected $fillable = [
        'categoria_id','nome', 'descricao'
    ];
    public function bancos()
    {
        return $this->belongsToMany(Banco::class)->withTimestamps();
    }
    public function recursos()
    {
        return $this->belongsToMany(Recurso::class)->withTimestamps();
    }
    public function canalServicos()
    {
        return $this->hasMany(\App\Models\Admin\CanalServico::class);
    }
}
