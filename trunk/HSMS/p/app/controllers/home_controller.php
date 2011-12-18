<?php
class HomeController extends AppController  {
    var $name = 'home';
    var $helpers = array('Time','Javascript');
    var $uses = array('News');
    
    function index(){
    	$this->News->recursive = 0;
		$this->set('news', $this->paginate());    		
    }   
    
}