<?php

class SiteQuemsomosController extends BaseController {

    protected $layout = 'site.template.layoutInterna';

    // route = site/quemsomos
    public function showPrincipal() {
        
        $quemsomos = Quemsomo::find(1);

        $this->layout->content = View::make('site.quemsomos')
                ->with('quemsomos', $quemsomos);
    }

}
