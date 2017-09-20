<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Servico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServicoRepository
 * @package App\Repositories\Admin
 * @version September 18, 2017, 10:43 am UTC
 *
 * @method Servico findWithoutFail($id, $columns = ['*'])
 * @method Servico find($id, $columns = ['*'])
 * @method Servico first($columns = ['*'])
*/
class ServicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'categoria_id',
        'nome',
        'descricao'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Servico::class;
    }
}
