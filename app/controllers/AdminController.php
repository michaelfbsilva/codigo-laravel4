<?php

class AdminController extends BaseController {

    protected $layout = 'admin.template.layout';

    public function getIndex() {
        
        $contarEmpreendimento = Categoria::all()->count();
        $contarCorretores = DB::table('users')->where('user_level', 'corretor')->count();
        $contarFuncionarios = DB::table('users')->where('user_level', 'funcionario')->count();
        $contarArquivos = DB::table('arquivos')->count();
        
//        dd($contarCorretores);

        $this->layout->content = View::make('admin.index')
                ->with('contarEmpreendimento', $contarEmpreendimento)
                ->with('contarCorretores', $contarCorretores)
                ->with('contarFuncionarios', $contarFuncionarios)
                ->with('contarArquivos', $contarArquivos);
    }

}
