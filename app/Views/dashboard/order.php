<div class="col-md-9 pb-5">
    <div class="user-details  table-responsive">
        <table id="table" class="table-responsive">
            <thead class="border_head">
                <tr>
                    <th>Invoice No.</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="border_data">
                <?php foreach($orderData as $order){
      $productdata = productById($order['product_id']);
      $total = $order['total_amount'] * $order['qty'];
    ?>
                <tr>
                     <td><?= $order['invoice_no']?></td>

                    <td><img src="<?=base_url()?>assets/uploads/product/<?=$productdata['thumb_image']?>" width="60"
                            height="60"></td>

                    <td><?= htmlspecialchars($productdata['heading']) ?></td>
                    <td><i class="fa fa-inr"></i> <?= $order['total_amount'] ?>/-</td>
                    <td><?= $order['qty'] ?></td>
                    <td><i class="fa fa-inr"></i> <?= $total ?>/-</td>
                     <td><?= $order['created_at'] ?></td>

                    <td>
                        <?php if($order['status']==1){
                            echo "Pending";
                        }else if($order['status']==2){
                            echo "Processing";
                        }else if($order['status']==3){
                            echo "Dispatch";
                        }else if($order['status']==4){
                            echo "Success";
                        }else if($order['status']==5){

                            echo "Refund";
                        }
                        else{
                            echo "";
                        }
                            ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>
</div>
</div>
<div class="clearfix pb-5"></div>