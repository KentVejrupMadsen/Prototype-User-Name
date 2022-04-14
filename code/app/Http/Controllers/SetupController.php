<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    class SetupController 
        extends Controller
    {
        //
        public function store( Request $req )
        {
            $array = $req->input( 'people_first_names' );

            return response($array, 200);
        }
    }

?>