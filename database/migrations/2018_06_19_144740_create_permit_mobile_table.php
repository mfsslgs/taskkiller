<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermitMobileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permit_mobile', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('mobile', 512);
			$table->integer('company_id')->default(1)->comment('公司id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('permit_mobile');
	}

}
