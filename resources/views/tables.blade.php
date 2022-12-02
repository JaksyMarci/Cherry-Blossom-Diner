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
        <a href="tables/1" id="nm1"><span>1</span></a>
        <a href="tables/2" id="nm2"><span>2</span></a>
		<a href="tables/3" id="nm3"><span>3</span></a>
        <a href="tables/4" id="nm4"><span>4</span></a>
		<a href="tables/5" id="nm5"><span>5</span></a>
        <a href="tables/6" id="nm6"><span>6</span></a>
		<a href="tables/7" id="nm7"><span>7</span></a>
        <a href="tables/8" id="nm8"><span>8</span></a>

		<a href="tables/9"  id="tm1"><span>1</span></a>
		<a href="tables/10" id="tm2"><span>2</span></a>
		<a href="tables/11" id="tm3"><span>3</span></a>
		<a href="tables/12" id="tm4"><span>4</span></a>
    </div>
</body>
</html>