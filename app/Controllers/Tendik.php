<?php namespace App\Controllers;

class Tendik extends BaseController
{
	public function index()
	{
		$data=[
			'title'=>'Tendik',
			'isi'=> 'Tendik/v_tabel',
		];

		echo view ('layout/v_wrapper',$data);
	}


	public function edit()
	{

	$data=[
		'title'=>'Edit',
		'isi'=> 'tendik/v_edit',
		
	];

	echo view ('layout/v_wrapper',$data);
	}
	//--------------------------------------------------------------------

}
