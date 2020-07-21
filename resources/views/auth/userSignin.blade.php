@php($title = "首頁")
@extends('layout.master')
@section('title', $title)
@section('content')
<form method="post">
	{{csrf_field()}}
	<div style="width: 500px; margin: 0 auto;">
		<table class="table" align="center">
		  <tbody>
		    <tr>
		    	<td class="bg-primary text-center text-white" colspan="2">會員登入</td>
		    </tr>
		    <tr>
		    	<td>帳號</td>
		    	<td><input type="text" class="form-control" name="account"></td>
		    </tr>
		    <tr>
		    	<td>密碼</td>
		    	<td><input type="text" class="form-control" name="passwd"></td>
		    </tr>
		  </tbody>
		</table>
		<center>
			<input type="submit" class="btn btn-success" name="login" value="登入">
		</center>
	</div>
</form>
@endsection