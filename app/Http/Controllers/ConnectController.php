<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Connect;

use App\Http\Requests;

class ConnectController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth')->only(['index']);
	}


    public function index()
    {
    	$connects = Connect::all();
    	return view('connect.index', compact('connects'));
    }

    public function store(Request $request, Connect $connect)
    {

    	$connect->create($request->all());
    	alert()->success('Your Message Has Been Revieved.', 'Thank You!');

    	return redirect()->back();
    }
}
