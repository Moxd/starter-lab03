<?php

/**
 * Page for profile/quote for first character in data.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {
    //put your code here
    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // Grab data for the first quote.
        $source = $this->quotes->first();
    
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // Grab data for quote at index 1.
        $source = $this->quotes->get(1);
        
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
    function gimme($number){
         $this->data['pagebody'] = 'justone';    // this is the view we want shown
         // Grab data for quote at index 3.
        $source = $this->quotes->get(3);
    
        $this->data = array_merge($this->data, $source);
        
        $this->render();  
    }
}

/* End of file First.php */
/* Location: application/controllers/First.php */
