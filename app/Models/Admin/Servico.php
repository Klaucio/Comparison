<?php

namespace App\Models\Admin;

use Eloquent as Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Servico",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="categoria_id",
 *          description="categoria_id",
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
class Servico extends Model
{
//    use SoftDeletes;

    public $table = 'servicos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'categoria_id',
        'nome',
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
//    protected $casts = [
//        'id' => 'integer',
//        'categoria_id' => 'integer',
//        'nome' => 'string',
//        'descricao' => 'string'
//    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function categoria()
    {
        return $this->belongsTo(\App\Models\Admin\Categoria::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function bancos()
    {
        return $this->belongsToMany(\App\Models\Admin\Banco::class, 'banco_servico');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function canals()
    {
        return $this->belongsToMany(Canal::class);
    }
}
