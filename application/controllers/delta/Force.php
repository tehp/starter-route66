<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Force extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Homepage for our app
     */
    public function index()
    {
        // this is the view we want shown
        $this->show(4);
    }
}