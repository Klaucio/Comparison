<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Query\Builder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
//        $users = factory(App\User::class, 6)->create();
//        $b=new \App\Banco();
//        $servicos = factory(App\Servico::class, 20)->create();
//        $banco=factory(\App\Banco::class, 10)->create()->each(function($banco) {
//            factory(\App\Servico::class, 5)->make()->each(function($servico) use($banco) {
//                $banco->servicos()->save($servico);
//            });
//        });
//        factory(\App\Models\Admin\Canal::class, 10)->create();//save all canals
        // canal servico
        $canals = \App\Models\Admin\Canal::all();//roles
        $s = \App\Models\Admin\Servico::all();//roles
//        dd($s);

// Populate the pivot table
        \App\Models\Admin\Servico::all()->each(function ($servico) use ($canals) {
            $servico->canals()->attach(
                $canals->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
//
    }
}
