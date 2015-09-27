<?php

/**
 * Profile/Quote page for 4th character.
 * 
 * controllers/Guess.php
 *
 * ------------------------------------------------------------------------
 */
class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // Grab data for quote at index 4.
        $source = $this->quotes->get(4);
    
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
}

/* End of file Guess.php */
/* Location: application/controllers/Guess.php */