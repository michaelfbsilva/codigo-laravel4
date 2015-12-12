<?php

class RegistroCorretorController extends BaseController {

    public function getIndex() {

        return View::make('registroCorretor');
        
    }
    
    // route = registro/cadastro-corretor/
    public function postCadastroCorretor(){

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

            return Redirect::to('login')
                            ->with('message', 'Corretor cadastrado com sucesso!');
        }
        return Redirect::to('registro')
                        ->with('message', 'Erro ao cadastrado o corretor!');
        
    }

}
