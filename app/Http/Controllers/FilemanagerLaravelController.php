<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Pqb\FilemanagerLaravel\FilemanagerLaravel;

class FilemanagerLaravelController extends Controller {
	public function __construct(){
		 $this->middleware('auth');
		
	}
	public function getShow()
	{
		return view('back.index');
	}
	public function getConnectors()
	{
		$f = FilemanagerLaravel::Filemanager();
		$f->run();
	}
	public function postConnectors()
	{
		$f = FilemanagerLaravel::Filemanager();
		$f->run();
	}

  //public function filemanager()
	//{
		
		
	//	return view('back.index');
	//}

}