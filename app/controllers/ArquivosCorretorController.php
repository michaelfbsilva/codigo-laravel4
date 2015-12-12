<?php

class ArquivosCorretorController extends BaseController {

    protected $layout = 'admin.template.layout';

    public function getIndex() {

        $this->layout->content = View::make('admin.arquivosCorretor')
                ->with('arquivos', Arquivo::all());
    }

}
