<?php

namespace Database\Factories;

use App\Models\Tarefa;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TarefaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tarefa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $nlist = ['Estudar', 'Comprar pão', 'Trabalhar'];
        $plist = ['Alta', 'Média', 'Baixa'];
        $dalist = ['2021-03-03 16:00:00'];
        $dtlist = ['2021-03-03 18:00:00'];

        return [
            'nome' => $nlist[array_rand($nlist)],
            'prioridade' => $plist[array_rand($plist)],
            'dt_abertura' => $dalist[array_rand($dalist)],
            'dt_termino' => $dtlist[array_rand($dtlist)],
            'user' => User::inRandomOrder()->first()->id,
        ];
    }
}
