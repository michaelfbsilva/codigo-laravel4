<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstruindoComQualidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('construindo_com_qualidade', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->text('descricao');
                        $table->integer('categorias_id')->unsigned();
                        $table->foreign('categorias_id')->references('id')->on('categorias');
                        
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
		Schema::drop('construindo_com_qualidade');
	}

}
