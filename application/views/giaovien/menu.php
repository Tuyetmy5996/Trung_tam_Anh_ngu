<div class="row">
	<div class="col-sm-6">
		<a class="btn btn-success" href="/giaovien/themmoi"><span class="glyphicon glyphicon-plus-sign"></span> Thêm Mới</a>
		<?php if(isset($xuat_file_excel) && $xuat_file_excel): ?>
			<a class="btn btn-info" href="/giaovien/report/0">Xuất File Excel</a>
		<?php endif; ?>
		<a class="btn btn-danger" href="/giaovien"><span class="glyphicon glyphicon-remove-sign"></span> Thoát</a>
	</div>
	<div class="col-sm-6 text-right">
		<form action="/giaovien/timkiem" method="post">
			<div class="form-inline">
				<input name="search" class="form-control" placeholder="Tên Giáo Viên" type="text"/>
				<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span> Tìm Kiếm</button>
			</div>
		</form>
	</div>
</div>
<br/>