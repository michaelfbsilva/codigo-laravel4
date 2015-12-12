<?php

class SitePrincipalController extends BaseController {

    protected $layout = 'site.template.layout';

    // route = site/
    public function showPrincipal() {
        
        $editarCategoria = Dado::join('categorias', 'categorias.id', '=', 'dados.categorias_id')
                ->select(
                        'dados.id',
                        'dados.descricao',
                        'dados.video',
                        'dados.categorias_id',
                        'categorias.name',
                        'categorias.imagem'
                )
                ->take(2)
                ->orderBy('id','DESC')
                ->get();

        $this->layout->content = View::make('site.principal')
                ->with('editarCategoria', $editarCategoria);
    }

}
