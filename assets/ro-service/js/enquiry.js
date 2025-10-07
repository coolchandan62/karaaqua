var siteUrl = $("#siteUrl").attr('href');	
$(document).on('click','#authenticateContactEnquiry',function() {
	if (authenticateContactEnquiry()) {
		var page_name = $("input[name='contact_page_name']").val();
		var comment = $("textarea[name='contact_comment']").val();
		var name = $("input[name='contact_name']").val();
    	var mobile = $("input[name='contact_mobile']").val();
    	var address = $("textarea[name='contact_address']").val();
		$.ajax({
			url : siteUrl+'saveRoEnquiry',
			type : 'POST',
			data : {
				page_name:page_name,
				comment:comment,
			    name:name,
			    mobile:mobile,
			    address:address
			},
			async: false,
			success : function(result) {
				if (result.indexOf("1") > -1) {
					window.location.replace(siteUrl+"thanks");
				}else if (result.indexOf("2") > -1) {
					$("#msgcontact_email").show();
					$("#msgcontact_email").html("Please try again later.");
				}
			}
		});
	}	
});

function authenticateContactEnquiry() {
	var valid = true;
	var name = $("input[name='contact_name']").val();
	// var email = $("input[name='contact_email']").val();
	var textarea = $("textarea[name='contact_comment']").val();
	var mobile = $("input[name='contact_mobile']").val();
	var address = $("textarea[name='contact_address']").val();

    $(".message").html("&nbsp;");
	$(".message").css("font-size", "10px");
	$(".message").css("color", "red");
	$(".message").css("float", "left");
	$(".message").css("margin-top", "-22px");
	$(".message").hide();
	if (name.length == 0) {
		valid = false;
		$('#msgcontact_name').show();
		$('#msgcontact_name').html('Enter name');
	}
	if (textarea.length == 0) {
		valid = false;
		$('#msgcontact_comment').show();
		$('#msgcontact_comment').html('Enter comment');
	}
	if (mobile.length == 0 || checkcontactnumber(mobile) == false) {
		valid = false;
		$('#msgcontact_mobile').show();
		$('#msgcontact_mobile').html('Enter 10 digit mobile no.');
	}
	if (address.length == 0) {
		valid = false;
		$('#msgcontact_address').show();
		$('#msgcontact_address').html('Enter address');
	}
	return valid;
}

$(document).on('click','#authenticatePopupEnquiry',function() {
	if (authenticatePopupEnquiry()) {
		var page_name = $("input[name='popup_page_name']").val();
	    var comment = $("textarea[name='popup_comment']").val();
		var name = $("input[name='popup_name']").val();
    	var mobile = $("input[name='popup_mobile']").val();
    	var address = $("textarea[name='popup_address']").val();
		$.ajax({
			url : siteUrl+'saveRoEnquiry',
			type : 'POST',
			data : {
				page_name:page_name,
				comment:comment,
			    name:name,
			    mobile:mobile,
			    address:address
			},
			async: false,
			success : function(result) {
				if (result.indexOf("1") > -1) {
					window.location.replace(siteUrl+"thanks");
				}else if (result.indexOf("2") > -1) {
					$("#msgcontact_email").show();
					$("#msgcontact_email").html("Please try again later.");
				}
			}
		});
	}	
});

function authenticatePopupEnquiry() {
	var valid = true;
	var name = $("input[name='popup_name']").val();
	var comment = $("textarea[name='popup_comment']").val();
	var mobile = $("input[name='popup_mobile']").val();
	var address = $("textarea[name='popup_address']").val();

    $(".message").html("&nbsp;");
	$(".message").css("font-size", "10px");
	$(".message").css("color", "red");
	$(".message").css("float", "left");
	$(".message").css("margin-top", "-22px");
	$(".message").hide();
	if (name.length == 0) {
		valid = false;
		$('#msgpopup_name').show();
		$('#msgpopup_name').html('Enter name');
	}
	if (comment.length == 0) {
		valid = false;
		$('#msgpopup_comment').show();
		$('#msgpopup_comment').html('Enter comment');
	}
	if (mobile.length == 0 || checkcontactnumber(mobile) == false) {
		valid = false;
		$('#msgpopup_mobile').show();
		$('#msgpopup_mobile').html('Enter 10 digit mobile no.');
	}
	if (address.length == 0) {
		valid = false;
		$('#msgpopup_address').show();
		$('#msgpopup_address').html('Enter address');
	}
	return valid;
}

$(document).on('click','#authenticateHomeEnquiry',function() {

	if (authenticateHomeEnquiry()) {
		var page_name = $("input[name='home_page_name']").val();
	    var comment = $("textarea[name='home_comment']").val();

		var name = $("input[name='home_name']").val();
    	var mobile = $("input[name='home_mobile']").val();
    	var address = $("textarea[name='home_address']").val();
		$.ajax({
			url : siteUrl+'saveRoEnquiry',
			type : 'POST',
			data : {
				page_name:page_name,
				comment:comment,
			    name:name,
			    mobile:mobile,
			    address:address
			},
			async: false,
			success : function(result) {
				if (result.indexOf("1") > -1) {
					window.location.replace(siteUrl+"thanks");
				}else if (result.indexOf("2") > -1) {
					$("#msgcontact_email").show();
					$("#msgcontact_email").html("Please try again later.");
				}
			}
		});
	}	
});

function authenticateHomeEnquiry() {
	var valid = true;
	var name = $("input[name='home_name']").val();
	var comment = $("textarea[name='home_comment']").val();
	var mobile = $("input[name='home_mobile']").val();
	var address = $("textarea[name='home_address']").val();
    $(".message").html("&nbsp;");
	$(".message").css("font-size", "13px");
	$(".message").css("color", "white");
	$(".message").css("float", "left");

	$(".message").hide();
	if (name.length == 0) {
		valid = false;
		$('#msghome_name').show();
		$('#msghome_name').html('Enter name');
	}
	if (comment.length == 0) {
		valid = false;
		$('#msghome_comment').show();
		$('#msghome_comment').html('Enter comment');
	}
	if (mobile.length == 0 || checkcontactnumber(mobile) == false) {
		valid = false;
		$('#msghome_mobile').show();
		$('#msghome_mobile').html('Enter 10 digit mobile no.');
	}
	if (address.length == 0) {
		valid = false;
		$('#msghome_address').show();
		$('#msghome_address').html('Enter address');
	}
	return valid;
}

function emailValidate(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
function checkcontactnumber(mobile) {
	var contactRegexStr = /^\d{10}$/;
	var isvalid = contactRegexStr.test(mobile);
	return isvalid;
}
function checkPincode(pincode) {
	var contactRegexStr = /^\d{6}$/;
	var isvalid = contactRegexStr.test(pincode);
	return isvalid;
}
function passwordValidate(password) {
    var reg = /^[^%\s]{6,}$/;
    var reg2 = /[a-zA-Z]/;
    var reg3 = /[0-9]/;
    return reg.test(password) && reg2.test(password) && reg3.test(password);
}

function checkOnlyDigit(mobile) {
	var regex = /^[0-9]+$/;
	return regex.test(mobile);
}

function validateName(e) {
    return /^[A-Z a-z]+$/.test(e)
}