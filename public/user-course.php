<?php include 'template/header.php'; ?>

	<section class="user-courses pt-4 pb-3 mt-5">
		<div class="container">
			<div class="row p-0 m-0">
				<div class="col-md-6 pt-md-2">
					<h3 class="text-left">Khóa học của tôi</h3>
				</div>
				<div class="col-md-6 mt-0">
					<select class="custom-select mb-2 mr-sm-2 mb-sm-0 float-md-right" id="inlineFormCustomSelect" >
					    <option selected>Bộ lọc</option>
					    <?php foreach($categories as $value): ?>
					    <option value="<?php echo $value['category_slug']?>"><?php echo $value['category_name'] ?></option>
						<?php endforeach;?>
					    
					  </select>
					<!-- <div class="dropdown hide float-md-right">
					  <a class="btn btn-secondary dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <i class="fa fa-filter"></i> Bộ lọc
					  </a>

					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					  	
					  </div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	
	<section class="list-courses user-courses history-payment p-5">
		<div class="container">
	     	<div class="row">
	     		<?php foreach($course as $value) : ?>
	           	<div class="mb-5 col-md-6 col-lg-4 filter web" data-category="<?php echo $value['category_slug'];?>">
					<a href="<?php echo ($value['active'] == 1) ? 'content-course/'.$value['course_slug'] : 'activation' ;?>">
		            	<div class="card" >
		            		<div class="box-img">
		            			<div class="hover-background text-center">
		            				<i class="fa fa-4x fa-play-circle-o"></i>
		            				<p class="mt-2">Xem trước khóa học</p>
		            			</div>
		            			<img src="public/images/<?php echo $value['course_gallery']; ?>" class="img-fluid">
		            		</div>
						  	<div class="card-block">
						   	 	<h4 class="card-title"><?php echo $value['course_name']; ?></h4>
						    	<p class="card-text p-0 mb-2"><?php echo $value['author_name']; ?></p>
						    	<div class="p-0 pull-left">
						    		<i class="fa fa-star"></i>
							    	<i class="fa fa-star"></i>
							    	<i class="fa fa-star"></i>
							    	<i class="fa fa-star"></i>
							    	<i class="fa fa-star"></i>
						    	</div>
						    	<div class="clearfix"></div>
						  	</div>
						</div>
					</a>
	            </div> <!-- course -->
	        	<?php endforeach; ?>
	        </div>
	    </div>
	</section>
	<script>
		//Filter News
		$('select#inlineFormCustomSelect').change(function() {
			var filter = $(this).val();
			filterList(filter);
		});

		//News filter function
		function filterList(value) {
			var item = $(".row .filter");
			$(item).fadeOut("fast");
			if (value == "All") {
				$(".row").find(".filter").each(function () {
					$(this).delay(100).fadeIn("fast");
				});
			} else {
				//Notice this *=" <- This means that if the data-category contains multiple options, it will find them
				//Ex: data-category="Cat1, Cat2"
				$(".row").find(".filter[data-category*=" + value + "]").each(function () {
					$(this).delay(100).fadeIn("fast");
				});
			}
		}
	</script>
<?php include 'template/footer.php'; ?>