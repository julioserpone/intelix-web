<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_legal', 100);
            $table->string('identification', 12);
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email_jobs');
            $table->string('email_contacts');
            $table->string('facebook_account')->nullable();
            $table->string('instagram_account')->nullable();
            $table->string('twitter_account')->nullable();
            $table->string('youtube_account')->nullable();
            $table->string('logo_color')->nullable();
            $table->string('logo_monocromatic')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
