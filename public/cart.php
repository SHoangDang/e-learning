<?php include 'template/header.php'; ?>
	<?php //$_SESSION['cart'] = isset($_SESSION['cart']) ? $_SESSION['cart'] : null; ?>
	<section class="history mt-5 pt-4 pb-3 mt-5 cart-info">
		<div class="container">
			<div class="row p-0 m-0">
				<div class="col-md-12 p-0 m-0">
					<h4 class="text-left p-0 m-0"><span class="font-weight-bold">Giỏ hàng</span> (<?php echo isset($_SESSION["cart_item"]) ? count( $_SESSION["cart_item"] ) : null; ?> sản phẩm)</h4>
				</div>
			</div>
		</div>
	</section>

	<section class="user p-5">
		<div class="container">
			<div class="row">
				<?php if(isset($_SESSION['user']) && isset($_SESSION['cart_item'])) : ?>
				<div class="col-md-7 pt-3 pb-3 cart-info">
					<?php $i=0; foreach($_SESSION['cart_item'] as $key => $item ): ?>
					<div class="row box-one-cart">
						<div class="col-md-4">
							<img class="img-fluid rounded" src="public/images/<?php echo $item['course_gallery']; ?>">
						</div>
						<div class="col-md-8">
							<table class="table table-responsive row">
							  	<tbody>
								    <tr>
								      <th scope="row"><?php echo $item['course_name'];  ?></th>
								      <td></td>
								      <td class="text-right">
								      	<div class="numbers-row pull-right">
											<input type="text" code-course="<?php echo $item['id_courses']; ?>" value="<?php echo $item['quantity']; ?>" id="adults" class="qty2 form-control text-center quantity-change" name="adults">
											<div class="inc button_inc"><i class="fa fa-plus"></i></div>
											<div class="dec button_inc"><i class="fa fa-minus"></i></div>
										</div>
								      </td>
								    </tr>
								    <tr>
								      	<th scope="row" class="gia" quantity="<?php echo $item['quantity']; ?>">đ</th>
								      	<td class="text-right"></td>
								      	<td class="text-right saved">
								       		<a class="delete-cart mr-3" id-course="<?php echo $item['id_courses']; ?>" title="">Xóa</a>
								      		<a href="" title="">Để dành mua sau</a>
								      	</td>
								    </tr>
							  	</tbody>
							</table>
						</div>
					</div>
					<?php 
						echo "<script>
								$(function(){
									var x = ".$item['course_price'].";
									var y = x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
									$('.gia:eq(".$i.")').html(y + '<sup>đ</sup>');
								});
							</script>";
					?>
					<?php $i = $i +1; endforeach; ?>
				</div>
				
				<div class="col-md-4 offset-md-1">
					<div class="row cart-info cart-total">
						<div class="col-12">
							<table class="table table-responsive">
							  	<tbody>
								    <tr>
								      <th scope="row">Tạm tính:</th>
								      <td></td>
								      <td class="text-right" id="tamtinh">
								     	
								      </td>
								    </tr>
								    <tr>
								      <th scope="row">Thành tiền</th>
								      <td></td>
								       <td class="text-right" id="thanhtien">
								      	<span class="font-weight-bold">
								      		đ
								      	</span><br>
								      	<span>(đã bao gồm VAT)</span>
								      </td>
								    </tr>
							  	</tbody>
							</table>
						</div>
						
						<script>
							$(function(){
								var c = <?php echo isset($_SESSION['total_price']) ? $_SESSION['total_price'] : null ; ?>;
								var d = c.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
								$('#tamtinh').html(d + ' đ');
								$('#thanhtien span:eq(0)').html(d + ' đ');
							});
						</script>
						
					</div>
					<div class="row cart-btn-box">
						<div class="col-12 cart-btn-or">
							<a href="payment-action" id="pay-course" class="flat-btn-or mt-5 text-center" data-toggle="modal" data-target="#all-payment">Tiến hành thanh toán</a>
						</div>
					</div>
					<!-- alert info -->
			    	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="all-payment">
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
				</div>
				<?php else :  ?>
					<div class="col-md-12 pt-5 pb-5 mt-3 mb-3 cart-info">Không có khóa học </div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$('.inc').click(function(){
				var quantity = $(this).prev().val(Number($(this).prev().val()) + 1);
				$(this).prev().val(quantity[0].value);
			})

			$('.dec').click(function(){
				
				if($(this).prev().prev().val() > 0){
					var quantity = $(this).prev().prev().val(Number($(this).prev().prev().val()) -1 );
					$(this).prev().prev().val(quantity[0].value);
				}
			})

			// delete cart
			$('.delete-cart').click(function(){
				var total = $('#thanhtien span:first-child').html();
				total = total.slice(0, total.length-1).trim();
				total = total.replace(/\./g, "").trim();
				
				var price = $(this).parent().prev().prev()[0]['innerText'];
				price = price.slice(0, price.length-1).trim();
				price = price.replace(/\./g, "").trim();

				var quantity = $(this).parent().prev().prev().attr('quantity');
				
				var element = $(this);
				var id_course = $(this).attr('id-course');
				$.ajax({
                    type: "POST",
                    url: "controller/MainController.php",
                    data: { 
                        // note: ajax pass param to method of class Controller
                        name_controller : "MainController",
                        method : "remove_cart",
                        id_course : id_course
                    },
                    success : function (response){
                    	
                    	element.closest( ".box-one-cart").remove();
                    	var total_end = Number(total) - Number(price)*Number(quantity);
                    	// $('#thanhtien span:first-child, #tamtinh').html(Number(total) - Number(price) + ' đ');
						total_end = total_end.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
						$('#thanhtien span:first-child, #tamtinh').html(total_end + ' đ');

                        if($('.box-one-cart').length == 0){
                    		location.reload();
                    	}
                    }
                })
			})

			// update cart
			$('.quantity-change').change(function(){
				var element = $(this);
				var id_course = $(this).attr('code-course');
				alert($(this).val());
				$.ajax({
                    type: "POST",
                    url: "controller/MainController.php",
                    data: { 
                        // note: ajax pass param to method of class Controller
                        name_controller : "MainController",
                        method : "update_cart",
                        id_course : id_course,
                        quantity : $(this).val()
                    },
                    success : function (response){
                    	//alert(response.alert);
                        // console.log(response.quantity);
                        //alert('Đã thêm vào giỏ hàng');
                        //window.location.assign("");
                        element.val(response.quantity);
                        element.attr('value',response.quantity);
                    }
                })
			})

			$('#pay-course').click(function(){
				$.ajax({
                    type: "POST",
                    url: "controller/MainController.php",
                    data: { 
                        // note: ajax pass param to method of class Controller
                        name_controller : "MainController",
                        method : "paypal_total"
                    },
                    success : function (response){
                    	console.log(response);
                    	// window.open(response.link,'','width=710,height=555,left=160,top=170');
                    	location.assign(response.link);
                    }
                })
			})
		})
	</script>
	
<?php include 'template/footer.php'; ?>