@extends('layout.layout')

@section('content')
	 
		{{ 
		 	Datatable::table()
    		->addColumn('id','first_name')       // these are the column headings to be shown
    		->setUrl(URL::to('/api/user/all'))   // this is the route where data will be retrieved
    		->render() 
		}}

@stop
