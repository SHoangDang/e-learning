<?php include 'template/header.php'; ?>
	<section class="history mt-5 pt-4 pb-3 mt-5 cart-info">
		<div class="container">
			<div class="row p-0 m-0">
				<div class="col-md-12 p-0 m-0">
					<h4 class="text-left p-0 m-0">
						<span class="font-weight-bold">Thông tin hóa đơn</span>
					</h4>
				</div>
			</div>
		</div>
	</section>

	<section class="user p-5">
		<table class="table">
		  	<thead class="thead-inverse">
			    <tr>
			    	<th>#</th>
			      	<th>Họ</th>
			      	<th>Tên</th>
			      	<th>Email</th>
			      	<th>Date Create</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>
			    	<th scope="row"></th>
			      	<td><?php echo $payment->payer->payer_info->first_name; ?></td>
			      	<td><?php echo $payment->payer->payer_info->last_name; ?></td>
			      	<td><?php echo $payment->payer->payer_info->email; ?></td>
			      	<td><?php echo $payment->create_time; ?></td>
			    </tr>
		  	</tbody>
		</table>

		<table class="table">
		  	<thead class="thead-inverse">
			    <tr>
			      <th>#</th>
			      <th>Tên khóa học</th>
			      <th>Số lượng</th>
			      <th>Giá</th>
			      <th>Thành tiền</th>
			    </tr>
		  	</thead>
		  	<tbody>
		  		<?php
		  			foreach ($payment->transactions[0]->item_list->items as $key => $item) : 
		  		?>
			    <tr>
			      	<th scope="row"><?php echo $key+1; ?></th>
			      	<td><?php echo $item->name; ?></td>
			      	<td><?php echo $item->quantity; ?></td>
			      	<td><?php echo $item->price.' '.$item->currency; ?></td>
			      	<td><?php echo $item->price*$item->quantity.' '.$item->currency; ?></td>
			    </tr>
				<?php endforeach; ?>
				<tr>
			      	<th scope="row"></th>
			      	<td></td>
			      	<td></td>
			      	<th scope="row">Tổng tiền: </th>
			      	<th scope="row"><?php echo $payment->transactions[0]->amount->total.' '.$payment->transactions[0]->amount->currency; ?></th>
			    </tr>
		  	</tbody>
		</table>
	</section>

<?php include 'template/footer.php'; ?>