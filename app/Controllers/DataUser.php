<?php namespace App\Controllers;

class DataUser extends BaseController
{
	public function index()
	{
		$data=[
			'title'=>'Data User',
			'isi'=> 'Datauser/v_tabel',
		];

		echo view ('layout/v_wrapper',$data);
	}

	//--------------------------------------------------------------------

}
