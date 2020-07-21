<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<title>@yield("title") - Shop Laravel</title>
</head>
<style>
	body {
		background: #FFF
		font-family: 'Raleway', sans-serif;
	}
</style>
<body>
	<div class="container">
		<div id="header">
			<div class="row bg-light justify-content-end">
				<nav class="navbar navbar-light bg-light" id="topmenu">
  					<a class="navbar-brand" href="{{url("/controller/home")}}">首頁</a>
  					<a class="navbar-brand" href="{{url("controller/admin")}}">後台管理商品</a>
  					@if (session()->has("userID"))
  						<a class="navbar-brand" href="{{url("/controller/sign-out")}}">登出</a>
					@else
						<a class="navbar-brand" href="{{url("/controller/sign-in")}}">登入</a>
  					@endif
  					<a class="navbar-brand" href="{{url("/controller/sign-up")}}">註冊</a>
				</nav>
			</div>
			<div class="row bg-light justify-content-between">
				<div class="col">
					<div id="logo"><img class="rounded-pill" src="http://fakeimg.pl/200x100/00CED1/FFF/?text=img+placeholder"></div>
				</div>
				<div class="col form-inline justify-content-end d-flex flex-nowrap">
					<input type="text" name="" id="">
					<button type="button" class="btn btn-light border-dark" >
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
						  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
						</svg>
					</button>
				</div>
			</div>
			<div class="row bg-dark rounded-pill text-white my-2 px-5">商品</div>
			<div id="content m-0">
				@if ($errors AND count($errors))
				<ul  class="alert-danger">
					@foreach ($errors->all() as $err)
					<li>{{$err}}</li>
					@endforeach
				</ul>
				@endif
				@yield('content')
			</div>
		</div>
			<div id="footer">
				<div  class="row bg-secondary rounded">
					<div class="col-4 text-center py-2">
						<img src="http://fakeimg.pl/250x100/00CED1/FFF/?text=img+placeholder"><br>
						<font class="text-white" style="font-size: 32px">網路家庭國際資訊股份有限公司 版權所有</font>
					</div>
					<div class="col-4">
						<font class="text-white" style="font-size: 32px">會員專區</font>
						<hr class="border-light">
						<ul>
							<li>訂單查詢</li>
							<li>售後服務</li>
							<li>追蹤清單</li>
							<li>會員資料</li>
						</ul>
					</div>
					<div class="col-4">
						<font class="text-white" style="font-size: 32px">購買須知</font>
						<hr class="border-light">
						<ul>
							<li>購買流程</li>
							<li>付款方式</li>
							<li>常見問題</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>		
</body>
</html>