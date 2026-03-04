<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i <= 20 ; $i++){
            DB::table('frutas')->insert([
                'nombre' => 'cereza'.$i,
                'descripcion' => 'descripcionde la fruta'.$i,
                'precio' => $i,
                'fecha' => date('y-m-d')
            ]);
        }
        $this->command->info('la tabla de frutas ha sido rellenada');
    }
}
