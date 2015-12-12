<?php

class FuncionariosController extends BaseController {

    protected $layout = 'admin.template.layout';
    
    // route = funcionarios/
    public function getIndex() {
        
        $funcionarios = DB::table('users')->where('user_level', 'funcionario')->get();
        
//        dd($funcionarios);

        $this->layout->content = View::make('admin.funcionarios')
                ->with('funcionarios', $funcionarios);
    }
    
    // route = funcionarios/cadastro-funcionarios
    public function postCadastroFuncionarios() {

        $funcionarios = Input::all();

        if ($funcionarios) {
            $funcionarios = new User;
            $funcionarios->name = Input::get('name');
            $funcionarios->email = Input::get('email');
            $funcionarios->telefone = Input::get('telefone');
            $funcionarios->user_level = Input::get('user_level');
            $funcionarios->password = Hash::make(Input::get('password'));
            $funcionarios->save();

            return Redirect::to('admin/funcionarios/')
                            ->with('message', 'Usuario cadastrado com sucesso!');
        }
        return Redirect::to('admin/funcionarios/')
                        ->with('message', 'Erro ao cadastrado o usuario!');
    }

    // route = funcionarios/deletar-funcionarios/id
    public function deleteDeletarFuncionarios($id) {
        $funcionarios = User::find($id);

        if ($funcionarios) {
            $funcionarios->delete();
            return Redirect::to('admin/funcionarios/')
                            ->with('message', 'Funcionario deletada com sucesso.');
        }

        return Redirect::to('admin/funcionarios/')
                        ->with('message', 'Erro ao deletar a funcionario, tente novamente.');
    }

}
