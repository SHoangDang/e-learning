<?php include 'template/header.php'; ?>
  
  <section class="course cart-info pt-4 pb-3 mt-5">
    <div class="container">
      <div class="row p-0 m-0">
        <div class="col-md-12 p-0 m-0">
          <div class="pull-left">
            <p class="text-left p-0 m-0">
              <a href="#">Trang chủ</a> <i class="fa fa-angle-right"></i> <a href="#">Design</a> <i class="fa fa-angle-right"></i> <a href="#">Thiết kế photoshop</a>
            </p>
            <h4 class="pt-1 m-0 font-weight-bold">Photoshop CC 2015</h4>
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

  <section class="course list-courses">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mt-4 ml-md-4 ml-3 mr-3"><!-- tab nav -->
          <div class="row cart-info mt-3 mt-md-0 pl-0 pb-3">
            <ul class="nav nav-tabs ml-3 mr-3" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#el_content" role="tab">Nội dung</a>
                </li>
                <li class="nav-item ml-5">
                  <a class="nav-link" data-toggle="tab" href="#el_note" role="tab">Ghi chú</a>
                </li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane pl-4 pr-3 pt-3 active" id="el_content" role="tabpanel">
                  <div class="row">
                    <div class="col-md-12">
                      <form>
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
                          <i class="fa fa-unlock-alt pr-2"></i>
                          <a id-video="<?php echo $lession['id_details']; ?>" class="link_video"> 
                            <?php echo $lession['lession']; ?>
                          </a>
                          <br>
                        <span class="pl-4">06:50</span>
                        </p>
                      </div>
                      <?php endforeach; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="tab-pane pl-3 pr-3 pt-3" id="el_note" role="tabpanel">
                  <div class="row">
                    <div class="col-md-12" id="father">
                      <p class="font-weight-bold">
                        Ghi chú của bạn:
                      </p>
                      <textarea rows="10" id="ghichu"></textarea>
                      <a id="save" class="pull-right mt-3 mb-3 btn btn-primary mt-2 text-uppercase">
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

                      <?php foreach($note as $key => $value): ?>
                      <div class="mt-4 mb-3">

                        <span>Ngày Ghi Chú: <?php echo $value['date_note'] ?></span><i class="fa fa-times fa-fw pull-right size" id="deleteNote"></i>
                        <p><?php echo $value['note_content'];?></p>
                        
                        <div class="clearfix"></div>
                      </div>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 p-0 mt-5">
              <a class="flat-btn-b btn-block text-center" data-toggle="modal" data-target="#modalPopup">
                <span class="pl-5 review text-uppercase">Đánh giá ngay</span>
              </a>
            </div>
          </div>
          
        </div><!-- /tab nav -->
        

        <div class="modal fade" id="modalPopup" tabindex="-1" role="dialog" aria-labelledby="modalPopupTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <div class="col-md-11 col-sm-11 col-lg-11 pull-left">
                  <h5 class="modal-title text-center">Đánh giá khóa học</h5>
                </div>
                <a class="close pull-right" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </a>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row">
                      <span>Đánh giá:</span>
                      <div class="col-md-6 col-lg-6 col-sm-6">
                        <div class="el-c-size-st">
                          <fieldset class="rating">
                          
                            <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="0.5 stars"></label>
                          </fieldset>
                        </div>
                      </div>
                  </div>
                </div>
                <form>
                    <!-- <div class="form-group mt-4">
                      <input type="text" name="" class="form-control" placeholder="Tiêu đề">
                    </div>   -->
                    <div class="form-group mt-4">
                      <textarea class="form-control" rows="7"  placeholder="Nội dung" id="comment"></textarea>
                    </div>    
                      <input type="button" class="btn btn-primary mt-2" value="Đánh giá" id="add-comment">              
                  </form>
              </div>
                
              <script>
							$(function(){
								let value = '';
							
								$('input[name=rating]').each(function(){
									$(this).click(function(){
										value = $(this).val();
									});
								});
							
								
								if(isNaN(value) && value == ''){
									alert('Vui lòng chọn ');
								}else{
									$('#add-comment').click(function(){
										$.ajax({
											method: 'POST',
											url: 'controller/MainController.php',
											data: {
												name_controller: 'MainController',
												method: 'addComment',
												content: $('#comment').val(),
												id_course: '<?php echo $course[0]['id_courses']; ?>',
												rank: value

											},
											success: function(res){
												
												// if($('#rowComment .row').length == 0){
												// 	$(res).appendTo('#rowComment');
												// }else{
												// 	$("#rowComment .row").append(res);
												// }
												// console.log('Comment thành công');
                        $('.close').click();
											}
										});
									});
								}
							});
						</script>   
            </div>
          </div>
        </div>

        <!-- course content right-->
        <div class="col-md-7 mt-4">
          <div id="video_lession" class="col-sm-12 col-12 filter skills list-courses p-0 mb-4">
            <?php echo $course[0]['video_intro']; ?>
          </div>

          <div class="container p-4 mt-4 el-background-category el-shadow rounded  list-category">
            <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Tổng quan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#profile" role="tab">File bài tập</a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-3 mt-3 p-3">
                          <p class="text-center font-weight-bold">Tác giả</p>
                          <img src="public/images/author.jpg" alt="author" class="rounded" width="100%">
                        </div>

                        <div class="col-md-9 mt-3 p-3">
                          <p class="text-left font-weight-bold pull-left mr-2 mb-0">Phát hành: </p><span>25/05/2017</span>

                          <p class="mt-3">
                            <?php echo $course[0]['course_describe']; ?>
                          </p>

                        </div>

                      </div>

                      <div class="row">
                        <div class="col-md-12 detail-bg">
                          <p class="text-center align-center pt-3"><a href="#" >Xem chi tiết</a></p>
                        </div>
                      </div>

                    </div>
                </div>
                <div class="tab-pane p-5" id="profile" role="tabpanel">
                  <div class="row">
                    <div class="col-md-7">
                      <p>
                        Tất cả các file đính kèm chỉ dành
                      cho thành viên đã mua khóa học.
                      </p>
                      <p>
                        
                        <i class="fa fa-unlock-alt"></i>
                        Ex_File PhotoshopCC 2015.zip (15.9MB)
                      </p>
                    </div>
                    <div class="col-md-5 text-center">
                      <a href="<?php echo $link[0]['link'];?>">
                        <i class="fa fa-5x fa-download"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="container p-4 mt-4 mb-4 el-background-category el-shadow rounded list-courses " >
              <div class="carousel slide" id="myCarousel" data-ride="carousel">
              <h2 class="font-weight-bold float-left">Khóa học liên quan</h2>
              <div class="slide-control float-right">
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>
              <div class="row carousel-inner">
             
                <div class="gallery_product col-12 pr-3 carousel-item active">
                  <a href="">
                    <div class="card">
                      <div class="box-img">
                        <div class="hover-background text-center">
                          <i class="fa fa-2x fa-play-circle-o"></i>
                          <p class="mt-2 preview">Xem trước</p>
                        </div>
                        <img src="public/images/dev-1.jpg" class="img-fluid">
                      </div>
                      <div class="card-block el-c-size-p">
                        <h4 class="card-title el-c-size">Learning CSS</h4>
                        <p class="card-text p-0 mb-2 el-c-size-p">Alex Theedom</p>
                        <div class="p-0 pull-left el-c-size-st">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="pull-right price">
                          <span class="font-size09rem">123.000<sup>đ</sup></span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div> <!-- item -->
                <div class="gallery_product col-12 mt-3 mt-md-0 carousel-item">
                  <a href="">
                    <div class="card">
                      <div class="box-img">
                        <div class="hover-background text-center">
                          <i class="fa fa-2x fa-play-circle-o"></i>
                          <p class="mt-2 preview">Xem trước</p>
                        </div>
                        <img src="public/images/dev-2.jpg" class="img-fluid">
                      </div>
                      <div class="card-block el-c-size-p">
                        <h4 class="card-title el-c-size">Learning C#</h4>
                        <p class="card-text p-0 mb-2 el-c-size-p">Alex Theedom</p>
                        <div class="p-0 pull-left el-c-size-st">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="pull-right price">
                          <span class="font-size09rem">555.000<sup>đ</sup></span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div> <!-- item -->

                <div class="gallery_product col-12 mt-3 mt-md-0 carousel-item">
                  <a href="">
                    <div class="card">
                      <div class="box-img">
                        <div class="hover-background text-center">
                          <i class="fa fa-2x fa-play-circle-o"></i>
                          <p class="mt-2 preview">Xem trước</p>
                        </div>
                        <img src="public/images/dev-3.jpg" class="img-fluid">
                      </div>
                      <div class="card-block el-c-size-p">
                        <h4 class="card-title el-c-size">Learning Assembly</h4>
                        <p class="card-text p-0 mb-2 el-c-size-p">Alex Theedom</p>
                        <div class="p-0 pull-left el-c-size-st">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="pull-right price">
                          <span class="font-size09rem">449.000<sup>đ</sup></span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div> <!-- item -->
                <div class="gallery_product col-12 mt-3 mt-md-0 carousel-item">
                  <a href="">
                    <div class="card">
                      <div class="box-img">
                        <div class="hover-background text-center">
                          <i class="fa fa-2x fa-play-circle-o"></i>
                          <p class="mt-2 preview">Xem trước</p>
                        </div>
                        <img src="public/images/dev-4.jpg" class="img-fluid">
                      </div>
                      <div class="card-block el-c-size-p">
                        <h4 class="card-title el-c-size">Learning Reactjs</h4>
                        <p class="card-text p-0 mb-2 el-c-size-p">Alex Theedom</p>
                        <div class="p-0 pull-left el-c-size-st">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="pull-right price">
                          <span class="font-size09rem">649.000<sup>đ</sup></span>
                        </div>
                      </div>
                    </div>
                  </a>
                </div> <!-- item -->

                <div class="gallery_product col-12 mt-3 mt-md-0 carousel-item">
                  <a href="">
                    <div class="card">
                      <div class="box-img">
                        <div class="hover-background text-center">
                          <i class="fa fa-2x fa-play-circle-o"></i>
                          <p class="mt-2 preview">Xem trước</p>
                        </div>
                        <img src="public/images/dev-5.jpg" class="img-fluid">
                      </div>
                      <div class="card-block el-c-size-p">
                        <h4 class="card-title el-c-size">Learning Nodejs </h4>
                        <p class="card-text p-0 mb-2 el-c-size-p">Alex Theedom</p>
                        <div class="p-0 pull-left el-c-size-st">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="pull-right price">
                          <span class="font-size09rem">729.000<sup>đ</sup></span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div> <!-- item -->

                <div class="gallery_product col-12 mt-3 mt-md-0 carousel-item">
                  <a href="">
                    <div class="card">
                      <div class="box-img">
                        <div class="hover-background text-center">
                          <i class="fa fa-2x fa-play-circle-o"></i>
                          <p class="mt-2 preview">Xem trước</p>
                        </div>
                        <img src="public/images/dev-6.jpg" class="img-fluid">
                      </div>
                      <div class="card-block el-c-size-p">
                        <h4 class="card-title el-c-size">Learning Java Enterprise Edition</h4>
                        <p class="card-text p-0 mb-2 el-c-size-p">Alex Theedom</p>
                        <div class="p-0 pull-left el-c-size-st">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="pull-right price">
                          <span class="font-size09rem">549.000<sup>đ</sup></span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div> <!-- item -->             
            </div>
            </div>
         
          </div>
        </div>
      </div>
      <!-- /course content right -->
  </section><!-- /list course -->
  
  <script src="public/js/carousel-multi.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.link_video').click(function(){
        // $(this);
        //alert($(this).attr('id-video'));
        $.ajax({
            type: "POST",
            url: "controller/MainController.php",
            data: { 
              // note: ajax pass param to method of class Controller
              name_controller : "MainController",
              method : "video_lession",
              id_lession : $(this).attr('id-video')

            },
            success : function (response){
              $('#video_lession').html(response.video_lession[0]['link_video']);
              //console.log(response.video_lession[0]['link_video']);
              //window.location.assign("");
            }
        })
      });

      $('#save').click(function(){
        
         $.ajax({
            method: 'POST',
            url: 'controller/MainController.php',
            data: {
              name_controller: 'MainController',
              method: 'insertNote',
              id_course: <?php echo $course[0]['id_courses'];?>,
              content: $('#ghichu').val() 
            },
            success: function(res){
              console.log(res);
              $('#father:first-child').append(res);
            }
          });
        });

        $('#deleteNote').click(function(){
          $.ajax({
            method: 'POST',
            url: 'controller/MainController.php',
            data: {
              name_controller: 'MainController',
              method: 'deleteNote',
              id_note: <?php if(isset($note[0]['id_note'])) {echo $note[0]['id_note'];} else{echo "0"; } ?>
            },
            success: function(res){
              location.reload();
            }
          })
        });
    });
  </script>

  
<?php include 'template/footer.php'; ?>
