<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name_legal' => 'Intelix Synergy C.A',
            'identification' => 'J-41019625-4',
            'address' => 'Av Universidad, CC La Granja Nivel 2 Of P101 Urb. La Granja',
            'phone' => '0241-8670071',
            'email_jobs' => 'personal@inteliz.biz',
            'email_contacts' => 'intelix@intelix.biz',
            'facebook_account' => 'http://facebook.com/intelixworld',
            'instagram_account' => 'http://instagram.com/intelixworld',
            'twitter_account' => 'http://twitter.com/intelixworld',
            'youtube_account' => 'http://youtube.com/user/intelixworld',
            'logo_color' => 'images/Home_0007_logo_color.png',
            'logo_monocromatic' => 'images/Home_0000_logo_blanco.png',
            'created_at' => date("Y-m-d H:i:s"),
	        'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
