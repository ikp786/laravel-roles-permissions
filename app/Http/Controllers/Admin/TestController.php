<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct() {        
        $this->middleware('permission:create', ['only' => ['create']]);
		$this->middleware('permission:edit',   ['only' => ['edit']]);
		$this->middleware('permission:index',  ['only' => ['index']]);
		$this->middleware('permission:update', ['only' => ['update']]);
		$this->middleware('permission:destroy',['only' => ['destroy']]);
    }

    public function dashboard()
    {
        
    }

    public function create()
    {
        echo 'create';
    }

    public function edit()
    {
        echo 'edit';
    }

    public function index()
    {
        echo 'index';
    }

    public function update()
    {
        echo 'update';
    }

    public function destroy()
    {
        echo 'destroy';
    }
}
