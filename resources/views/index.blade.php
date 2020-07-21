@php($title = "首頁")
@extends('layout.master')
@section('title', $title)
@section('content')
	<div class="row">
		<div class="col-12 px-0">
			
		</div>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="http://fakeimg.pl/1100x400/00CED1/FFF/?text=img+placeholder">
		    </div>
		    <div class="carousel-item">
		      <img src="http://fakeimg.pl/1100x400/00CED1/FFF/?text=img+placeholder">
		    </div>
		    <div class="carousel-item">
		      <img src="http://fakeimg.pl/1100x400/00CED1/FFF/?text=img+placeholder">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<div class="row">
		<div class="col-9">

		</div>
		<div class="col-3">
			<div id="sidebar">
				<div class="list" style="background:#CCC; border-radius: 10px;">
					<div class="list_title text-center bg-secondary rounded-pill text-white">最新商品</div>
					<div class="list_content"></div>
				</div>
			</div>
		</div>
	</div>
@endsection