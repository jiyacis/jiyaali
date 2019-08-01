<?php

namespace JiyaAli\HelloWorld;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    public function greet()
    {
    	echo "Hello World";
    }
}
