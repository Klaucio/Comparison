<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Banco;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BancoRepository
 * @package App\Repositories\Admin
 * @version September 18, 2017, 10:43 am UTC
 *
 * @method Banco findWithoutFail($id, $columns = ['*'])
 * @method Banco find($id, $columns = ['*'])
 * @method Banco first($columns = ['*'])
*/
class BancoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'designacao',
        'abreviatura',
        'logo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Banco::class;
    }
}
