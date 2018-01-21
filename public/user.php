<?php include 'template/header.php'; ?>

	<section class="history pt-4 pb-3 mt-5">
		<div class="container">
			<div class="row p-0 m-0">
				<div class="col-md-12 p-0 m-0">
					<h3 class="text-left p-0 m-0">Thông tin cá nhân</h3>
				</div>
			</div>
		</div>
	</section>

	<section class="user p-5">
		<div class="container">
			<div class="row p-5 user-shadow">
				<div class="col-md-3 text-center">
					<img class="img-fluid rounded-circle" src="public/images/author.jpg">
				</div>
				<div class="col-md-6 offset-md-1">
					<form method="post" action="controller/MainController.php">
						<input class="p-2" type="hidden" name="action" value="update_user">
						<table class="table table-responsive">
						  	<tbody>
							    <tr>
							      <th scope="row">Họ và tên:</th>
							      <td>
							      	<input class="p-2" type="text" name="username" value="<?php echo 
							      	$_SESSION['user']['username']; ?>">
							      </td>
							    </tr>
							    <tr>
							      <th scope="row">Email:</th>
							      <td>
							      	<input class="p-2" type="text" name="email" value="<?php echo $_SESSION['user']['email']; ?>">
							      </td>
							    </tr>
							    <tr>
							      <th scope="row">Số điện thoại:</th>
							      <td>
							      	<input class="p-2" type="text" name="phone" value="<?php echo $phone = isset($_SESSION['user']['phone']) ? $_SESSION['user']['phone'] : ''; ?>">
							      </td>
							    </tr>
							    <tr>
							      <th scope="row">Mật khẩu hiện tại:</th>
							      <td>
							      	<input class="p-2" type="password" name="password" value="<?php echo $_SESSION['user']['password']; ?>">
							      </td>
							    </tr>
							    <tr>
							      <th scope="row">Mật khẩu mới:</th>
							      <td>
							      	<input class="p-2" type="password" name="new-password">
							      </td>
							    </tr>
							    <tr>
							      <th scope="row"></th>
							      <td class="text-right">
							      	<input class="pl-3 pr-3" type="submit" name="" value="Lưu thay đổi">
							      </td>
							    </tr>
						  	</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
	</section>
	
<?php include 'template/footer.php'; ?>