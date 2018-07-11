<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePositionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('positions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('position_name', 60)->nullable();
			$table->integer('competence_level');
			$table->integer('position_level');
			$table->integer('job_family_id');
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
		Schema::drop('positions');
	}

}
