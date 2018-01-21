<?php include 'template/header.php'; ?>
<section class="container">
    <div class="row">
      <div class="col-md-12 el-container">
        <h3 class="font-weight-bold">Chi tiết đơn hàng #23213807</h3>
        <p>
          Ngày mua khóa học: <?php echo $payment->create_time; ?>
        </p>
      </div>
    </div>
    <div class="row">
      <!-- left -->
      <div class="col-md-8 mt-4">
        <h3 class="text-uppercase">Thông báo</h3>
		    <p>Chúng tôi vừa nhận được thông tin thanh toán của quý khách qua cổng thanh toán Paypal. Đơn hàng của quý khách sẽ được giao trong ngày hôm nay, vui lòng hoàn tất đơn hàng và chờ email thông tin khóa học.</p>
        <div class="row">
          <div class="col-md-12 mt-3 mb-5">
            <a id="unset-order" class="flat-btn-or text-uppercase" >Hoàn tất</a>
            <p class="mt-2">(Xin vui lòng kiểm tra lại đơn hàng trước khi Hoàn tất)</p>
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
                    <p class="font-weight-bold text-center">Thông tin người mua</p>
                </div>
              </div>
              <p class="mt-4">
                <?php echo $payment->payer->payer_info->last_name.' '.$payment->payer->payer_info->first_name; ?>
              </p>
              <p>
                <?php echo $payment->payer->payer_info->email; ?>
                <br>
                Điện thoại: <?php echo isset($_SESSION['user']['phone']) ? $_SESSION['user']['phone'] : null ; ?>
              </p>
            </td>
            </tbody>
        </table>

        <table class="table table-bordered rounded table-responsive">

          <tbody>
            <td class="col-md-6 p-4">
              <div class="row">
                <div class="col-md-12 border-bottom-gray">
                  <p class="font-weight-bold text-center">Thông tin sản phẩm</p>         
  			        </div>
              </div>
              <?php
                foreach ($payment->transactions[0]->item_list->items as $key => $item) : 
              ?>
              <div class="row">
                  <div class="col-md-12 border-bottom-gray">
                  <div class="row">
                    <div class="col-md-8 pt-3 pb-3">
                      <p><span class="font-weight-bold"><?php echo $item->quantity; ?> x </span><?php echo $item->name; ?></p>
                    </div>
                
                    <div class="col-md-4 pt-3 pb-3 text-center">
                      <h4 class="font-weight-bold price">
                        <?php echo $item->price*$item->quantity.' '.$item->currency; ?>
                      </h4>
                    </div>
                
                  </div>
                
                </div>
              </div>
              <?php endforeach; ?>
                <div class="row">
                    <div class="col-md-12">
                     <div class="row">
                       <div class="col-md-7 pt-3 pb-3">
                         <span class="font-weight-bold">Thành tiền </span>
                       </div>
                   
                       <div class="col-md-5 pt-3 pb-3 text-center">
                         <h4 class="font-weight-bold text-danger price">
                           <?php echo $payment->transactions[0]->amount->total.' '.$payment->transactions[0]->amount->currency; ?>
                         </h4>
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

<script type="text/javascript">
  $(document).ready(function(){
    $('#unset-order').click(function(){
      $.ajax({
        type: "POST",
        url: "controller/MainController.php",
        data: { 
            // note: ajax pass param to method of class Controller
            name_controller : "MainController",
            method : "unset_order"
        },
        success : function (response){
            //console.log(response);
            window.location.assign("");
        }
      })
    })
  })
</script>

<?php include 'template/footer.php'; ?>