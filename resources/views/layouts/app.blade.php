<!DOCTYPE html>
<html>
<head>
	@include('layouts/head')
</head>
<body>
	@include('layouts/header')

	@yield('main-content')

	@include('layouts/footer')
</body>
</html>