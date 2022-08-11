<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test(){
        // $test=pg_connect('host=ec2-3-217-14-181.compute-1.amazonaws.com dbname=d1malnvqpjglso user=rqhwygwysxtrap password=e1168d6b77579422db10df12990317d738473990f2641e72538d51dc0731d948');
        // if($test){
        //     echo 'connect';
        // }
        try {
            // DB::connection()->getPdo();
            return 'connect';
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
    }
}
