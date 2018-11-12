<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $services = array('Consultoría','Soluciones Integrales','Operación y Soporte','Formación','Procura','Otro');

        foreach ($services as $service) {
            Service::create([
                'description' => $service
            ]);
        }
    }
}
