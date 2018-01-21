<?php include 'template/header.php'; ?>

  <section class="container">
    <!-- title payment -->
    <div class="row">
      <div class="col-md-12 el-container">
        <h3 class="font-weight-bold">Hoàn thành thông tin thanh toán</h3>
        <p>
          Hệ thống chỉ chấp nhận thanh toán bằng visa, master card
        </p>
      </div>
    </div>
    <!-- /title payment -->
    <div class="row">
      <!-- left -->
      <div class="col-md-8">
        <table class="table table-bordered rounded">

          <tbody>
            <td class="col-md-6 p-4">

              <span>Nhập số thẻ:</span> <i class="fa fa-cc-visa fa-2x"></i> <i class="fa fa-cc-mastercard fa-2x"></i> 
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group mt-4">
                      <label for="numberVisa">Số thẻ:</label>
                      <input type="text" name="" id="numberVisa" value="" class="form-control" placeholder="VD: 4414 4123 4325 6512">
                    </div>

                    <div class="form-group mt-4">
                      <label for="nameVisa">Tên in trên thẻ:</label>
                      <input type="text" name="" id="nameVisa" value="" class="form-control" placeholder="VD: SHDVisa">
                    </div>
                    <div class="form-group mt-4 ">
                      <label for="dateVisa">Ngày hết hạn:</label>
                      <input type="date" name="" id="dateVisa" value="" class="form-control col-sm-8" placeholder="VD: DD/MM/YY">
                    </div>
                    <div class="form-group mt-4">
                      <label for="codeVisa">Mã bảo mật:</label>
                      <input type="text" name="" id="codeVisa" value="" class="form-control col-sm-8" placeholder="VD: 123">
                      <img src="images/cvv-hint.png" alt="ccv hint" id="code" class="img-fluid col-sm-4 pull-right"/>
                    </div>
                  </div>
                  <div class="form-group col-sm-6 mt-4">
                    <img src="public/images/card-guide.png" alt="card guide" width="100%" class="img-circle rounded mb-3 mt-5">
                    <small title="caution">(Vui lòng chú ý kiểm tra tin nhắn nếu có yêu cầu)</small>
                  </div>
                </div>


              </form>

            </td>
            
          </tbody>
        </table>
        <div class="row">
          <div class="col-md-12 mt-3 mb-5">
            <a href="" class="flat-btn-or text-uppercase" >Đặt mua</a>
            <p class="mt-2">(Xin vui lòng kiểm tra lại đơn hàng khi Đặt Mua)</p>
          </div>
        </div>
      </div>

      <!-- /left -->

      <!-- right -->
      <div class="col-md-4">

        <table class="table table-bordered rounded table-responsive" >

          <tbody>
            <td class="col-md-6 p-4">
              <div class="row">
                <div class="col-md-12 border-bottom-gray">
                  <div class="row">
                    <span class="font-weight-bold col-6">Thông tin người mua</span>
                    <form class="col-6 mb-3">
                      <button type="button" name="button" class="btn btn-warning float-right" >Sửa</button>
                    </form>
                  </div>
                </div>
              </div>
              
              <p class="mt-4">Nguyễn Văn A</p>
              <p>
                Email: info@gmail.com
                <br>
                Điện thoại: 0123 456 789
              </p>

            </td>

            </tbody>
        </table>

        <table class="table table-bordered rounded table-responsive">

          <tbody>
            <td class="col-md-6 p-4">
            <div class="row">
                <div class="col-md-12 border-bottom-gray">
                <div class="row">
                  <span class="font-weight-bold col-6">Thông tin thanh toán</span>
                  <form class="col-6 mb-3">
                    <button type="button" name="button" class="btn btn-warning float-right" >Sửa</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-md-12 border-bottom-gray">
                <div class="row">
                  <div class="col-md-8 pt-3 pb-3">
                    <p><span class="font-weight-bold">1 x </span>Kỹ thuật đồ họa(Topica Uni)</p>
                  </div>
              
                  <div class="col-md-4 pt-3 pb-3 text-center">
                    <h4 class="font-weight-bold price">449.000đ </h4>
                  </div>
              
                </div>
              
              </div>
            </div>

             <div class="row">
                <div class="col-md-12">
                 <div class="row">
                   <div class="col-md-8 pt-3 pb-3">
                     <span class="font-weight-bold">Thành tiền </span>
                   </div>
               
                   <div class="col-md-4 pt-3 pb-3 text-center">
                     <h4 class="font-weight-bold text-danger price">449.000đ </h4>
                     <small class="text-muted text-align-right">(Đã bao gồm VAT)</small>
                   </div>
               
                 </div>
               
               </div>
             </div>
            </td>

            </tbody>
        </table>
      </div><!-- /right --> 
    </div> <!-- row -->
    
  </section>

<?php include 'template/footer.php'; ?>