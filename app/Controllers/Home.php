<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
    {
        $session = \Config\Services::session();
        $loged_in = $session->get('loged_in');

        if( ! $loged_in ){
            return view('login');
        }
        
        return view('index');
    }
}
