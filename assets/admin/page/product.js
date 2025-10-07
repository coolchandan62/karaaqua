var siteUrl = $("#siteUrl").attr("href");

$(document).on("change","#type",function() {
  var type = $("select[name='type']").val();
  if(type == 1){
    $("#hideprice").hide();  
  }else{
    $("#hideprice").show();  
  }
});
//edit page hide price fields
$(document).ready(function(){
  var type = $("select[name='type']").val();
  if(type == 1){
    $("#hideprice").hide(); 
  }else{
    $("#hideprice").show();  
  }
});

$(document).on("click", "#authenticateAddProduct", function () {
  if (authenticateAddProduct()) {
    var type = $("select[name='type']").val();
    var heading = $("input[name='heading']").val();
    var heading_slug = $("input[name='heading_slug']").val();
    var thumb_image = $("#thumb_image").prop("files")[0];
    var image = $("#image").prop("files")[0];
    var image1 = $("#image1").prop("files")[0];
    var image2 = $("#image2").prop("files")[0];
    var image3 = $("#image3").prop("files")[0];
    var image4 = $("#image4").prop("files")[0];
    var og_image = $("#og_image").prop("files")[0];
    var description = CKEDITOR.instances["editor"].getData();
    var feature = CKEDITOR.instances["editor2"].getData();
    var additional_information = CKEDITOR.instances["editor1"].getData();
    var meta_title = $("textarea[name='meta_title']").val();
    var short_description = $("textarea[name='short_description']").val();
    var meta_description = $("textarea[name='meta_description']").val();
    var mrp = $("input[name='mrp']").val();
    var price = $("input[name='price']").val();
    var content = $("textarea[name='content']").val();
  
    var formData = new FormData();

    formData.append("type", type);
    formData.append("heading", heading);
    formData.append("heading_slug", heading_slug);
    formData.append("thumb_image", thumb_image);
    formData.append("image", image);
    formData.append("image1", image1);
    formData.append("image2", image2);
    formData.append("image3", image3);
    formData.append("image4", image4);
    formData.append("mrp", mrp);
    formData.append("price", price);
    formData.append("content", content);
    formData.append("og_image", og_image);
    formData.append("short_description", short_description);
    formData.append("additional_information", additional_information);
    formData.append("description", description);
    formData.append("feature", feature);
    formData.append("meta_title", meta_title);
    formData.append("meta_description", meta_description);
   
    

    $.ajax({
      url: siteUrl + "admin/save-product",
      type: "POST",
      data: formData,
      async: false,
      contentType: false,
      processData: false,
      success: function (result) {
        console.log(result);
        if (result.indexOf("1") > -1) {
          $("#msgheading_slug").html(" already exists");
          $("#msgheading_slug").show();
        } else if (result.indexOf("2") > -1) {
          window.location.replace(siteUrl + "admin/product");
        } else if (result.indexOf("3") > -1) {
          $("#msgheading_slug").html("please try again");
          $("#msgheading_slug").show();
        }
      },
    });
  }
});

function authenticateAddProduct() {
  var valid = true;
  var type = $("select[name='type']").val();
  var heading = $("input[name='heading']").val();
  var heading_slug = $("input[name='heading_slug']").val();
 

  $(".message").html("&nbsp;");
  $(".message").css("font-size", "13px");
  $(".message").css("color", "red");
  $(".message").css("float", "left");
  $(".message").hide();

  if (type.length == 0) {
    $("#msgtype").show();
    $("#msgtype").html("Select Category");
    valid = false;
  }
  if (heading_slug.length == 0) {
    $("#msgheading_slug").show();
    $("#msgheading_slug").html("Enter heading slug");
    valid = false;
  }
  if (heading.length == 0) {
    $("#msgheading").show();
    $("#msgheading").html("Enter heading");
    valid = false;
  }
  return valid;
}


$(document).on("click", "#authenticateUpdateProduct", function () {
  if (authenticateUpdateProduct()) {
    var id = $("input[name='id']").val();
    var type = $("select[name='type']").val();
    var heading = $("input[name='heading']").val();
    var heading_slug = $("input[name='heading_slug']").val();
    var thumb_image = $("#thumb_image").prop("files")[0];
    var image = $("#image").prop("files")[0];
    var image1 = $("#image1").prop("files")[0];
    var image2 = $("#image2").prop("files")[0];
    var image3 = $("#image3").prop("files")[0];
    var image4 = $("#image4").prop("files")[0];
    var og_image = $("#og_image").prop("files")[0];
    var description = CKEDITOR.instances["editor"].getData();
    var feature = CKEDITOR.instances["editor2"].getData();
    var additional_information = CKEDITOR.instances["editor1"].getData();
    var meta_title = $("textarea[name='meta_title']").val();
    var short_description = $("textarea[name='short_description']").val();
    var meta_description = $("textarea[name='meta_description']").val();
    var mrp = $("input[name='mrp']").val();
    var price = $("input[name='price']").val();
    var content = $("textarea[name='content']").val();
    
    var header_script = $("textarea[name='header_script']").val();
    var body_script = $("textarea[name='body_script']").val();

    var formData = new FormData();

    formData.append("id", id);
    formData.append("type", type);
    formData.append("heading", heading);
    formData.append("heading_slug", heading_slug);
    formData.append("thumb_image", thumb_image);
    formData.append("image", image);
    formData.append("image1", image1);
    formData.append("image2", image2);
    formData.append("image3", image3);
    formData.append("image4", image4);
    formData.append("mrp", mrp);
    formData.append("price", price);
    formData.append("content", content);
    formData.append("og_image", og_image);
    formData.append("short_description", short_description);
    formData.append("description", description);
    formData.append("feature", feature);
    formData.append("additional_information", additional_information);
    formData.append("meta_title", meta_title);
    formData.append("meta_description", meta_description);
    
    formData.append("header_script",btoa(unescape(encodeURIComponent(header_script))));
    formData.append("body_script",btoa(unescape(encodeURIComponent(body_script))));

    $.ajax({
      url: siteUrl + "admin/update-product",
      type: "POST",
      data: formData,
      async: false,
      contentType: false,
      processData: false,
      success: function (result) {
        console.log(result);
        if (result.indexOf("1") > -1) {
          $("#msgheading_slug").html(" already exists");
          $("#msgheading_slug").show();
        } else if (result.indexOf("2") > -1) {
          window.location.replace(siteUrl + "admin/product");
        } else if (result.indexOf("3") > -1) {
          $("#msgheading_slug").html("please try again");
          $("#msgheading_slug").show();
        }
      },
    });
  }
});

function authenticateUpdateProduct() {
  var valid = true;
  var type = $("select[name='type']").val();
  var heading = $("input[name='heading']").val();
  var heading_slug = $("input[name='heading_slug']").val();
 

  $(".message").html("&nbsp;");
  $(".message").css("font-size", "13px");
  $(".message").css("color", "red");
  $(".message").css("float", "left");
  $(".message").hide();

  if (type.length == 0) {
    $("#msgtype").show();
    $("#msgtype").html("Select Category");
    valid = false;
  }
  if (heading_slug.length == 0) {
    $("#msgheading_slug").show();
    $("#msgheading_slug").html("Enter heading slug");
    valid = false;
  }
  if (heading.length == 0) {
    $("#msgheading").show();
    $("#msgheading").html("Enter heading");
    valid = false;
  }
  return valid;
}


