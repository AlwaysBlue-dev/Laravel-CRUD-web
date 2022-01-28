<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_registration', function (Blueprint $table) {
            $table->id(); //custom field name
            $table->string('name', 60);
            $table->string('email', 100);
            $table->integer('contact');
            $table->string('address', 100);
            $table->string('qualification', 20);
            $table->date('dob');
            $table->string('gender', 20)->nullable();
            $table->timestamps(); //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_registration');
    }
}
