<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Canal;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CanalRepository
 * @package App\Repositories\Admin
 * @version September 18, 2017, 10:58 am UTC
 *
 * @method Canal findWithoutFail($id, $columns = ['*'])
 * @method Canal find($id, $columns = ['*'])
 * @method Canal first($columns = ['*'])
*/
class CanalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'descricao'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Canal::class;
    }
}
