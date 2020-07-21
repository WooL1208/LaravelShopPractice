@php($title = "使用者清單")
@extends('layout.admin')
@section('content')
@section('title', $title)
@php
	$edit = "";
	if(request()->has("edit")) {
		$edit = key(request()->input("edit"));
	}
@endphp
	<div class="d-flex justify-content-center text-white">
		<a class="btn btn-light btn-sm" href="{{ url("/controller/admin") }}">登入資訊</a> &nbsp;
		<a class="btn btn-success btn-sm" href="{{ url("/controller/admin/user_list") }}">管理使用者</a>	
	</div>	
	<div class="mt-1" style="width: 1200px; margin: 0 auto; margin-top: 5px">
		<form method="post">
		{{csrf_field()}}
		<table class="table table-bordered table-hover" style="width: 1000px; margin: 0 auto">
			<tr>
				<td colspan="6">
					<select>
						<option value="">請選擇</option>
						<option value="A">管理者</option>
						<option value="G">一般使用者</option>
					</select>
					<input type="submit" class="btn btn-success btn-sm" value="設定">
					<input type="submit" class="btn btn-success btn-sm" name="multi_delete" value="勾選刪除">
				</td>
			</tr>
			<tr class="bg-primary text-white text-center">
				<td>選</td>
				<td>功能</td>
				<td>身份</td>
				<td>姓名</td>
				<td>email</td>
				<td>註冊時間</td>
			</tr>

			@foreach($user as $key=>$value)
				<tr>
					<td><input type="checkbox" name="select[]" value="{{$value->id}}"></td>
					@if($edit == $value->id)
					<td>
						<input type="submit" class="btn btn-success" name="save[{{$value->id}}]" value="存">
						<input type="submit" class="btn btn-danger" value="消">
					</td>
					@else
						<td>
							<input type="submit" class="btn btn-danger" name="edit[{{$value->id}}]" value="編">
							<input type="submit" class="btn btn-success" name="delete[{{$value->id}}]" value="刪">
						</td>
					@endif
					<td> {{$value->user_type}} </td>
					@if($edit == $value->id)
						<td> <input type="text" name="edit_user_name" value="{{$value->user_name}}"> </td>
					@else
						<td>{{$value->user_name}}</td>
					@endif
					<td> {{$value->user_email}} </td>
					<td> {{$value->created_at}} </td>
				</tr>
			@endforeach
		</table>
		</form>
		<div class="text-center">
			{{$user->links("vendor.pagination.bootstrap-4")}}
		</div>
	</div>
@endsection