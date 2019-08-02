<?php

namespace JiyaAli\HelloWorld;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HelloWorldController extends Controller
{
	// data insert n get from db greet
	public function dbGreet()
	{
		DB::table('hws')->insert( ['hw' => 'Hello World'] );

		$hw = DB::table('hws')->select('hw')->first();

		return view('helloworld::dbGreet', compact('hw'));
	}

	// plaine greet
    public function greet()
    {
    	$greet = "Hello World";
    	return view('helloworld::greet', compact('greet'));
    }
}
