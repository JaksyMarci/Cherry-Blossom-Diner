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
        <a href="/html/"><img></a> 
        <a href="/css/">Tables</a> 
        <a href="/js/">Menu</a> 
		<form action="{{ route('logout') }}"  method="POST">
			@csrf
		<a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
		</form>
        
    </nav>
	<p class="wide-hidden">Oh wow look at you <br> with your 22/9 or above <br> aspect ratio</p>
    <div id="myImage">
        <a href="#" id="nm1"><span>1</span></a>
        <a href="#" id="nm2"><span>2</span></a>
		<a href="#" id="nm3"><span>1</span></a>
        <a href="#" id="nm4"><span>2</span></a>
		<a href="#" id="nm5"><span>1</span></a>
        <a href="#" id="nm6"><span>2</span></a>
		<a href="#" id="nm7"><span>1</span></a>
        <a href="#" id="nm8"><span>2</span></a>

		<a href="#" id="tm1"><span>2</span></a>
		<a href="#" id="tm2"><span>2</span></a>
		<a href="#" id="tm3"><span>2</span></a>
		<a href="#" id="tm4"><span>2</span></a>
    </div>
</body>
</html>