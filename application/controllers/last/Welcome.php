<?php

/**
 * Page for profile/quote for last character in data.
 * 
 * controllers/last/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {
    //put your code here
    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // Grab data for last quote.
        $source = $this->quotes->last();
    
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
}

/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */