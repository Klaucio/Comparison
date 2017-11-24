<?php

namespace App\Models\Admin;

use App\User;
use Eloquent as Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Banco",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="designacao",
 *          description="designacao",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="abreviatura",
 *          description="abreviatura",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="logo",
 *          description="logo",
 *          type="string"
 *      )
 * )
 */
class Banco extends Model
{
//    use SoftDeletes;

    public $table = 'bancos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'designacao',
        'abreviatura',
        'logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'designacao' => 'string',
        'abreviatura' => 'string',
        'logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function servicos()
    {
        return $this->belongsToMany(Servico::class, 'banco_canal_servicos')
            ->withPivot('canal_id', 'preco');
    }
    public function canals(){
        return $this->belongsToMany(Canal::class,'banco_canal_servicos')
            ->withPivot('servico_id', 'preco');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
//    public function canalServicos()
//    {
//        return $this->hasMany(\App\Models\Admin\BancoCanalServico::class);
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
