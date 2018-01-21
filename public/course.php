<?php include 'template/header.php'; ?>
	<section class="course pt-4 pb-3 mt-5 cart-info">
		<div class="container">
			<div class="row p-0 m-0">
				<div class="col-md-12 p-0 m-0">
					<div class="pull-left">
						<p class="text-left p-0 m-0">
			              <a href="">Trang chủ</a> 
			              <i class="fa fa-angle-right"></i> 
			              <a href="category/<?php echo $course[0]['category_slug']; ?>"><?php echo $course[0]['category_name']; ?></a> 
			              <i class="fa fa-angle-right"></i> 
			              <a href="#"><?php echo $course[0]['course_name']; ?></a>
			            </p>
			            <h4 class="pt-1 m-0 font-weight-bold"><?php echo $course[0]['course_name']; ?></h4>
					</div>
					<div class="pull-right mt-2">
						<!-- <button class="pl-3 pr-3 pt-1 pb-1">
							<i class="fa fa-facebook-official"></i>
							Chia sẻ
						</button>
						<button class="pl-3 pr-3 pt-1 pb-1">
							<i class="fa fa-thumbs-o-up"></i>
							Thích
						</button> -->
						<div class="fb-like" data-href="https://www.facebook.com/E-learning-125839081438098/" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="course list-courses p-5 history-payment">
		<div class="container">
			<div class="row mb-5">
				<div class="gallery-product mb-0 col-md-8 filter web">
					
		            			<?php echo $course[0]['video_intro']; ?>
		            		
	            </div>
				<div class="col-md-4 pl-5 pr-5 pt-5 pb-0 cart-info mt-3 mt-md-0">
					<div class="row">
						<div class="col-6">
							<span class="price mr-4 pr-2" id="gia">đ</span>
						</div>
					
						<script>
							$(function(){
								var x = <?php echo $course[0]['course_price']; ?>;
								var y = x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
								$('#gia').html(y + 'đ');
							});
						</script>
						
						<div class="col-6">
							<p class="text-right">(4.5)</p>
						</div>
					</div>
			    	<div class="clearfix"></div>
			    <div class="button-g" id="button-option">
			    	<?php if( isset($_SESSION['user']) ): ?>
				    	<a class="mt-3 mb-3 flat-btn-or text-uppercase" id="buy-course" data-toggle="modal" data-target="#cart-payment">
				    		<i class="fa fa-shopping-cart"></i>
				    		Mua khóa học
				    	</a>
				    	<!-- alert info -->
				    	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="cart-payment">
						  <div class="modal-dialog modal-sm" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						      </div>
						      <div class="modal-body text-center">
						      	Đang chuyển đến trang thanh toán
						      </div>
						      <div class="modal-footer text-center">
						      	<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
								<span class="sr-only">Loading...</span>
						      </div>
						    </div>
						  </div>
						</div>
						<!-- /alert info -->
				    	<a id="cart-course" class="mb-3 flat-btn-b pr-md-4 pr-4 pl-4 mt-2 text-uppercase" data-toggle="modal" data-target="#cart-alert">
				    		<i class="fa fa-plus"></i>
				    		Thêm vào giỏ hàng
				    	</a>
				    	<!-- alert info -->
				    	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="cart-alert">
						  <div class="modal-dialog modal-sm" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						      </div>
						      <div class="modal-body text-center">
						      </div>
						      <div class="modal-footer text-center">
						      	<a href="cart">
						      		<input  class="btn btn-primary" value="Xem giỏ hàng">
						      	</a>
						      </div>
						    </div>
						  </div>
						</div>
						<!-- /alert info -->
			   		<?php else: ?>
			    		<a class="mt-3 mb-3 flat-btn-or text-uppercase" style="padding: 10px 10px" id="login-pay" <?php echo $phone = isset($_SESSION['user']) ? 'href="payment"' : ''; ?>>
			    			Đăng nhập để mua khóa học
			    		</a>
			    	<?php endif; ?>
			    </div>
			    	<div class="text-pay mt-4 ml-md-3">
			    		<p class="pl-2">Số lượng bài giảng: 35</p>
			    		<p class="pl-2">Thời lượng video: 4h30</p>
			    	</div>
				</div>
			</div><!-- row -->

			<div class="row">
				<div class="col-md-8 pl-3 pr-3">
					<div class="cart-info">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
						  	<li class="nav-item pl-4">
						    	<a class="nav-link active" data-toggle="tab" href="#overview" role="tab">Tổng quan</a>
						  	</li>
						  	<li class="nav-item ml-5">
						    	<a class="nav-link" data-toggle="tab" href="#exercise" role="tab">File bài tập</a>
						  	</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
						  	<div class="tab-pane p-4 active" id="overview" role="tabpanel">
						  		<div class="row">
						  			<div class="col-md-2">
						  				<p class="text-center font-weight-bold">Tác giả</p>
						  				<img class="img-fluid" src="public/images/author.jpg">
						  			</div>
						  			<div class="col-md-9 offset-md-1">
						  				<p>
						  					<span class="font-weight-bold">Phát hành:</span> 25/05/2017
						  				</p>
						  				<p >
						  					<!-- Làm sao để có những bức ảnh đẹp, được nhiều 
											lượt Like và Comment của bạn bè? <br>
											Làm sao để thiết kế những sản phẩm độc đáo, 
											thể hiện cá tính của bạn? <br>
											Hay chỉ đơn thuần là làm sao để có những 
											banner, poster hỗ trợ đắc lực cho công việc 
											của bạn? <br>
											Bạn muốn tự mình làm được tất cả những 
											điều trên? <br>
											Khóa học "Photoshop CC 2015" sẽ giúp bạn 
											những kỹ năng, thao tác cần thiết nhất để làm ... <br>
											Bạn sẽ được: <br>
											- Hướng dẫn cụ thể, step by step <br>
											- Học ít - vận dụng được nhiều. <br>
											- Cung cấp đầy đủ ví dụ để học - Thực hành ngay -->
											<?php echo $course[0]['course_describe']; ?>
						  				</p>
						  				<!-- <div class="row">
					                        <div class="col-md-12 detail-bg">
					                          <p class="text-center align-center pt-3"><a href="#" >Xem chi tiết</a></p>
					                        </div>
				                      	</div> -->
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-pane p-5" id="exercise" role="tabpanel">
						  		<div class="row">
						  			<div class="col-md-7">
						  				<p>
						  					Tất cả các file đính kèm chỉ dành
											cho thành viên đã mua khóa học.
						  				</p>
						  				<p>
						  					<i class="fa fa-lock"></i>
						  					Ex_File PhotoshopCC 2015.zip (15.9MB)
						  				</p>
						  			</div>
						  			<div class="col-md-5 text-center">
						  				<i class="fa fa-5x fa-download"></i>
						  			</div>
						  		</div>
						  	</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 cart-info mt-3 mt-md-0 pb">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
					  	<li class="nav-item">
					    	<a class="nav-link active" data-toggle="tab" href="#el_content" role="tab">Nội dung</a>
					  	</li>
					  	<li class="nav-item ml-5">
					    	<a class="nav-link" data-toggle="tab" href="#el_note" role="tab">Ghi chú</a>
					  	</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					  	<div class="tab-pane pl-2 pt-3 active" id="el_content" role="tabpanel">
					  		<div class="row">
					  			<div class="col-md-12">
					  				<form method="POST">
						                <div class="form-group pt-4 pb-4 el-bk-b">
						                  <input type="text" class="form-control el-bk-btn" name="" value="" placeholder="Tìm kiếm cho khóa học này..." id="inputSearch">
						                  <i class="fa fa-search fa-lg" aria-hidden="true"></i>

						                </div>
						            </form>
						            <script>
						            	$(function(){
						            		$("#inputSearch").on('keyup', function(){
						            			var value = $(this).val().toLowerCase();
						            			$('.el_box_content_exercise').filter(function(){
						            				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
						            			});
						            		});
						            	})
						            </script>
					  				<?php if(isset($infoCourse)) : ?>
						  				<?php
						            	$check_array = array();
					            		foreach ($infoCourse as $key => $lession) :
					            			// save part_name to check duplicate
					            			array_push($check_array, $lession['part_name']);
							            ?>
				  						<?php 
				  						// check array[-1] and part_name duplicate
			            				if( $key - 1 >= 0 && $check_array[$key-1] == $check_array[$key]) {}
			            				else{ 
			            					echo '<p class="font-weight-bold m-0 pt-2 pb-2">'.$lession['part_name'].'</p>'; 
			            				}
			            				?>
						  				<div class="el_box_content_exercise">
						  					<p class="m-0">
							  					<i class="fa fa-lock pr-2"></i>
							  					<?php echo $lession['lession']; ?><br>
												<span class="pl-4">06:50</span>
							  				</p>
						  				</div>
						  				<?php endforeach; ?>
					  				<?php endif; ?>
					  			</div>
					  		</div>
					  	</div>
					  	
					  	<div class="tab-pane pl-2 pt-3" id="el_note" role="tabpanel">
					  		<div class="row">
					  		<form>
					  			<div class="col-md-12">
					  				<p class="font-weight-bold">
					  					Ghi chú của bạn:
					  				</p>
					  				<textarea rows="10"></textarea>
					  				<a href="" class="pull-right mt-3 mb-3 btn btn-primary mt-2 text-uppercase disabled">
							    		Lưu
							    	</a>
							    	<div class="clearfix"></div>
							    	<div class="mt-4 mb-3">
							    		<i class="fa fa-5x fa-file-text-o pull-left"></i>
							    		<span>Ghi chú sẽ được lưu vào tài
										khoản của bạn nhưng không
										thể xuất ra định dạng text,
										word, pdf, google doc...</span>
										<div class="clearfix"></div>
							    	</div>
					  			</div>
					  		</form>
					  		</div>
					  	</div>
					  	
					</div>
				</div>
			</div><!-- row -->

			<div class="row comment mt-5">
				<div class="col-md-12">
					<h2 class="mb-5">Nhận xét nổi bật</h2>
					<div class="row" id="rowComment"></div>
					<?php foreach($comment as $key => $value): ?>
					<div class="row mb-3">
						<div class="col-md-1">
							<img class="img-fluid rounded-circle" src="public/images/<?php echo $value['image']; ?>">
						</div>
						<div class="col-md-11">
							<div>
								<h6 class="font-weight-bold"><?php echo $value['user_name'];?> - <span class="color999"><?php echo $value['comment_date'];?></span></h6>
								<div class="el_box_icon_star">
									<?php 
									// CODE RANK 
									$rank = explode ( '.', (string)$value['comment_rank'] );
									for($i = 0 ; $i < $rank[0] ; $i++){
										for($j = 0 ; $j < $rank[0] ; $j++){
											echo "<i class='fa fa-star'></i>";
										}
										if(isset($rank[1]) && $rank[1] == '5')
											echo "<i class='fa fa-star-half-o'></i>";
										break;
									}
									?>	
								<?php //endfor;?>
								</div>
								<p><?php echo $value['comment_content'];?></p>
							</div>
						</div>
					
					</div>
					<?php endforeach; ?>
					
				</div>
			</div>
		</div><!-- container -->
	</section><!-- course -->

	

	<?php if(!isset($_SESSION['user'])) : ?>
		<script type="text/javascript">
			$(document).ready(function(){

				$("#login-pay").click(function(){
					$("#user-acc").click();
				});

			})
		</script>
	<?php endif; ?>
<?php include 'template/footer.php'; ?>