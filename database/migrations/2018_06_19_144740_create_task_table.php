<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 200)->nullable()->comment('任务名称');
			$table->text('task_desc', 65535)->nullable()->comment('任务描述');
			$table->integer('lableid')->nullable()->comment('标签id');
			$table->timestamp('createtime')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('创建时间');
			$table->dateTime('executiontime')->nullable()->comment('任务开始时间');
			$table->dateTime('finishtime')->nullable()->comment('任务预计完成时间');
			$table->dateTime('reviewtime')->nullable();
			$table->integer('reviewid')->nullable()->comment('评审人ID');
			$table->integer('creatorid')->comment('创建人id');
			$table->integer('executorid')->comment('执行人id');
			$table->integer('task_quality_score')->nullable()->default(0)->comment('评分');
			$table->text('task_comment', 65535)->nullable()->comment('评语');
			$table->boolean('status')->nullable()->default(0)->comment('状态,0-进行中，1-完成,2-已评审');
			$table->integer('parent_id')->nullable()->default(1)->comment('父任务id');
			$table->dateTime('submittime')->nullable()->comment('任务提交时间');
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
		Schema::drop('task');
	}

}
