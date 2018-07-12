<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 40)->comment('用户名');
			$table->string('realname', 30)->nullable();
			$table->string('phone', 20)->nullable()->comment('手机号');
			$table->string('check_phone', 20)->nullable()->comment('核实电话号码');
			$table->string('remember_token', 100)->nullable()->comment('是否记录登陆信息');
			$table->timestamps();
			$table->string('password', 200)->comment('密码');
			$table->boolean('gender')->nullable()->default(0)->comment('性别，1-男，0-女');
			$table->string('email', 80)->nullable()->comment('邮箱');
			$table->string('headerurl', 120)->nullable();
			$table->integer('depid')->nullable()->default(0)->comment('部门id');
			$table->integer('company_id')->nullable()->default(1)->comment('公司ID');
			$table->integer('position')->nullable()->default(0)->comment('职位');
			$table->string('profession', 80)->nullable()->comment('专业');
			$table->string('industry', 80)->nullable()->comment('行业');
			$table->text('intro', 65535)->nullable()->comment('简介');
			$table->integer('roleid')->nullable()->default(0)->comment('角色，1-员工，2-领导');
			$table->integer('lastlogin')->nullable()->comment('最后登录时间');
			$table->integer('createtime')->nullable()->comment('创建时间');
			$table->string('token', 80)->nullable()->comment('token');
			$table->boolean('enabled')->nullable()->default(1)->comment('帐号状态，0-不可用，1-正常使用');
			$table->integer('capability_level')->default(0)->comment('能力等级');
			$table->unique(['username','realname'], 'username');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
