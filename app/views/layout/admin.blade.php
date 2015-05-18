{{HTML::style('//cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css')}}
{{HTML::script('assets/js/jquery-1.11.2.js')}}
{{HTML::script('//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js')}}

 {{ Datatable::table()
    ->addColumn('id','Name')       // these are the column headings to be shown
    ->setUrl(route('api.users'))   // this is the route where data will be retrieved
    ->render() 
}}