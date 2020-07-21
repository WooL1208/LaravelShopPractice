@php($title = "註冊")
@extends('layout.master')
@section('title', $title)
@section('content')
@if(isset($success))
<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">訊息</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        註冊成功
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

<script>
	$("#register").modal();
</script>
@endif

<form method="post">
	{{csrf_field()}}
	<div class="" style="width: 600px; margin: 0 auto; margin-top: 10px">
		<table class="table table-hover">
			<thead>
				<tr>
					<th align="center" colspan="2" class="bg-primary">會員註冊</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>帳號</td>
					<td><input type="text" name="user_account" value="{{old('user_account')}}" class="form-control"></td>
				</tr>
				<tr>
					<td>密碼</td>
					<td><input type="text" name="user_pw" class="form-control"></td>
				</tr>
				<tr>
					<td>確認密碼</td>
					<td><input type="text" name="user_repw" class="form-control"></td>
				</tr>
				<tr>
					<td>姓名</td>
					<td><input type="text" name="user_name" value="{{old('user_name')}}" class="form-control"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="user_email" value="{{old('user_email')}}" class="form-control"></td>
				</tr>
				<tr>
					<td>帳號類型</td>
					<td>
						<select class="form-control" name="user_type">
							<option value="G" selected>一般使用者</option>
							<option value="A">管理員</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" class="btn btn-success" name="register" value="註冊">
					</td>
				</tr>	
			</tbody>
		</table>
	</div>
</form>
	
@endsection