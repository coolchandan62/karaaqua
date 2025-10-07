<?php 
    use App\Models\Admin\FaqModel;
    $this->faqModel = new FaqModel();?>

<div class="page-header">
    <h3 class="page-title">Edit Faq</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Faq</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Faq</li>
        </ol>
    </nav>
</div>
<div class='row'>
    <div class="col-12 grid-margin">
        <div class="card">
            <span id="msgsuccess"></span>
            <div class="card-body">
                <form class="form-sample">
                    <input type="hidden" name="id" value="<?php echo $faqData['id'];?>">
                    <input type="hidden" name="type"  value="<?php echo $faqData['type'];?>">
                    <input type="hidden" name="service_id" value="<?php echo $faqData['service_id'];?>"/>
                    <div class="row">

                        <div class="col-md-8 mb-2">
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" name="heading" class='form-control' value="<?php echo $faqData['heading'];?>"
                                <div class='clearfix'></div>
                                <span class='message' id="msgheading"></span>
                            </div>
                        
                        <div class="col-md-12 mb-2">
                            <div class="form-group ">
                                <label> Description </label>
                                <textarea type="text" name="description" id="editor" class='form-control'><?php echo $faqData['description'];?></textarea>
                                <div class='clearfix'></div>
                                <span class='message' id="msgdescription"></span>
                            </div>
                        </div>
                        
                        <div class="col-md-12 mb-2">
                            <div class="form-group ">
                                <label>Schema Description </label>
                                <textarea type="text" name="schema_description" class='form-control'></textarea>
                                <div class='clearfix'></div>
                                <span class='message' id="msgschema_description"></span>
                            </div>
                        </div>
                        </div>
                        
                

                    <button type="button" id="authenticateUpdateFaq" class="btn btn-primary mr-2 float-right">Submit</button>
                </form>

            </div>
            <div class="card-body">
                      <div class="mb-4">
                        <h4 class="card-title mb-sm-0">Faq List</h4>
                      </div>
                      <p>&nbsp;</p>
                      <table Id="example" class="display table table-bordered" width="100%">
                        <thead>
                          <tr>
                            <th scope="col" width="10%">#</th>
                            <th scope="col">Heading</th>
                            <th>Date</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            if($faqList){
                              $count = 1;
                              foreach($faqList As $faq){?>
                          <tr>
                            <td data-label="#"><?php echo $count++;?></td>
                            <td><?php echo $faq['heading'];?></td>
                            <th><?php echo date("d, M y h:i a",strtotime($faq['date']));?></th>
                            <td data-label="Action">
                                <a href="<?=base_url()?>admin/faq/edit-faq/<?php echo $faq['id'];?>" class="ml-auto badge badge-warning p-2" ><i class="fa fa-pencil"></i></a>
                              <a href="<?=base_url()?>admin/Faq/deleteFaq/<?php echo $faq['id']."/".$faqData['service_id']."/".$faqData['type'];?>" onclick="return confirm('Are you sure. You want to delete this?')" class="ml-auto badge badge-warning p-2" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <?php }}else{echo "<tr><td colspan='4'>No Detail...</td></tr>"; } ?>
                        </tbody>
                      </table>
                  </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/admin/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/ckeditor/samples/js/sample.js"></script>
<script>
CKEDITOR.replace('editor');
</script>
<script src="<?=base_url("assets/admin/page/faq.js?v=0.1")?>"></script>
<?php
  if($faqList){?>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.0/bootstrap-table.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<?php } ?>