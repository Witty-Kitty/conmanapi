<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('contacts', function(Blueprint $table){
            $table->increments('id');
            $table->integer('owner_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('twitter');
            $table->timestamps();
            $table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('contacts');
	}

}
