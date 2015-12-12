<?php

class QuemsomosController extends BaseController {

    protected $layout = 'admin.template.layout';

    // route = quemsomos/
    public function getIndex() {

        $this->layout->content = View::make('admin.quemsomos')
                ->with('quemsomos', Quemsomo::find(1));
    }

    // route = quemsomos/
    public function postIndex() {
        $quemsomos = Quemsomo::find(Input::get('id'));

        if (!$quemsomos) {
            Session::flash('message', 'Não foi possivel alterar o quem somos!');
            return Redirect::to('admin/quemsomos');
        }

        $dados = Input::all();
        unset($dados['id']);

        $quemsomos->fill($dados);
        $quemsomos->save();

        Session::flash('message', 'Quem somos alterado com sucesso!');
        return Redirect::to('admin/quemsomos');
        ;
    }

}
