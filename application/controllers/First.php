<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author Andrew
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
        // build the list of authors, to pass on to our view
        $this->data = array_merge($this->data, $source);
    
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
        
        $this->render();
    }

}