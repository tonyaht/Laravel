<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="{{asset('css/list.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('css/add.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('css/update.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="http://localhost/CBGV/public/">TN University</a>
		    </div>

		    <ul class="nav navbar-nav navbar-right">
		    	<li><a href="http://localhost/CBGV/public/">Trang chủ</a></li>
		    	<li class="dropdown">
			      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản lý giảng viên <span class="caret"></span>
			      	</a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Xem danh sách</a></li>
			          <li><a href="AddForm">Thêm giảng viên</a></li>
			          <li><a href="#">Cập nhật giảng viên</a></li>
			          <li><a href="#">Xoá giảng viên</a></li>
			        </ul>
		    	</li>
		    	<li><a href="#">Thông báo</a></li>

		    	<li class="dropdown">
			      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hi, Hằng
			      		<img alt="" src="http://2.gravatar.com/avatar/892b16203c60ea95a21af4c7a6765739?s=26&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/892b16203c60ea95a21af4c7a6765739?s=52&amp;d=mm&amp;r=g 2x" class="avatar avatar-26 photo" height="26" width="26"><span class="caret"></span>
			      	</a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Thông tin cá nhân</a></li>
			          <li><a href="#">Đăng xuất</a></li>
			        </ul>
		    	</li>
		    </ul>
		  </div>
		</nav>
	</header>
	
	<main>
		
