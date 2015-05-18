<?php
class UsersController extends BaseController{
	
	public function getDatatable()
    {
        return Datatable::collection(User::all(array('id','first_name')))
        ->showColumns('id', 'first_name')
        ->searchColumns('name')
        ->orderColumns('id','name')
        ->make();
    }
}

?>