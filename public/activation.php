<?php include 'template/header.php'; ?>
	<section class="history mt-5 pt-4 pb-3 mt-5 cart-info">
		<div class="container">
			<div class="row p-0 m-0">
				<div class="col-md-12 p-0 m-0">
					<h4 class="text-left p-0 m-0"><span class="font-weight-bold">Kích hoạt khóa học</span></h4>
				</div>
			</div>
		</div>
	</section>
	<section class="user p-5 activation">
		<div class="container pb-5">
			<div class="row">
				<div id="form-active" class="col-sm-6 offset-sm-3 text-center">
					<form accept-charset="utf-8" class="mb-2">
						<?php if(!isset($_SESSION['user'])) : ?>
						<label>Đăng nhập để kích hoạt khóa học</label>
						<?php endif; ?>
						<div class="form-group text-center">
						    <label for="active-input">Các khóa học chưa kích hoạt:</label>
						    <select <?php echo isset($_SESSION['user']) ? null : 'disabled="disabled"' ; ?> id="non-active-course" name="course_name" class="form-control">
						    	<?php foreach ($getCourse as $course) : ?>
						    		<option value="<?php echo $course['id_courses']; ?>"><?php echo $course['course_name']; ?> </option>
						    	<?php endforeach; ?>
						    </select>
						</div>
						<div class="form-group text-center">
						    <label for="active-input">Nhập mã mà bạn nhận được vào bên dưới:</label>
						    <input <?php echo isset($_SESSION['user']) ? null : 'disabled="disabled"' ; ?> type="text" class="form-control" id="active-input" placeholder="vd:1a5zfhv12">
						</div>
						<input <?php echo isset($_SESSION['user']) ? null : 'disabled="disabled"' ; ?> type="button" id="active-action" class="text-uppercase flat-btn-b" name="active-btn" value="Kích hoạt" >	
					</form>
					<small class="mt-4">Lưu ý: Mỗi khoá học chỉ cần kích hoạt 1 lần duy nhất.</small>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#active-action').click(function(){
                $.ajax({
                    type: "POST",
                    url: "controller/MainController.php",
                    data: { 
                        // note: ajax pass param to method of class Controller
                        name_controller : "MainController",
                        method : "active_course",
                        id_courses : $('#non-active-course').val(),
                        active_token : $('#active-input').val()
                       
                    },
                    success : function (response){
                    	//alert(response.alert);
                        //console.log(response);
                        //alert('Đã thêm vào giỏ hàng');
                        //window.location.assign("");
                    }
                })
            });
		})
	</script>
<?php include 'template/footer.php'; ?>