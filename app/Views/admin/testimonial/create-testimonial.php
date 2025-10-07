<div class="page-header">
    <h3 class="page-title">Create Testimonial</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Testimonial</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Testimonial</li>
        </ol>
    </nav>
</div>
<div class='row'>
    <div class="col-12 grid-margin">
        <div class="card">
            <span id="msgsuccess"></span>
            <div class="card-body">
            <form class="form-sample">
                 
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" id="name" class='form-control'>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgname"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" name="designation" id="designation" class='form-control'>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgdesignation"></span>
                                </div>
                            </div>
                            <div class="col-md-3 mb-2">
                                <div class="form-group">
                                    <label>Image </label>
                                    <input type="file" name="image" id="image" class='form-control'
                                    accept=".jpg,.png,.jpeg,.webp">
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgimage"></span>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea type="text" name="content" id="content" class='form-control' ></textarea>
                                    <div class='clearfix'></div>
                                    <span class='message' id="msgcontent"></span>
                                </div>
                            </div>
                                
                        </div>
                        <button type="button" id="authenticateCreateTestimonial"
                            class="btn btn-primary mr-2 float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url("assets/admin/page/testimonial.js") ?>"></script>