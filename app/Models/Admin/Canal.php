<?php

namespace App\Models\Admin;

use Eloquent as Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Canal",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nome",
 *          description="nome",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="descricao",
 *          description="descricao",
 *          type="string"
 *      )
 * )
 */
class Canal extends Model
{
//    use SoftDeletes;

    public $table = 'canals';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function servicos()
    {
        return $this->belongsToMany(Servico::class, 'banco_canal_servicos')
            ->withPivot('banco_id', 'preco');
    }
    public function bancos(){
        return $this->belongsToMany(Banco::class,'banco_canal_servicos')
            ->withPivot('canal_id', 'preco');
    }
}
