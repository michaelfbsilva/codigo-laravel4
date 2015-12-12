<?php

class CorretoresController extends BaseController {

    protected $layout = 'admin.template.layout';

    public function getIndex() {
        
        $corretores = DB::table('users')->where('user_level', 'corretor')->get();
        
//        dd($corretores);

        $this->layout->content = View::make('admin.corretores')
                ->with('corretores', $corretores);
    }

    // route = corretores/cadastro-corretores
    public function postCadastroCorretores() {

        $funcionarios = Input::all();

        if ($funcionarios) {
            $funcionarios = new User;
            $funcionarios->name = Input::get('name');
            $funcionarios->creci = Input::get('creci');
            $funcionarios->email = Input::get('email');
            $funcionarios->telefone = Input::get('telefone');
            $funcionarios->user_level = Input::get('user_level');
            $funcionarios->password = Hash::make(Input::get('password'));
            $funcionarios->save();

            return Redirect::to('admin/corretores/')
                            ->with('message', 'Corretor cadastrado com sucesso!');
        }
        return Redirect::to('admin/corretores/')
                        ->with('message', 'Erro ao cadastrado o corretor!');
    }

    // route = corretores/deletar-corretores/id
    public function deleteDeletarCorretores($id) {
        $funcionarios = User::find($id);

        if ($funcionarios) {
            $funcionarios->delete();
            return Redirect::to('admin/corretores/')
                            ->with('message', 'Corretor deletada com sucesso.');
        }

        return Redirect::to('admin/corretores/')
                        ->with('message', 'Erro ao deletar a corretor, tente novamente.');
    }

}
