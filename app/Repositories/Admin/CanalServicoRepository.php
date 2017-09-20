<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CanalServico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CanalServicoRepository
 * @package App\Repositories\Admin
 * @version September 18, 2017, 10:59 am UTC
 *
 * @method CanalServico findWithoutFail($id, $columns = ['*'])
 * @method CanalServico find($id, $columns = ['*'])
 * @method CanalServico first($columns = ['*'])
*/
class CanalServicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'canal_id',
        'servico_id',
        'banco_id',
        'preco'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CanalServico::class;
    }
}
