<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mobile');
            $table->string('tellphone');
            $table->string('fax');
            $table->string('email');
            $table->string('address');
            $table->text('aboutus');
            $table->text('aboutus_all');
            $table->string('company_name');
            $table->string('company_name_en')->nullable();
            $table->string('logo_image');
            $table->string('header_description');
            $table->string('aboutus_image');
            $table->boolean('catalog')->default(false);
            $table->integer('lang_id')->default(1);
            $table->timestamps();
        });


        DB::table('settings')->insert(
            array(
                'mobile' => '0903',
                'tellphone' => '0113',
                'fax' => '0113',
                'email' => 'a@a.com',
                'address' => 'تست',
                'aboutus' => 'تست',
                'aboutus_all' => 'تست',
                'company_name' => 'تست',
                'logo_image' => 'logo',
                'header_description' => 'تست',
                'aboutus_image' => 'banner',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
