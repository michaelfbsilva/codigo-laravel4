<?php

/*    PRINCIPAL    */
Route::get('/', 'SitePrincipalController@showPrincipal');

/*    EMPREENDIMENTO    */
Route::get('/empreendimento/{id}', function($id) {

    $editarCategoria = Dado::join('categorias', 'categorias.id', '=', 'dados.categorias_id')
            ->select(
                    'dados.id', 'dados.descricao', 'dados.video', 'dados.categorias_id', 'categorias.name'
            )
            ->where('dados.categorias_id', $id)
            ->first();

    $editarObra = Obra::join('categorias', 'categorias.id', '=', 'obras.categorias_id')
            ->select(
                    'obras.id', 'obras.projetos', 'obras.servicos_inicias', 'obras.fundacoes', 'obras.estrutura', 'obras.alvenaria', 'obras.instalacoe_eletricas', 'obras.instalacoes_hidrossanitarias', 'obras.pavimentacao', 'obras.revestimentos', 'obras.cobertura_e_forros', 'obras.esquadrias', 'obras.pintura', 'obras.acabamento', 'obras.andamento_geral_da_obra', 'obras.categorias_id'
            )
            ->where('obras.categorias_id', $id)
            ->first();

    $editarConstruindo = Construindo::join('categorias', 'categorias.id', '=', 'construindo_com_qualidade.categorias_id')
            ->select(
                    'construindo_com_qualidade.id', 'construindo_com_qualidade.descricao', 'construindo_com_qualidade.categorias_id', 'categorias.name'
            )
            ->where('construindo_com_qualidade.categorias_id', $id)
            ->first();

    $editarFotos = Foto::join('categorias', 'categorias.id', '=', 'fotos.categorias_id')
            ->select(
                    'fotos.id', 'fotos.categorias_id', 'fotos.ano', 'fotos.mes', 'fotos.imagem', 'categorias.id'
            )
            ->where('fotos.categorias_id', $id)
            ->first();

    $mesEano = Foto::join('categorias', 'categorias.id', '=', 'fotos.categorias_id')
            ->select(
                     'fotos.id', 'fotos.categorias_id', 'fotos.ano', 'fotos.mes', 'fotos.imagem', 'categorias.id'
                )
            ->orderBy(\DB::raw('YEAR(fotos.mes)'),'ASC')
            ->orderBy(\DB::raw('MONTH(fotos.mes)'),'ASC')
            ->groupBy(\DB::raw('MONTH(fotos.mes)'))
            ->groupBy(\DB::raw('YEAR(fotos.mes)'))
            ->where('fotos.categorias_id', $id)
            ->get();

       // dd($editarFotos);

    return View::make('site.empreendimento')
                    ->with('editarCategoria', $editarCategoria)
                    ->with('editarObra', $editarObra)
                    ->with('editarConstruindo', $editarConstruindo)
                    ->with('mesEano', $mesEano)
                    ->with('editarFotos', Categoria::find($id));
});

Route::controller('/empreendimento', 'SiteEmpreendimentoController');

/*    ACOMPANHE A OBRA    */
Route::get('/acompanhe_a_obra', 'SiteAcompanheController@showPrincipal');

/*    QUEM SOMOS    */
Route::get('/quemsomos', 'SiteQuemsomosController@showPrincipal');

/*    CONTATO    */
Route::get('/contato', array('as' => 'contato', 'uses' => 'SiteContatoController@contato'));
Route::post('/contato', 'SiteContatoController@postContato');

/*    REGISTRO - CORRETOR    */
Route::controller('registro', 'RegistroCorretorController');

/*    LOGIN    */
Route::get('login', array('as' => 'login', function () {
    return View::make('login');
}))->before('guest');

Route::post('login', array('before' => 'csrf', function() {
$regras = array(
    "email" => "required|email",
    "password" => "required|"
);

$validacao = Validator::make(Input::all(), $regras);

if ($validacao->fails()) {
    return Redirect::to('login')->withErrors($validacao);
}

//tenta logar o usuÃƒÂ¡rio
if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
    return Redirect::to('admin/painel');
} else {
    return Redirect::to('login')->withErrors('Usuário ou Senha invalido');
}
}));


/*    ADMIN    */
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
    Route::controller('painel', 'AdminController');
    Route::controller('quemsomos', 'QuemsomosController');
    Route::controller('empreendimento', 'EmpreendimentoController');
    Route::controller('slide', 'SlideController');
    Route::controller('arquivos', 'ArquivosController');
    Route::controller('arquivosCorretor', 'ArquivosCorretorController');
    Route::controller('funcionarios', 'FuncionariosController');
    Route::controller('corretores', 'CorretoresController');

    //Logout
    Route::get('logout', array('as' => 'logout', function () {
        Auth::logout();
        return Redirect::to('login')->with('message', 'Deslogado com sucesso.');
    }))->before('auth');
});
