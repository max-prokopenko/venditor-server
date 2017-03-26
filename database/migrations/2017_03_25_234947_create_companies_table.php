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
        Schema::create('companies', function(
            Blueprint $table) {
            $table->increments('id');
            $table->text('businessId');
            $table->text('name');
            $table->text('registrationDate');
            $table->text('companyForm');
            $table->text('detailsUri');
            $table->text('bisDetailsUri');
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
