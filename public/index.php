<?php include 'template/header.php'; ?>

	<!-- form-register -->
        <section class="flat-row pd-80 flat-register">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 push-md-6">
                        <form action="" method="POST" id="form-register" class="form-register wow fadeInRight animated" data-wow-delay=".25s">
                            <div class="form-register-title">
                               <h3 class="register-title text-uppercase">nhận coupon free <br><i class="wrap-box ispace7"></i>ngay hôm nay!</h3>
                            </div>
                            <div class="info-register">
                                <p class="wrap-input-name">
                                    <input type="text" id="name" name="name" value="" required="required" placeholder="Họ và tên *:" data-parsley-required>
                                </p>
                                <p class="wrap-input-email">
                                    <input type="email" id="email" name="email" value="" required="required" placeholder="Email *:" data-parsley-required data-parsley-type="email">
                                </p>
                                <p class="wrap-input-phone">
                                    <input type="text" id="phone" name="phone" value="" required="required" placeholder="Số điện thoại :">
                                </p>
                                <div class="wrap-btn">
                                    <a class="flat-btn-or text-uppercase" href="#" id="email-btn">nhận mã</a>
                                </div>
                            </div> 
                        </form>
						<!-- Vertification Email -->
						<script>
							$(function(){
								$('#email-btn').click(function(){
									
									$.ajax({
										method: "POST",
										url: "controller/MainController.php",
										data: {
											name_controller: "MainController",
											method: "emailActive",
											fullname: $("#name").val(),
											email: $("#email").val(),
											phone: $("#phone").val()
										},
										success: function(res){
											//alert(res.success);
											console.log(res.success);
										}
									});
								});
							});
						</script>
                    </div><!-- col-md-5 -->
                    <div class="col-md-7 no-paddingright pull-md-6">
                        <div class="wrap-register-right wrap-box pdtopleft">
                            <div class="wrap-register-title">
                                <div class="title-top text-uppercase wow fadeInUp animated" data-wow-delay=".25s">
                                   hơn 100 khóa học miễn phí
                                </div>
                                <div class="title-register text-uppercase wow fadeInUp animated" data-wow-delay=".5s">
                                   đăng ký ngay
                                </div>
                                <div class="sub-title-register wow fadeInUp animated" data-wow-delay=".75s">
                                   Điền thông tin form để nhận mã kích hoạt hàng trăm <br>khóa học miễn phí.
                                </div>
                            </div><!-- wrap-register-title -->

                            <div id="countdown" class="countdown wow fadeInLeft animated" data-wow-delay=".25s">
                            	<div class="square">
                            		<div class="numb">00</div>
                            		<div class="text"></div>
                            	</div>
                            	<div class="square">
                            		<div class="numb">00</div>
                            		<div class="text"></div>
                            	</div>
                            	<div class="square">
                            		<div class="numb">00</div>
                            		<div class="text"></div>
                            	</div>
                            	<div class="square">
                            		<div class="numb">00</div>
                            		<div class="text"></div>
                            	</div>
                            </div><!-- CountDown -->
                       </div><!-- wrap-register-right -->
                        
                   </div><!-- col-md-7 -->
                </div>
            </div>
        </section>

	<div class="clearfix"></div>

	<section class="el-top-level pt-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 box-card mb-3">
					<div class="<?php echo $category[4]['category_slug'];?> el-thumbnail">
								<a href="category/<?php echo $category[4]['category_slug'];?>" class="box-click text-white">
									<div class="box-img">
										<div class="image-column text-center"> 
											<div class="text-details">
												<h3><?php echo $category[4]['category_name'];?></h3>
												<h4>Hơn 200 khóa học</h4>
												
												<button type="button" class="btn Preview btn-md text-white">
													<h4><i class="fa fa-play-circle-o"></i> Xem các khóa học</h4>
												</button>
												
											</div>
										</div>
									</div>
								</a>
					</div> <!-- software -->
				</div>
				<div class="col-sm-12 col-lg-6">
					<div class="row">
						<?php foreach($category as $key => $categories):?>
						<?php if($key < 4): ?>
						<div class="col-sm-6 mb-3 box-card">
							<div class="<?php echo $categories['category_slug']; ?> el-thumbnail">
								<div class="box-click text-white">
									<div class="box-img">
										<div class="image-column text-center">
											<div class="text-details">
												<h3><?php echo $categories['category_name'];?></h3>
												<h4>Hơn 300 khóa học</h4>
												<a href="category/<?php echo $categories['category_slug'];?>">
													<button type="button" class="btn Preview btn-md text-white">
														<h4><i class="fa fa-play-circle-o"></i> Xem các khóa học</h4>
													</button>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- design -->
						<?php endif; ?>
						<?php endforeach; ?>
					</div>
					
				</div>	
			</div> <!-- row -->
		</div> <!-- container -->
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col-md-4 el-feature el-time text-center">
					<i class="el-icon fa fa-3x fa-clock-o mb-3"></i>
					<div class="el-upseltext">
						<h2 class="headline font-weight-bold wow fadeInUp animated" data-wow-delay=".25s">Học nhanh chóng</h2>
						<p class="wow fadeInUp animated" data-wow-delay=".5s">Khóa học ngắn hạn, linh động thời gian</p>
					</div>
				</div>
				<div class="col-md-4 el-feature el-expert text-center">
					<i class="el-icon fa fa-3x fa-group mb-3"></i>
					<div class="el-upseltext">
						<h2 class="headline font-weight-bold wow fadeInUp animated" data-wow-delay=".25s">Học với chuyên gia</h2>
						<p class="wow fadeInUp animated" data-wow-delay=".5s">Với nhiều năm kinh nghiệm và niềm đam mê<br> giảng dạy</p>
					</div>
				</div>
				<div class="col-md-4 el-feature el-everywhere text-center">
					<i class="el-icon fa fa-3x fa-map-marker mb-3"></i>
					<div class="el-upseltext">
						<h2 class="headline font-weight-bold wow fadeInUp animated" data-wow-delay=".25s">Học mọi nơi</h2>
						<p class="wow fadeInUp animated" data-wow-delay=".5s">Trải nghiệm học tập không giới hạn ở bất kỳ đâu</p>
					</div>
				</div>
			</div> <!-- row -->
			<div class="row mt-2">
				<div class="text-center col-12 justify-content-center">
					<a id="dangkyngay" class="flat-btn-or text-uppercase">đăng ký ngay</a>
				</div>
			</div>
		</div> <!-- container -->
	</section> <!-- top-level -->

	<section class="list-courses p-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12 subtitle">
					<h1 class="text-center mb-3 font-weight-bold wow fadeInUp animated" data-wow-delay=".25s">Các khóa học hàng đầu của chúng tôi</h1>
					<div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
	     	<div class="row">
		        <div class="text-center col-12 btn-gallery wow fadeInUp animated" data-wow-delay=".5s">
		        	<button class="btn btn-default filter-button" data-filter="all">all</button>
		        <?php foreach($category as $value):?>
		        	<button class="btn btn-default filter-button" data-filter="<?php echo $value['category_name'];?>"><?php echo $value['category_name'];?></button>
		        <?php endforeach;?>
		            
		        </div>
	        	<div class="clearfix mt-3 mb-3"></div>

	        	<?php 
	        		
	        		foreach ($courses as $key => $course): 
	        		
	        	?>
	            <div class="gallery-product col-md-6 col-lg-3 filter <?php echo $course['category_name']; ?> mb-c wow fadeInLeft animated" data-wow-delay=".75s">
	            	<a href="<?php echo "course/".$course['course_slug']; ?>">

		            	<div class="card">
		            		<div class="box-img">
		            			<div class="hover-background text-center">
		            				<i class="fa fa-4x fa-play-circle-o"></i>
		            				<p class="mt-2">Xem trước khóa học</p>
		            			</div>
		            			<img src="public/images/<?php echo $course['course_gallery']; ?>" class="img-fluid">
		            		</div>
						  	<div class="box-card-block">
		            			<div class="card-block front-course">
							   	 	<h4 class="card-title"><?php echo $course['course_name']; ?></h4>
							    	<p class="card-text p-0 mb-2"><?php echo $course['author_name']; ?></p>
							    	<div class="p-0 pull-left">
							    		<i class="fa fa-star"></i>
								    	<i class="fa fa-star"></i>
								    	<i class="fa fa-star"></i>
								    	<i class="fa fa-star"></i>
								    	<i class="fa fa-star"></i>
							    	</div>
							    	<div class="pull-right price">
							    		<span></span>
							    	</div>
									<?php 
										echo "<script>
												$(function(){
													var x = ".$courses[$key]['course_price'].";
													var y = x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
													$('.price span:eq(".$key.")').html(y + '<sup>đ</sup>');
												});
											</script>";
									?>
									
									
							    	<div class="clearfix"></div>
						  		</div>  <!-- card-block -->
						  		<div class="card-block back-course">
						  			<p><?php echo $course['course_describe'] ?></p>
						  		</div>
		            		</div> <!-- box-card-block -->
						</div>
					</a>
	            </div>
	         <?php endforeach; ?> 
	            
	           
		    </div><!-- row -->
		    <div class="row">
		    	<div class="col-md-8 offset-md-2 text-center btn-group-c">
		    		<a href="category" class="flat-btn-or mt-4 text-uppercase">đăng ký ngay</a>
	            	<a href="category" class="flat-btn-b mt-4 ml-3 text-uppercase">xem thêm khóa khác</a>
		    	</div>
		    </div>

	    </div><!-- container -->
	</section><!-- list courses -->

	<section class="el-bottom-level list p-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12 subtitle">
					<h1 class="text-center mb-3 font-weight-bold">Bạn muốn học để trở thành ?</h1>
					<div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="container mt-4">
			<div class="row">
				<?php foreach($category as $key => $value): ?>
				<div class="col-sm-6 col-md-3 mb-3 box-card">
					<div class="<?php echo $value['category_slug']; ?> el-thumbnail">
						<div class="box-click text-white">
							<div class="box-img">
								<div class="image-column text-center">
									<div class="text-details">
										<h3><?php echo $value['category_name'] ?></h3>
										<a href="category/<?php echo $value['category_slug']?>">
											<button type="button" class="Preview">
												<h4 class="text-white"><i class="fa fa-history text-white"></i> 40 giờ</h4>
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach;?>
				<!-- digital -->
				
			</div> <!-- row -->
		</div> <!-- container -->
		<div class="container mt-3">
			<div class="row">
				<div class="col-md-12 text-center">
						<a href="category" class="text-center flat-btn-or mb-3">
							Xem tất cả các gói 
							<i class="fa fa-caret-down"></i>
						</a>
				</div>
			</div>
		</div>
	</section> <!-- top-level -->

	<section class="testimonial">
		<div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
		      <div class="row">
		      	<div class="col-sm-6">
		      		<img class="img-fluid" src="public/images/businessman.png" alt="First slide">
		      	</div>
		      	<div class="col-sm-6">
		      		<blockquote>
		      			<h2>"Đi làm được hơn 3 năm nhưng những kỹ năng tôi học được từ E-learning thật sự hữu ích. Tham gia các khóa học giúp tôi có những bước tiến đáng kể trong sự nghiệp của mình."</h2>
		      			<cite> —John Nguyen</cite>
		      		</blockquote>
		      	</div>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <div class="row">
		      	<div class="col-sm-6">
		      		<img class="img-fluid" src="public/images/businessman.png" alt="Second slide">
		      	</div>
		      	<div class="col-sm-6">
		      		<blockquote>
		      			<h2>"Đi làm được hơn 3 năm nhưng những kỹ năng tôi học được từ E-learning thật sự hữu ích. Tham gia các khóa học giúp tôi có những bước tiến đáng kể trong sự nghiệp của mình."</h2>
		      			<cite> —John Nguyen</cite>
		      		</blockquote>
		      	</div>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <div class="row">
		      	<div class="col-sm-6">
		      		<img class="img-fluid" src="public/images/businessman.png" alt="Third slide">
		      	</div>
		      	<div class="col-sm-6">
		      		<blockquote>
		      			<h2>"Đi làm được hơn 3 năm nhưng những kỹ năng tôi học được từ E-learning thật sự hữu ích. Tham gia các khóa học giúp tôi có những bước tiến đáng kể trong sự nghiệp của mình."</h2>
		      			<cite> —John Nguyen</cite>
		      		</blockquote>
		      	</div>
		      </div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section> <!-- testimonial -->

	<section class="p-5 list-logo">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="row">
						<div class="col-md-2">
							<img class="img-fluid" src="public/images/adobe.png">
						</div>
						<div class="col-md-2 pt-2">
							<img class="img-fluid" src="public/images/fullsail.png">
						</div>
						<div class="col-md-2 pt-4">
							<img class="img-fluid" src="public/images/patagonia.png">
						</div>
						<div class="col-md-2">
							<img class="img-fluid" src="public/images/nbc.png">
						</div>
						<div class="col-md-2">
							<img class="img-fluid" src="public/images/usc.png">
						</div>
						<div class="col-md-2 pt-1">
							<img class="img-fluid" src="public/images/usge.png">
						</div>
					</div>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- list logo -->

	<section class="p-5 subcribe text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center mb-3">Subcribe để nhận những thông tin mới nhất từ E-Learning</h2>
				</div>
			</div>
			<form method="POST">
			<div class="row">
				<div class="col-md-6 offset-md-2">
					<input class="p-2" type="text" name="emailSubcribe" placeholder="Email của bạn" id="emailSub">
				</div>
				<div class="col-md-2">
					<input class="flat-btn-b btnsub" type="button" value="Subcribe" id="emailSubBtn" data-toggle="modal" data-target="#subcribe-alert">
				</div>
			</div><!-- row -->
			<!-- alert info -->
	    	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="subcribe-alert">
			  <div class="modal-dialog modal-sm" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			      </div>
			      <div class="modal-body text-center"  style="color: #000">
			      </div>
			      <div class="modal-footer text-center">
			      	<a href="cart" class="text-center" data-dismiss="modal" aria-label="Close">
			        	<input type="submit" class="btn btn-primary" value="OK">
			        </a>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /alert info -->
			</form>
			<script>
				$(function(){

					$('#dangkyngay').click(function(){
						$("#user-acc").click();
						$('.fa-pencil').click();
						
					});

					$("#emailSubBtn").click(function(){
						emails = $('#emailSub').val();
						pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
						if(pattern.test(emails)){
							$.ajax({
								method: "POST",
								url: "controller/MainController.php",
								data: {
									name_controller: "MainController",
									method: "emailSub",
									email: emails
								},
								success: function(res){
									$('#subcribe-alert .modal-body').html(res);
									//alert(res);
								},
								error: function(error){
									$('#subcribe-alert .modal-body').html('Gửi mail thất bại!');
									//alert("Gửi mail thất bại!");
								}
							});
						}
						else
						{
							$('#subcribe-alert .modal-body').html("Vui lòng nhập đúng định dạng email !");
						}
					});
				});
			</script>
		</div><!-- container -->
	</section><!-- subcribe -->

<?php include 'template/footer.php'; ?>

<script type="text/javascript">
	$(document).ready(function(){
			// lấy dự liệu từ database và in biến ra 
			$.ajax({
			  	type: "POST",
			 	url: "controller/MainController.php",
			  	data: { 
			  		// note: ajax pass param to method of class Controller
			  		name_controller : "MainController",
			  		method : "countdown"
			  		
			  	},
              	success : function (response){
					 
              		//console.log(response);
              		//var a = JSON.parse(JSON.stringify(response));
                    //$('#test').html(a[].khoaId);
					var now = new Date().getTime();
					// alert(now);
					var countDownDate = new Date(response[0].day).getTime();
					// alert(countDownDate);
                    // vòng lặp xuất ra giá trị của mảng json
                    //response.foreach(function(object){
                    	// thêm thẻ option vào select với dữ liệu lấy từ database
					   	// $('#html_cd').append('<option value="'+object.id+'">'+object.day+'</option>');
					   	//alert(object.day);
						   
					var countDownDate = new Date(response[0].day).getTime();

					// Update the count down every 1 second
					var x = setInterval(function() {

						// Get todays date and time
						var now = new Date().getTime();
						
						// Find the distance between now an the count down date
						var distance = countDownDate - now;
						
						// Time calculations for days, hours, minutes and seconds
						var days = Math.floor(distance / (1000 * 60 * 60 * 24));
						var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
						var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
						var seconds = Math.floor((distance % (1000 * 60)) / 1000);
						
						// Output the result in an element with id="demo"
						document.getElementsByClassName("numb")[0].innerHTML = days;
						document.getElementsByClassName("numb")[1].innerHTML = hours;
						document.getElementsByClassName("numb")[2].innerHTML = minutes;
						document.getElementsByClassName("numb")[3].innerHTML = seconds;
						
						// If the count down is over, write some text 
						if (distance < 0) {
							clearInterval(x);
							document.getElementById("countdown").innerHTML = "hết hạn";
						}
					}, 1000);
					//});
                }
			})

	})
</script>