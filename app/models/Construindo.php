<?php

class Construindo extends Eloquent {
    
    protected $table = 'construindo_com_qualidade';
    
    protected $guarded = array('id');
    
    public function categoria() {
        return $this->belongsTo('Categoria', 'id');
    }
    
    
}
