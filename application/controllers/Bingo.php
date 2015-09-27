<?php

/**
 * Profile/Quote page for fifth person.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // Grab data for quote at index 5.
        $source = $this->quotes->get(5);
    
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
    function wisdom(){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // Grab data for quote at index 6.
        $source = $this->quotes->get(6);
    
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */