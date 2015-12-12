<?php

class ArquivosController extends BaseController {

    protected $layout = 'admin.template.layout';

    public function getIndex() {

        $this->layout->content = View::make('admin.arquivos')
                ->with('arquivos', Arquivo::all());
    }

    // route = arquivos/deletar-arquivos/id
    public function deleteDeletarArquivos($id) {
        $arquivo = Arquivo::find($id);
        $arquivoNome = Input::get('arquivos');

        if (!File::delete($arquivoNome)) {
            return Redirect::to('admin/arquivos')
                            ->with('message', 'Erro ao deletar o arquivo.');
        } else {
            $arquivo->delete();
            return Redirect::to('admin/arquivos')
                            ->with('message', 'Arquivo deletada com sucesso.');
        }

    }

    // route = arquivos/criar-arquivo
    public function postCriarArquivo() {

        $file = Input::file('arquivos');
        $arquivoNome = $file->getClientOriginalName();

        $pasta = public_path() . '/assets/arquivos/';
        $upload_success = $file->move($pasta, $arquivoNome);

        if ($upload_success) {
            $img = new Arquivo;
            $img->nome = Input::get('nome');
            $img->empreendimento = Input::get('empreendimento');
            $img->arquivos = 'assets/arquivos/' . $arquivoNome;
            $img->save();

            return Redirect::to('admin/arquivos/')
                            ->with('message', 'O arquivo foi cadastrado com sucesso!');
        } else {
            return Redirect::to('admin/arquivos/')
                            ->with('message', 'Erro ao cadastrar o arquivo!');
        }
    }

}
