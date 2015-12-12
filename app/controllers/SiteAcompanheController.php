<?php

class SiteAcompanheController extends BaseController {

    protected $layout = 'site.template.layoutInterna';

    // route = site/contato
    public function showPrincipal() {

        $id = DB::table('categorias')
                ->select('id')
                ->take(1)
                ->orderBy('id','DESC')
                ->pluck('id');

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
                        'construindo_com_qualidade.id',
                        'construindo_com_qualidade.descricao',
                        'construindo_com_qualidade.categorias_id',
                        'categorias.name'
                )
                ->where('construindo_com_qualidade.categorias_id', $id)
                ->first();

        $editarFotos = Foto::join('categorias', 'categorias.id', '=', 'fotos.categorias_id')
                ->select(
                        'fotos.id', 'fotos.categorias_id', 'fotos.imagem', 'categorias.id'
                )
                ->where('fotos.categorias_id', $id)
                ->get();

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

        // dd($mesEano);

        $this->layout->content = View::make('site.acompanheaobra')
                ->with('editarCategoria', $editarCategoria)
                ->with('editarObra', $editarObra)
                ->with('mesEano', $mesEano)
                ->with('editarConstruindo', $editarConstruindo)
                ->with('editarFotos', Categoria::find($id));
    }

}
