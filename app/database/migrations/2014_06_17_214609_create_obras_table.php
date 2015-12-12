<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('obras', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('projetos', 100);
                        $table->string('servicos_inicias', 100);
                        $table->string('fundacoes', 100);
                        $table->string('estrutura', 100);
                        $table->string('alvenaria', 100);
                        $table->string('instalacoe_eletricas', 100);
                        $table->string('instalacoes_hidrossanitarias', 100);
                        $table->string('pavimentacao', 100);
                        $table->string('revestimentos', 100);
                        $table->string('cobertura_e_forros', 100);
                        $table->string('esquadrias', 100);
                        $table->string('pintura', 100);
                        $table->string('acabamento', 100);
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
		Schema::drop('obras');
	}

}
