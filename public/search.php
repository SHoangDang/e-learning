<?php include 'template/header.php'; ?>
  <section>
    <!-- heartbreak -->
    <div class="container-fluid el-heatbreak cart-info">
      <div class="row">
        <div class="col-md-12 el-container el-heatbreak">
          <a href="#">Trang chủ</a> <i class="fa fa-angle-right"></i> <a href="#">Chủ đề</a>
        </div>
      </div>
    </div>
    <!-- /heartbreak -->


  </section>

<?php   
  // var_dump($category);
?>
  <!-- list course -->
  <section class="user">
    <div class="container">
      <div class="row">
        <?php include 'template/menu.php'; ?>

        <!-- category course top-->
        <div class="col-md-8 mt-4">
        <?php if(!empty($searches) &&  isset($searches)):?>
          


          <div class="container p-0 el-background-category el-shadow rounded  list-category mt-5 mb-4">
            <div class="container-fluid">
              <div class="row p-4">
                <p class="font-weight-bold mr-2"><?php echo count($searches);?>  <span class="font-weight-normal"> khóa học </span> </p>
                 <p class="font-weight-bold"> <?php echo count($searches); ?><span class="font-weight-normal"> videos </span></p>
              </div>

              <!--box category-->
              <?php foreach($searches as $search): ?>
              <a href="course/<?php echo $search['course_slug'];?>">
                <div class="row p-4 list-category el-border">
                 
                    <div class="col-md-4 el-c-img p-0 ">
                      <div class="box-img rounded">
                          <div class="hover-background text-center">
                            <i class="fa fa-2x fa-play-circle-o"></i>
                            <p class="mt-2">Xem trước khóa học</p>
                          </div>
                        <img src="public/images/<?php echo $search['course_gallery']; ?>" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-md-8 pl-5">
                      <p class="font-weight-bold m-0 p-0"><?php echo $search['course_name']; ?></p>
                      <p><?php echo $search['author_name'] ?></p>
                      <p class="mt-5 pull-left"><?php echo $search['course_price'];?><sup>đ</sup> </p>
                      <div class="p-0 pull-right el-c-size-st list-category card-block mt-5">
                          <i class="fa fa-2x fa-star"></i>
                          <i class="fa fa-2x fa-star"></i>
                          <i class="fa fa-2x fa-star"></i>
                          <i class="fa fa-2x fa-star"></i>
                          <i class="fa fa-2x fa-star"></i>
                        </div>
                    </div>
                 
                </div>
                </a>
              <?php endforeach;?>
<!--               

              <div class="row p-4 list-category">
                <div class="col-md-12 text-center">
                  <button type="button" name="button" class="btn btn-default"><i class="fa fa-chevron-down" aria-hidden="true"></i>Xem thêm</button>
                </div>
              </div> -->

            </div>



         </div>

         <div class="container p-4 el-background-category el-shadow rounded list-courses mb-5 mt-5">

            <div class="carousel slide" id="myCarousel" data-ride="carousel">
              <h2 class="font-weight-bold float-left">Các khóa học design nổi bật</h2>
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
                            <p class="mt-2">Xem trước khóa học</p>
                          </div>
                          <img src="public/images/dev-4.jpg" class="img-fluid">
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
                <div class="gallery_product col-12 mt-3 mt-md-0 carousel-item">
                   <a href="">
                      <div class="card">
                        <div class="box-img">
                          <div class="hover-background text-center">
                            <i class="fa fa-2x fa-play-circle-o"></i>
                            <p class="mt-2">Xem trước khóa học</p>
                          </div>
                          <img src="public/images/dev-4.jpg" class="img-fluid">
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

                <div class="gallery_product col-12 mt-3 mt-md-0 carousel-item">
                   <a href="">
                      <div class="card">
                        <div class="box-img">
                          <div class="hover-background text-center">
                            <i class="fa fa-2x fa-play-circle-o"></i>
                            <p class="mt-2">Xem trước khóa học</p>
                          </div>
                          <img src="public/images/dev-4.jpg" class="img-fluid">
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
                <div class="gallery_product col-12 mt-3 mt-md-0 carousel-item">
                   <a href="">
                      <div class="card">
                        <div class="box-img">
                          <div class="hover-background text-center">
                            <i class="fa fa-2x fa-play-circle-o"></i>
                            <p class="mt-2">Xem trước khóa học</p>
                          </div>
                          <img src="public/images/dev-4.jpg" class="img-fluid">
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
                <div class="gallery_product col-12 mt-3 mt-md-0 carousel-item">
                   <a href="">
                      <div class="card">
                        <div class="box-img">
                          <div class="hover-background text-center">
                            <i class="fa fa-2x fa-play-circle-o"></i>
                            <p class="mt-2">Xem trước khóa học</p>
                          </div>
                          <img src="pubic/images/dev-4.jpg" class="img-fluid">
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
                <div class="gallery_product col-12 mt-3 mt-md-0 carousel-item">
                   <a href="">
                      <div class="card">
                        <div class="box-img">
                          <div class="hover-background text-center">
                            <i class="fa fa-2x fa-play-circle-o"></i>
                            <p class="mt-2">Xem trước khóa học</p>
                          </div>
                          <img src="public/images/dev-4.jpg" class="img-fluid">
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
        
        
        <?php else:?>
          <div class="container p-4 el-background-category el-shadow rounded list-courses">
           <p class="text-danger"><?php echo  $retuls = isset($alert) ? $alert : "No result found" ; ?></p>
          </div>
        <?php endif; ?>

          <!-- category two-->

          
      </div>

      <!-- category course -->
  </section><!-- /list course -->
  <script src="public/js/carousel-multi.js"></script>
  
<?php include 'template/footer.php'; ?>


  
