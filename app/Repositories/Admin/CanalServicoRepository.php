<?php

namespace App\Repositories\Admin;

use App\Models\Admin\BancoCanalServico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CanalServicoRepository
 * @package App\Repositories\Admin
 * @version September 18, 2017, 10:59 am UTC
 *
 * @method BancoCanalServico findWithoutFail($id, $columns = ['*'])
 * @method BancoCanalServico find($id, $columns = ['*'])
 * @method BancoCanalServico first($columns = ['*'])
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
        return BancoCanalServico::class;
    }
}
