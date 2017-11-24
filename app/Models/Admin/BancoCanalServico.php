<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="BancoCanalServico",
 *      required={""},
 *      @SWG\Property(
 *          property="canal_id",
 *          description="canal_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="servico_id",
 *          description="servico_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="banco_id",
 *          description="banco_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="preco",
 *          description="preco",
 *          type="number",
 *          format="float"
 *      )
 * )
 */
class BancoCanalServico extends Model
{
//    use SoftDeletes;

    public $table = 'canal_servico';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'canal_id',
        'servico_id',
        'banco_id',
        'preco'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'canal_id' => 'integer',
        'servico_id' => 'integer',
        'banco_id' => 'integer'
    ];

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
    public function banco()
    {
        return $this->belongsTo(\App\Banco::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function canal()
    {
        return $this->belongsTo(\App\Models\Admin\Canal::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function servico()
    {
        return $this->belongsTo(Servico::class);
    }
}
