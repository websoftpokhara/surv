<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('province');
            $table->string('district');
            $table->string('minicipality');
            $table->integer('wardno');
            $table->string('tole');
            $table->integer('age');
            $table->string('email')->nullable();
            $table->string('fbid')->nullable();
            $table->enum('gender', ['M', 'F', 'O'])->default('M');
            $table->string('type');
            $table->enum('identycardoption', ['Y', 'N'])->default('N');
            $table->string('identycardno')->nullable();
            $table->enum('cityzenshipoption', ['Y', 'N'])->default('N');
            $table->string('cityzenshipno')->nullable();
            $table->string('familyno')->nullable();
            $table->enum('otherdisableinfamilyoption', ['Y', 'N'])->default('N')->nullable();
            $table->integer('otherdisableinfamilyno')->nullable();
            $table->string('gname')->nullable();
            $table->string('relation')->nullable();
            $table->integer('contactnumber')->nullable();
            $table->string('education');
            $table->enum('trainingoption', ['Y', 'N'])->default('N');
            $table->string('whattraining')->nullable();
            $table->string('wheretraining')->nullable();
            $table->enum('businessoption', ['Y', 'N'])->default('N');
            $table->string('whatbusiness')->nullable();
            $table->text('effectonbusiness')->nullable();
            $table->text('businessstatus')->nullable();
            $table->text('remark')->nullable();
            $table->integer('idcard')->nullable();
            $table->string('photo')->nullable();
            $table->integer('fcontactno')->nullable();
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
        Schema::dropIfExists('records');
    }
}
