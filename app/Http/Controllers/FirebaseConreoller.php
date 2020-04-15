<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://nong-suk-jai-healthlogs.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $ref = $database->getReference("posts");
        
        $posts  = $ref->getValue();

        foreach ($posts as $post){
            $all_post[] = $post;
        }
        echo("test");
        return json_encode($posts);

    }

}
