<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
    	$title = 'Learning Laravel 5';
    	// return view('pages.index', compact('title'));
    	return view('pages.index')->with('title', $title);
    }

    public function about(){
    	$title = 'About Us';
	    return view('pages.about')->with('title', $title);	
    }

    public function services(){
    	$data = array(
    		'title' => 'Understanding',
    		'services' => ['Examples','Programming','Concepts']
    		);
	    return view('pages.services')->with($data);
    }	    
}
