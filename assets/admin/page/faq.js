var siteUrl = $("#siteUrl").attr('href');

$(document).on("change","select[name='type']",function(){
    var type = $("select[name='type']").val();
    $.ajax({
        url:siteUrl+"admin/Faq/serviceList",
        type:'POST',
        data:{
            "type":type
        },
        async:false,
        success:function(result){
            $("#service-data").html(result);
        }
    });
});
    

$(document).on('click','#authenticateFaq',function(){
    if(authenticateFaq()){
        var type = $("input[name='type']").val();
        var service_id = $("input[name='service_id']").val();
        var heading = $("input[name='heading']").val();
        var schema_description = $("textarea[name='schema_description']").val();
        var description = CKEDITOR.instances['editor'].getData();
        
        var formData = new FormData();
        formData.append("type",type);
        formData.append("service_id",service_id);
        formData.append("heading",heading);
        formData.append("schema_description",schema_description);
        formData.append("description",description);
        
        $.ajax({
            url:siteUrl+"admin/Faq/saveFaq",
            type:'POST',
            data:formData,
            async:false,
            contentType:false,
            processData:false,
            success:function(result){
                if (result.indexOf("1") > -1) {
					window.location.replace(siteUrl+"admin/faq/create-faq/"+service_id+"/"+type);				
				}else if (result.indexOf("2") > -1) {
					$("#msgheading").show();
					$("#msgheading").html("Please try again later.");
					$("#msgheading").css("color","red");
				}
            }
        });
    }
});



function authenticateFaq(){
    var valid = true;
    var heading = $("input[name='heading']").val();
    var description = CKEDITOR.instances['editor'].getData();
    $(".message").html("&nbsp;");
	$(".message").css("font-size", "13px");
	$(".message").css("color", "red");
	$(".message").css("float", "left");
	$(".message").hide();
    
    if (heading.length == 0) {
        $('#msgheading').show();
		$('#msgheading').html('Enter heading');
		valid = false;
	}if (description.length == 0) {
        $('#msgdescription').show();
		$('#msgdescription').html('Enter description');
		valid = false;
	}
    return valid;
}

$(document).on('click','#authenticateUpdateFaq',function(){
    if(authenticateUpdateFaq()){
        var id = $("input[name='id']").val();
        var type = $("input[name='type']").val();
        var service_id = $("input[name='service_id']").val();
        var heading = $("input[name='heading']").val();
        var schema_description = $("textarea[name='schema_description']").val();
        var description = CKEDITOR.instances['editor'].getData();
        
        var formData = new FormData();
        formData.append("id",id);
        formData.append("type",type);
        formData.append("service_id",service_id);
        formData.append("heading",heading);
        formData.append("schema_description",schema_description);
        formData.append("description",description);
        
        $.ajax({
            url:siteUrl+"admin/Faq/updateFaq",
            type:'POST',
            data:formData,
            async:false,
            contentType:false,
            processData:false,
            success:function(result){
                if (result.indexOf("1") > -1) {
					window.location.replace(siteUrl+"admin/faq/create-faq/"+service_id+"/"+type);			
				}else if (result.indexOf("2") > -1) {
					$("#msgheading").show();
					$("#msgheading").html("Please try again later.");
					$("#msgheading").css("color","red");
				}
            }
        });
    }
});



function authenticateUpdateFaq(){
    var valid = true;
    var heading = $("input[name='heading']").val();
    var description = CKEDITOR.instances['editor'].getData();
    $(".message").html("&nbsp;");
	$(".message").css("font-size", "13px");
	$(".message").css("color", "red");
	$(".message").css("float", "left");
	$(".message").hide();
    
    if (heading.length == 0) {
        $('#msgheading').show();
		$('#msgheading').html('Enter heading');
		valid = false;
	}if (description.length == 0) {
        $('#msgdescription').show();
		$('#msgdescription').html('Enter description');
		valid = false;
	}
    return valid;
}