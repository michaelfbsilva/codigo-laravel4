<?php

class SiteEmpreendimentoController extends BaseController {

    protected $layout = 'site.template.layoutInterna';

    // route = site/quemsomos
    public function showPrincipal() {

        return 'Site emprenendimento';
    }

    //retonar fotos
    public function postFotosAjax() {

        $mes = Input::get('mes');
        $id = Input::get('categorias_id');

        if(Request::ajax()){

            $FotosMesAno = DB::table('fotos')
            ->select('mes', 'imagem')
            ->where('mes', '=', $mes) // Tem que ser um MES.
            ->where('categorias_id', '=', $id, 'AND') // Tem que ser um ID DO EMPREENDIMENTO.
            ->get();

            return Response::json($FotosMesAno);

        }
    }

}
