<?php

class SlideController extends BaseController {

    protected $layout = 'admin.template.layout';

    public function getIndex() {

        $this->layout->content = View::make('admin.slide')
                ->with('dadosSlide', Slide::all());
    }
    
    //route = slide/criar-slide
    public function postCriarSlide() {

        $file = Input::file('imagem');
        $imageNome = $file->getClientOriginalName();

        $pasta = public_path() . '/assets_site/images/slider/';
        $upload_success = $file->move($pasta, $imageNome);

        if ($upload_success) {
            $img = new Slide();
            $img->foto = 'assets_site/images/slider/' . $imageNome;
            $img->link = Input::get('link');
            $img->save();

            Session::flash('message', 'Slide cadastrodo com sucesso!');
        } else {
            Session::flash('message', 'Erro ao cadastrar o slide!');
        }
        return Redirect::to('admin/slide');
    }

    // route = slide/deletar-slide/id
    public function deleteDeletarSlide($id) {
        $slide = Slide::find($id);
        $slideNome = Input::get('foto');

        if (!File::delete($slideNome)) {
            return Redirect::to('admin/slide')
                            ->with('message', 'Erro ao deletar o slide.');
        } else {
            $slide->delete();
            return Redirect::to('admin/slide')
                            ->with('message', 'Slide deletada com sucesso.');
        }
    }

}
