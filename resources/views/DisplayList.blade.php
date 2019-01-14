<script>
	function xoaSanPham(){
		var conf = confirm("Bạn có chắc muốn xoá sản phẩm này không?");
		return conf;
	}
</script>

@include('header')
<div class="container">
	<h1>Danh sách cán bộ giảng viên</h1>

	<form class="form" action="{{route('Search')}}" method="post">
		{{ csrf_field() }}
		<input type="text" name="name" placeholder="Nhập tên">
		<input type="submit" name="submit" value="Tìm kiếm">
	</form>

	<a class = "add" href="AddForm">Thêm giảng viên</a>
		
	<table class="table">
		<tr>
			<td>ID</td>
			<td>Họ tên</td>
			<td>Năm sinh</td>
			<td>Quê quán</td>
			<td>Lương Cứng</td>
			<td>Thưởng</td>
			<td>Phạt</td>
			<td>Lương Thực</td>
			<td>Sửa</td>
			<td>Xoá</td>
		</tr>
		<?php
		foreach ($array as $value) 
		{
		?>
		<tr>
			<td><?php echo $value['ID']; ?></td>
			<td><a class="hoTen" href="UpdateForm/<?php echo $value['ID']; ?>"><?php echo $value['hoTen']; ?></a></td>
			<td><?php echo $value['namSinh']; ?></td>
			<td><?php echo $value['queQuan']; ?></td>
			<td><?php echo $value['luongCung']; ?></td>
			<td><?php echo $value['thuong']; ?></td>
			<td><?php echo $value['phat']; ?></td>
			<td><?php echo $value['luongThuc']; ?></td>
			<td><a class="btn" href="UpdateForm/<?php echo $value['ID']; ?>">Sửa</a></td>
			<td><a onclick=" return xoaSanPham();" class="btn" href="Delete/<?php echo $value['ID']; ?>">Xoá</a></td>
		</tr>

		<?php 
		} 
		?>

		
	</table>
</div>
@include('footer')