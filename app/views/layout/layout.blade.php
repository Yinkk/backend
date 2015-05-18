<html>
	<head>
		<title>Test Datatable</title>
		{{ HTML::style('//cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css') }}
		{{ HTML::script('assets/js/jquery-1.11.2.js') }}
		{{ HTML::script('assets/js/jquery.dataTables.js') }}
	</head>
	<body>
		@yield('content')
	</body>
</html>