<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Tables</title>
	@vite('resources/css/tables.css')
</head>
<body>
	<nav id="nav">
        <a href="/html/"><img src="../../img/user.png"></a> 
        <a href="/css/">Tables</a> 
        <a href="/js/">Menu</a> 
		<form action="{{ route('logout') }}"  method="POST">
			@csrf
		<a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
		</form>
        
    </nav>
    <div id="myImage">
        <a href="#" id="nm1"><span>1</span></a>
        <a href="#" id="nm2"><span>2</span></a>
    </div>
	@vite('resources/js/tables.js')
</body>
</html>