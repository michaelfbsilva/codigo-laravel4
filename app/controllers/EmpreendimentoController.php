<?php

class EmpreendimentoController extends \BaseController {

    protected $layout = 'admin.template.layout';

    // route = empreendimento/
    public function getIndex() {

        $this->layout->content = View::make('admin.criarEmpreendimento');
    }

    // route = empreendimento/criar-empreendimento
    public function getCriarEmpreendimento() {
        $this->layout->content = View::make('admin.criarEmpreendimento');
    }

    // route = empreendimento/listar-empreendimento
    public function getListarEmpreendimento() {
        $this->layout->content = View::make('admin.listarEmpreendimento');
    }

    // route = empreendimento/deletar-empreendimento/id
    public function deleteDeletarEmpreendimento($id) {
        $categoria = Categoria::find($id);

        if ($categoria) {
            $categoria->delete();
            return Redirect::to('admin/empreendimento/listar-empreendimento')
                            ->with('message', 'Empreendimento deletada com sucesso.');
        }

        return Redirect::to('admin/empreendimento/listar-empreendimento')
                        ->with('message', 'Erro ao deletar a empreendimento, tente novamente.');

    }

    // route = empreendimento/editar-dados-gerais/id
    public function getEditarDadosGerais($id) {

        $editarCategoria = Dado::join('categorias', 'categorias.id', '=', 'dados.categorias_id')
                ->select(
                        'dados.id', 'dados.descricao', 'dados.video', 'dados.categorias_id', 'categorias.name'
                )
                ->where('dados.categorias_id', $id)
                ->first();

        $editarFotos = Foto::join('categorias', 'categorias.id', '=', 'fotos.categorias_id')
                ->select(
                        'fotos.id', 'fotos.categorias_id', 'fotos.imagem', 'categorias.id'
                )
                ->where('fotos.categorias_id', $id)
                ->get();

        $this->layout->content = View::make('admin.empreendimentoDadosGerais')
                ->with('editarCategoria', $editarCategoria)
                ->with('editarFotos', Categoria::find($id));
    }

    // route = empreendimento/editar-acompanhe-obra/id
    public function getEditarAcompanheObra($id) {

        $editarCategoria = Dado::join('categorias', 'categorias.id', '=', 'dados.categorias_id')
                ->select(
                        'dados.id', 'dados.descricao', 'dados.video', 'dados.categorias_id', 'categorias.name'
                )
                ->where('dados.categorias_id', $id)
                ->first();

        $editarConstruido = Construindo::join('categorias', 'categorias.id', '=', 'construindo_com_qualidade.categorias_id')
                ->select(
                        'construindo_com_qualidade.id', 'construindo_com_qualidade.descricao', 'construindo_com_qualidade.categorias_id', 'categorias.name'
                )
                ->where('construindo_com_qualidade.categorias_id', $id)
                ->first();

        $editarObra = Obra::join('categorias', 'categorias.id', '=', 'obras.categorias_id')
                ->select(
                        'obras.id', 'obras.projetos', 'obras.servicos_inicias', 'obras.fundacoes', 'obras.estrutura', 'obras.alvenaria', 'obras.instalacoe_eletricas', 'obras.instalacoes_hidrossanitarias', 'obras.pavimentacao', 'obras.revestimentos', 'obras.cobertura_e_forros', 'obras.esquadrias', 'obras.pintura', 'obras.acabamento', 'obras.andamento_geral_da_obra', 'obras.categorias_id'
                )
                ->where('obras.categorias_id', $id)
                ->first();

        $editarFotos = Foto::join('categorias', 'categorias.id', '=', 'fotos.categorias_id')
                ->select(
                        'fotos.id', 'fotos.categorias_id', 'fotos.imagem', 'categorias.id'
                )
                ->where('fotos.categorias_id', $id)
                ->get();

        $this->layout->content = View::make('admin.empreendimentoAcompanhe')
                ->with('editarCategoria', $editarCategoria)
                ->with('editarObra', $editarObra)
                ->with('editarConstruido', $editarConstruido)
                ->with('editarFotos', Categoria::find($id));
    }


    // route = empreendimento/editar-galeria-de-fotos/id
    /*
    Pagina de cadastro de foto e visualização por MES/ANO.
    OBS 1: Esta fazendo um JOIN com Dado com o ID da categorias para exibir o nome do empreendimento.
    OBS 2: Este fazendo um JOIN com Foto com o ID da categorias e orderBy para agrupar o ANO e um groupBy para agrupar o MES e ANO.
    OBS 3: Esta passando os dados para VIEW.
    */
    public function getEditarGaleriaDeFotos($id) {

        // OBS 1
        $editarCategoria = Dado::join('categorias', 'categorias.id', '=', 'dados.categorias_id')
                ->select(
                        'dados.id', 'dados.descricao', 'dados.video', 'dados.categorias_id', 'categorias.name'
                )
                ->where('dados.categorias_id', $id)
                ->first();

        // OBS 2
        $mesEano = Foto::join('categorias', 'categorias.id', '=', 'fotos.categorias_id')
            ->select(
                     'fotos.id', 'fotos.categorias_id', 'fotos.ano', 'fotos.mes', 'fotos.imagem', 'categorias.id'
                )
            ->orderBy(\DB::raw('MONTH(fotos.mes)'),'ASC')
            ->groupBy(\DB::raw('MONTH(fotos.mes)'))
            ->where('fotos.categorias_id', $id)
            ->get();

        // OBS 3
        $this->layout->content = View::make('admin.empreendimentoGaleriaFotos')
                ->with('editarCategoria', $editarCategoria)
                ->with('mesEano', $mesEano)
                ->with('editarFotos', Categoria::find($id));
    }

    //retonar fotos
    public function postFotosAjax() {
        // $mesAno = Input::all();
        $mes = Input::get('mes');
        $id = Input::get('categorias_id');

        if(Request::ajax()){

            $FotosMesAno = DB::table('fotos')
            ->select('mes', 'ano', 'imagem')
            ->where('mes', '=', $mes) // Tem que ser um MES.
            ->where('categorias_id', '=', $id, 'AND') // Tem que ser um ID DO EMPREENDIMENTO.
            ->get();

            return Response::json($FotosMesAno);

        }
    }

    // Gravar os dados do Empreendimento
    public function postEditar() {
        $dados = Input::all();
        $categoria = Input::get('categorias_id');

        $dadosDados = Dado::find(Input::get('id'));
        $dadosDados->descricao = Input::get('descricao');
        $dadosDados->video = Input::get('video');
        $dadosDados->categorias_id = $categoria;
        $dadosDados->save();

        Session::flash('message', 'Dados do empreendimento criado com sucesso!');
        return Redirect::to('admin/empreendimento/editar-dados-gerais/' . $categoria);
    }

    // Gravar os dados do Empreendimento
    public function postEditarAcompanhe() {
        $dados = Input::all();
        $categoria = Input::get('categorias_id');

        $dadosDados = Construindo::find(Input::get('id'));
        $dadosDados->descricao = Input::get('descricao');
        $dadosDados->categorias_id = $categoria;
        $dadosDados->save();

        Session::flash('message', 'Dados do empreendimento criado com sucesso!');
        return Redirect::to('admin/empreendimento/editar-acompanhe-obra/' . $categoria);
    }

    // Gravar os dados da Acompanhe a Obra
    public function postEditarObras() {
        $obras = Obra::find(Input::get('id'));

        $categoria = Input::get('categorias_id');

        $dados = Input::all();
        unset($dados['id']);

        $obras->fill($dados);
        $obras->save();

        Session::flash('message', 'Dados do Acompanhe a Obra alterado com sucesso!');
        return Redirect::to('admin/empreendimento/editar-acompanhe-obra/' . $categoria);
        ;
    }

    // Salvar fotos
    public function postGaleria() {

        $categoria = Input::get('categorias_id');
        $mes = Input::get('mes');
        $ano = Input::get('ano');
        $imagens = Input::file('file');

        if (isset($imagens) && sizeof($imagens)) {

            foreach ($imagens as $image) {

                $categoria = Input::get('categorias_id');
                $mes = Input::get('mes');
                $imageNome = $image->getClientOriginalName();

                $pasta = public_path() . '/assets/empreendimentos/fotos/';
                $upload_success = Image::make($image->getRealPath())
                        ->resize(600, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })
                        ->save(public_path() . '/assets/empreendimentos/fotos/' . $ano . '_' . $mes . '_' . $categoria . '_' . $imageNome);

                if ($upload_success) {

                    $dataFormatada = $ano.'-'.$mes.'-'.date('d');

                    $img = new Foto();
                    $img->categorias_id = $categoria;
                    $img->mes = $dataFormatada;
                    $img->imagem = '/assets/empreendimentos/fotos/' . $ano . '_' . $mes . '_' . $categoria . '_' . $imageNome;
                    $img->save();

                    Session::flash('message', 'As fotos foram salvas com sucesso.');
                } else {
                    Session::flash('message', 'Erro ao cadastrar as fotos!');
                }
            }
            return Redirect::to('admin/empreendimento/editar-galeria-de-fotos/' . $categoria);
        }
    }

    // route = empreendimento/criar-empreendimento
    public function postCriarEmpreendimento() {
        // validate
        $rules = array(
            'name' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        $file = Input::file('imagem'); // Pega o arquivo que vem do formulario
        $filename = $file->getClientOriginalName(); // Pega o nome do arquivo.
        // FunÃ§Ã£o para Resize da imagem e salvar na pasta correta.
        Image::make($file->getRealPath())
                ->resize(200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/assets/empreendimentos/capas/' . $filename);

        // processe o inÃ­cio de uma sessÃ£o
        if ($validator->fails()) {
            return Redirect::to('admin/empreendimento')
                            ->withErrors($validator);
        } else {
            // Criar
            $empreendimento = new Categoria();
            $empreendimento->name = Input::get('name');
            $empreendimento->imagem = '/assets/empreendimentos/capas/' . $filename;
            $empreendimento->save();

            $idCategoria = $empreendimento->id;

            // Grava as informações na tabela Obras com os valor 0, e grava com o $idCategoria.
            $dadosObras = array(
                'obras.projetos' => 0,
                'obras.servicos_inicias' => 0,
                'obras.fundacoes' => 0,
                'obras.estrutura' => 0,
                'obras.alvenaria' => 0,
                'obras.instalacoe_eletricas' => 0,
                'obras.instalacoes_hidrossanitarias' => 0,
                'obras.pavimentacao' => 0,
                'obras.revestimentos' => 0,
                'obras.cobertura_e_forros' => 0,
                'obras.esquadrias' => 0,
                'obras.pintura' => 0,
                'obras.acabamento' => 0,
                'obras.andamento_geral_da_obra' => 0,
                'obras.categorias_id' => $idCategoria
            );
            Obra::create($dadosObras);

            // Grava as informações na tabela Dados com algum valor e com o $idCategoria
            $dadosDados = array(
                'dados.descricao' => 'Seu Descrição aqui',
                'dados.video' => 'Seu video aqui',
                'dados.categorias_id' => $idCategoria
            );
            Dado::create($dadosDados);

            // Grava as informações na tabela Construindo com algum valor e com o $idCategoria
            $dadosConstruindo = array(
                'construindo_com_qualidade.descricao' => 'Seu Descrição aqui',
                'construindo_com_qualidade.categorias_id' => $idCategoria
            );
            Construindo::create($dadosConstruindo);

            // redirect
            Session::flash('message', 'Empreendimento criado com sucesso!');
            return Redirect::to('admin/empreendimento/editar-dados-gerais/' . $idCategoria);
        }
    }

    // route = empreendimento/dados-empreendimento
    public function getDadosEmpreendimento($id) {
        $this->layout->content = View::make('admin.empreendimentoDadosGerais')
                ->with('empreendimentos', Categoria::find($id));
    }

    // route = empreendimento/dados-empreendimento
    public function postDadosEmpreendimento() {

        $categoria = Input::get('categoria');

        $file = Input::file('imagem'); // Pega o arquivo que vem do formulario
        $filename = $file->getClientOriginalName(); // Pega o nome do arquivo.
        // FunÃ§Ã£o para Resize da imagem e salvar na pasta correta.
        Image::make($file->getRealPath())
                ->resize(500, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path() . '/assets/empreendimentos/destaque/' . $categoria . '_' . $filename);
        // Criar
        $empreendimento = new Dado();
        $empreendimento->nome = Input::get('nome');
        $empreendimento->descricao = Input::get('descricao');
        $empreendimento->imagem = '/assets/empreendimentos/destaque/' . $categoria . '_' . $filename;
        $empreendimento->video = Input::get('video');
        $empreendimento->categorias_id = $categoria;
        $empreendimento->save();

        // redirect
        Session::flash('message', 'Dados do Empreendimento salvo com sucesso!');
        return Redirect::to('admin/empreendimento/dados-empreendimento/' . $categoria);
    }

}
