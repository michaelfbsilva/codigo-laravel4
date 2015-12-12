<?php

class SiteContatoController extends BaseController {

    protected $layout = 'site.template.layoutInterna';

    // route = site/contato
    public function contato() {

        $this->layout->content = View::make('site.contato');
    }

    public function postContato() {
        
        $rules = array(
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'assunto' => 'required',
            'tipo' => 'required',
            'texto' => 'required'
        );

        $validation = Validator::make(Input::all(), $rules);

        $data = array();
        $data['nome'] = Input::get("nome");
        $data['email'] = Input::get("email");
        $data['telefone'] = Input::get("telefone");
        $data['assunto'] = Input::get("assunto");
        $data['tipo'] = Input::get("tipo");
        $data['texto'] = Input::get("texto");

        if ($validation->passes()) {
            Mail::send('emails.contato', $data, function($message) {
                $message->from(Input::get('email'), Input::get('nome'));
                $message->to('proediconstrutora@gmail.com')
                        ->cc(Input::get("email"))
                        ->subject('Contato pelo site - ' . Input::get("assunto"));
            });

            return Redirect::to('/contato')->with('message', 'Mensagem enviada com sucesso!');
        }

        return Redirect::to('/contato')
                        ->withInput()
                        ->withErrors($validation)
                        ->with('message', 'Erro! Preencha todos os campos corretamente.');
    }

}
