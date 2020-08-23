<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id_employee');
            $table->string('username');
            $table->string('email');
            $table->char('gender',2);
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('salary');
            $table->string('position');
            $table->char('phone',15);
            $table->string('city');
            $table->date('join_date');
            $table->longText('photo')->nullable();
            
            $table->timestamps();

        });
        DB::table('employees')->insert(array(
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'gender' => 'm',
            'first_name' => 'admin1',
            'last_name' => 'admin2',
            'salary' => '3000000',
            'position' => 'administrator',
            'phone' =>'000111222333',
            'city' =>'admin city',
            'join_date' => 20200220,
            'photo'=> '/public/backend/img/man.png'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
