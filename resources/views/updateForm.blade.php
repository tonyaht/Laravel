@include('header')
<div class="container">
	<h1>Sửa thông tin cán bộ giảng viên</h1>
	<form method="post" action="{{route('Update')}}">
		{{ csrf_field() }}
		<table class = "table-add">
			<tr>
				<td>
					<p>ID</p>
					<input type="text" name="id" value = "<?php echo $array[0]['ID']; ?>" readonly>
					
				</td>
				<td>
					<div class="right">
						<p>Lương cứng</p>
						<input type="text" name="luongCung" value = "<?php echo $array[0]['luongCung']; ?>">
					</div>
					
				</td>
			</tr>
			<tr>
				<td>
					<p>Họ Tên</p>
					<input type="text" name="hoTen" value = "<?php echo $array[0]['hoTen']; ?>">
				</td>
				<td>
					<div class="right">
						<p>Thưởng</p>
						<input type="text" name="thuong" value = "<?php echo $array[0]['thuong']; ?>">
					</div>
					
				</td>
			</tr>
			<tr>
				<td>
					<p>Năm sinh</p>
					<input type="text" name="namSinh" value = "<?php echo $array[0]['namSinh']; ?>">
				</td>
				<td>
					<div class="right">
						<p>Phạt</p>
						<input type="text" name="phat" value = "<?php echo $array[0]['phat']; ?>">
					</div>
					
				</td>
			</tr>
			<tr>
				<td>
					<p>Quê quán</p>
					<input type="text" name="queQuan" value = "<?php echo $array[0]['queQuan']; ?>">
				</td>
				
			</tr>
			<tr class = "submit">
				<td rowp="2"><input class="add" type="submit" name="submit" value="Cập nhật"></td>
			</tr>
		</table>
		
	</form>

</div>
@include('footer')