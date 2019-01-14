@include('header')
<div class="container">
	<h1>Thêm cán bộ giảng viên</h1>
	<form method="post" action="{{route('Add')}}">
		{{ csrf_field() }}
		<table class = "table-add">
			<tr>
				<td>
					<p>Họ tên: </p>
					<input type="text" name="hoTen">
				</td>
				<td>
					<div class="right">
						<p>Năm sinh: </p>
						<input type="text" name="namSinh">
					</div>
					
				</td>
				
			</tr>
			<tr>
				<td>
					<p>Quê quán: </p>
					<input type="text" name="queQuan">
				</td>
				<td>
					<div class="right">
						<p>Lương cứng: </p>
						<input type="text" name="luongCung">
					</div>
					
				</td>
			</tr>
			<tr class = "submit">
				<td rowp="2"><input class="add" type="submit" name="submit" value="Thêm"></td>
			</tr>
		</table>
		
	</form>
	
</div>
@include('footer')
