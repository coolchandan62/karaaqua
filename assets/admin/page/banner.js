var siteUrl = $("#siteUrl").attr("href");
$(document).on("click", "#authenticateUpdateBanner", function () {
      var id = $("input[name='id']").val();
      // var heading = $("input[name='heading']").val();
      var image = $("#image").prop("files")[0];
      // var content = $("textarea[name='content']").val();
      // var content1 = $("textarea[name='content1']").val();
      // var content2 = $("textarea[name='content2']").val();
      
     
      
      var formData = new FormData();
      formData.append("id", id);
      formData.append("image", image);
      // formData.append("content", content);
      // formData.append("content1", content1);
      // formData.append("heading", heading);
      // formData.append("content2", content2);
      
      
     
      $.ajax({
        url: siteUrl + "admin/update-banner",
        type: "POST",
        data: formData,
        async: false,
        contentType: false,
        processData: false,
        success: function (result) {
          console.log(result);
          if (result.indexOf("1") > -1) {
            window.location.replace(siteUrl + "admin/banner");
          } else if (result.indexOf("2") > -1) {
            $("#msgimage").html("please try again");
            $("#msgimage").show();
          }
        },
      });
  });

$(document).on("click", "#authenticateCreateBanner", function () {
    if (authenticateCreateBanner()) {
      var image = $("#image").prop("files")[0];
      var formData = new FormData();
      formData.append("image", image);
      
      
     
      $.ajax({
        url: siteUrl + "admin/save-banner",
        type: "POST",
        data: formData,
        async: false,
        contentType: false,
        processData: false,
        success: function (result) {
          console.log(result);
          if (result.indexOf("1") > -1) {
            window.location.replace(siteUrl + "admin/banner");
          } else if (result.indexOf("2") > -1) {
            $("#msgimage").html("please try again");
            $("#msgimage").show();
          }
        },
      });
    }
  });
  function authenticateCreateBanner() {
    var valid = true;
    var image = $("#image").prop("files")[0];
  
    $(".message").html("&nbsp;");
    $(".message").css("font-size", "13px");
    $(".message").css("color", "red");
    $(".message").css("float", "left");
    $(".message").hide();
  
    if (!image) {
      $("#msgimage").show();
      $("#msgimage").html("choose image");
      valid = false;
    }
    return valid;
  }
  