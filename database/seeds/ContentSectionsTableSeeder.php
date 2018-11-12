<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = App\User::where('name', 'admin')->first();
        $datas = [
        	//HOME - QUE SOMOS
        	[
        		'type' => 'string',
        		'module' => 'home',
        		'section' => 'h01_que_somos_subtitle',
        		'content' => 'Agregamos',
        	],
        	[
        		'type' => 'string',
        		'module' => 'home',
        		'section' => 'h01_que_somos_title',
        		'content' => 'Valor al Cliente',
        	],
        	[
        		'type' => 'string',
        		'module' => 'home',
        		'section' => 'h01_que_somos_paragrah',
        		'content' => 'adaptando la tecnología a los objetivos de su organización',
        	],
        	//HOME - QUE OFRECEMOS
        	[
        		'type' => 'string',
        		'module' => 'home',
        		'section' => 'h02_servicios_title',
        		'content' => 'Nuestros Productos y Servicios',
        	],
        	[
        		'type' => 'image',
        		'module' => 'home',
        		'section' => 'h02_servicios_p01_image',
        		'content' => 'images/Home_0013_Icono_consultoria.png',
        	],
        	[
        		'type' => 'string',
        		'module' => 'home',
        		'section' => 'h02_servicios_p01_title',
        		'content' => 'Consultoría',
        	],
        	[
        		'type' => 'string',
        		'module' => 'home',
        		'section' => 'h02_servicios_p01_description',
        		'content' => 'Asesoría especializada  en Tecnología de Información, orientada a la optimización de procesos que intervienen en la funcionalidad de las áreas de negocio de su organización.',
        	],
            [
                'type' => 'image',
                'module' => 'home',
                'section' => 'h02_servicios_p02_image',
                'content' => 'images/Home_0014_Icono_SI.png',
            ],
            [
                'type' => 'string',
                'module' => 'home',
                'section' => 'h02_servicios_p02_title',
                'content' => 'Soluciones Integrales',
            ],
            [
                'type' => 'string',
                'module' => 'home',
                'section' => 'h02_servicios_p02_description',
                'content' => 'Desarrollo e implementación de soluciones inteligentes en Tecnología de Información, alineadas al alcance de las metas y objetivos de su organización.',
            ],
            [
                'type' => 'image',
                'module' => 'home',
                'section' => 'h02_servicios_p03_image',
                'content' => 'images/Home_0015_Icono_operaciones.png',
            ],
            [
                'type' => 'string',
                'module' => 'home',
                'section' => 'h02_servicios_p03_title',
                'content' => 'Operación y Soporte',
            ],
            [
                'type' => 'string',
                'module' => 'home',
                'section' => 'h02_servicios_p03_description',
                'content' => 'Continuidad Operativa de los recursos del área de Tecnología de Información - infraestructura y Aplicaciones - existentes en su organización.',
            ],
            [
                'type' => 'image',
                'module' => 'home',
                'section' => 'h02_servicios_p04_image',
                'content' => 'images/Home_0016_Icono_formacion.png',
            ],
            [
                'type' => 'string',
                'module' => 'home',
                'section' => 'h02_servicios_p04_title',
                'content' => 'Formación',
            ],
            [
                'type' => 'string',
                'module' => 'home',
                'section' => 'h02_servicios_p04_description',
                'content' => 'Capacitación al personal su empresa, en el uso correcto y eficiente de la  Tecnología de Información, para el máximo provecho de su inversión.',
            ],
            [
                'type' => 'image',
                'module' => 'home',
                'section' => 'h02_servicios_p05_image',
                'content' => 'images/Home_0017_Icono_procura.png',
            ],
            [
                'type' => 'string',
                'module' => 'home',
                'section' => 'h02_servicios_p05_title',
                'content' => 'Procura',
            ],
            [
                'type' => 'string',
                'module' => 'home',
                'section' => 'h02_servicios_p05_description',
                'content' => 'Asesoría, negociación y administración, en la adquisición de productos y servicios de Tecnología de Información.',
            ],
            [
                'type' => 'string',
                'module' => 'home',
                'section' => 'h03_empleos_description',
                'content' => 'Si eres un profesional apasionado por la Tecnología y además eres comprometido, Innovador y creativo...',
            ],
            [
                'type' => 'string',
                'module' => 'home',
                'section' => 'h03_empleos_subtitle',
                'content' => '¡Únete a nuestro equipo!',
            ],
            [
                'type' => 'string',
                'module' => 'home',
                'section' => 'h03_empleos_subtitle',
                'content' => '¡Únete a nuestro equipo!',
            ],
            [
                'type' => 'string',
                'module' => 'home',
                'section' => 'h03_empleos_subtitle',
                'content' => '¡Únete a nuestro equipo!',
            ],
        ];

        foreach ($datas as $content) {
        	DB::table('content_sections')->insert([
        		'user_id' => $user->id,
        		'type' => $content['type'],
        		'module' => $content['module'],
        		'section' => $content['section'],
        		'content' => $content['content'],
        		'created_at' => date("Y-m-d H:i:s"),
	        	'updated_at' => date("Y-m-d H:i:s")
        	]);
        }
    }
}
