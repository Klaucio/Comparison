<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    //
    protected $fillable = [
        'designacao', 'abreviatura', 'logo','agencias'
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
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
