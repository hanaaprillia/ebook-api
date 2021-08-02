<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103119082,
            'Name' => 'Hana Aprillia',
            'Gender' => 'Female',
            'Phone' => '0859148472170',
            'Class' => 'XII RPL 3'
        ];
    }
}
