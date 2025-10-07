<div class="page-header">
  <h3 class="page-title">Order List</h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Manage Order</a></li>
      <li class="breadcrumb-item active" aria-current="page">Order List</li>
    </ol>
  </nav>
</div>
<div class='row'>
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="mb-4">
          <h4 class="card-title mb-sm-0">Order List</h4>
          <p id="updateOrderMessage"></p>
        </div>
        <p>&nbsp;</p>
        <table Id="example" class="display table table-bordered" width="100%">
          <thead>
            <tr>
              <th scope="col">Invoice No.</th>
              <th scope="col">Image</th>
              <th scope="col">Product Name</th>
              <th scope="col">Price</th>
              <th scope="col">Qty</th>
              <th scope="col">Total</th>
              <th scope="col">Date</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($orderList) {
              $count = 1;
              foreach ($orderList as $order) {
                $productdata = productById($order['product_id']);
                $total = $order['total_amount'] * $order['qty']; ?>
                <tr>
                  <td data-label="#"><?= $order['invoice_no'];?></td>
                  <td><img src="<?=base_url()?>assets/uploads/product/<?=$productdata['thumb_image']?>" width="60"
                  height="60"></td>
                  <td data-label="#"><?= $productdata['heading'];?></td>
                  <td data-label="#"><?= $order['total_amount'];?></td>
                  <td data-label="#"><?= $order['qty'];?></td>
                  <td data-label="#"><?= $total;?></td>
                  <td data-label="#"><?= $order['created_at'];?></td>
                  <td data-label="#">
                    <select name="status" id="status" order-id="<?= $order['id'];?>">
                        <option value="1" <?php if($order['status']==1){echo "selected";}?>>Pending</option>
                        <option value="2" <?php if($order['status']==2){echo "selected";}?>>Processing</option>
                        <option value="3" <?php if($order['status']==3){echo "selected";}?>>Dispatch</option>
                        <option value="4" <?php if($order['status']==4){echo "selected";}?>>Success</option>
                        <option value="5" <?php if($order['status']==5){echo "selected";}?>>Refund</option>
                    </select>
                  </td>
                          
                
                 
                </tr>
              <?php }} else { echo "<tr><td colspan='4'>No Detail...</td></tr>";}?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
if ($orderList) { ?>
  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.0/bootstrap-table.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<?php } ?>
<link rel="stylesheet" href="<?php echo base_url("assets/admin/css/responsive-table.css"); ?>">


<script>
    var siteUrl = $("#siteUrl").attr("href");
    $(document).ready(function(){

    $(document).on("change",'#status',function(){
        var status = $(this).val();
        var order_id = $(this).attr('order-id');
        
    $.ajax({
      url: siteUrl +"admin/order-status-update",
      type: "POST",
      data: {status:status,order_id:order_id},
      success: function (result) {
        if(result==1){
            $("#updateOrderMessage").text("success");
        }else{

        }
      },
    });

    });
    });
</script>