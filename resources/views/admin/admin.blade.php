@php($title = "管理")
@extends('layout.admin')
@section('content')
@section('title', $title)
	
	<div class="d-flex justify-content-center text-white">
		<a class="btn btn-success btn-sm" href="{{ url("/controller/admin") }}">登入資訊</a> &nbsp;
		<a class="btn btn-light btn-sm" href="{{ url("/controller/admin/user-list") }}">管理使用者</a>	
	</div>	
	<div class="mt-1" style="width: 500px; margin: 0 auto">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<td class="bg-primary text-white text-center" colspan="2">登入資訊</td>
				</tr>
			</thead>
			<tr>
				<td>姓名</td>
				<td>{{ $user->user_name }}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{ $user->user_email }}</td>
			</tr>
			<tr>
				<td>註冊時間</td>
				<td>{{ $user->created_at }}</td>
			</tr>
		</table>
	</div>
@endsection