<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Categoria;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CategoriaRepository
 * @package App\Repositories\Admin
 * @version September 18, 2017, 10:47 am UTC
 *
 * @method Categoria findWithoutFail($id, $columns = ['*'])
 * @method Categoria find($id, $columns = ['*'])
 * @method Categoria first($columns = ['*'])
*/
class CategoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'designacao',
        'descricao'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Categoria::class;
    }
}
