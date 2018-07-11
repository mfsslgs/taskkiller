<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medal', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 100)->comment('勋章名称');
			$table->string('medalurl', 120)->nullable()->comment('勋章图片url');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('medal');
	}

}
