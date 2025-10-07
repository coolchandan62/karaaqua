var siteUrl = $("#siteUrl").attr("href");
$(document).on("click", "#authenticateRegister", function () {
    if (authenticateRegister()) {
        var formData = new FormData();
        formData.append("user_name", $("input[name='user_name']").val());
        formData.append("user_email", $("input[name='user_email']").val());
        formData.append("user_phone", $("input[name='user_phone']").val());
        formData.append("password", $("input[name='password']").val());
        formData.append("confirm_password", $("input[name='confirm_password']").val());
        $.ajax({
            url: siteUrl + "userRegistration",
            type: "POST",
            data: formData,
            async: false,
            contentType: false,
            processData: false,
            success: function (result) {
     if (result.indexOf("1") > -1) {
          $("#msguser_email").html(" User already exists");
          $("#msguser_email").show();
        } else if (result.indexOf("2") > -1) {
          window.location.replace(siteUrl + "");
        } else if (result.indexOf("3") > -1) {
          $("#msguser_name").html("please try again");
          $("#msguser_name").show();
        }
            },
            error: function (xhr) {
         $("#msguser_name").html("please try again");
          $("#msguser_name").show();
            }
        });
    }
});

function authenticateRegister() {
    var valid = true;
    var user_name = $("input[name='user_name']").val().trim();
    var user_email = $("input[name='user_email']").val().trim();
    var user_phone = $("input[name='user_phone']").val().trim();
    var password = $("input[name='password']").val();
    var confirm_password = $("input[name='confirm_password']").val();
    $(".message").html("&nbsp;").css({
        "font-size": "13px",
        "color": "red",
        "float": "left"
    }).hide();

    if (user_name === "") {
        $("#msguser_name").show().html("Enter your name");
        valid = false;
    }
    if (user_email === "") {
        $("#msguser_email").show().html("Enter your email");
        valid = false;
    } else if (!/^\S+@\S+\.\S+$/.test(user_email)) {
        $("#msguser_email").show().html("Enter a valid email");
        valid = false;
    }

    if (user_phone === "") {
        $("#msguser_phone").show().html("Enter your phone number");
        valid = false;
    } else if (!/^[0-9]{10,15}$/.test(user_phone)) {
        $("#msguser_phone").show().html("Enter a valid phone number");
        valid = false;
    }

    if (password.length < 6) {
        $("#msgpassword").show().html("Password must be at least 6 characters");
        valid = false;
    }

    if (confirm_password !== password) {
        $("#msgconfirm_password").show().html("Passwords do not match");
        valid = false;
    }

    return valid;
}

// $(document).on('click', '#authenticateUserLogin', function() {
//     if (authenticateUserLogin()) {
//         var frm = $("#login-frm").serialize(); 
//         $.ajax({
//             url: siteUrl + 'userLogin', 
//             type: 'POST',
//             data: frm,
//             async: false,
//             success: function(result) {
//                 if (result == 1) {
                    
//                     window.location.replace(siteUrl + "dashboard/user-dashboard"); 
//                 } else if (result == 2) {
//                     $("#msguser_email").show().html("Invalid email or password.");
//                 }
//             }
//         });
//     }
// });

$(document).on('click', '#authenticateUserLogin', function () {
    if (authenticateUserLogin()) {
        var frm = $("#login-frm").serialize();
        $.ajax({
            url: siteUrl + 'userLogin',
            type: 'POST',
            data: frm,
            async: false,
            success: function (result) {
                if (result == 1) {
                    var preUrl = $("input[name='pre_url']").val();
                    if (preUrl && preUrl.indexOf("/product/") !== -1) {
                        window.location.replace(preUrl);
                    } else {
                        window.location.replace(siteUrl + "dashboard/user-dashboard");
                    }
                } else if (result == 2) {
                    $("#msguser_email").show().html("Invalid email or password.");
                }
            }
        });
    }
});



function authenticateUserLogin() {
    var valid = true;
    var user_email = $("input[name='user_email']").val();
    var password = $("input[name='password']").val();

    // Reset error messages
    $(".message").html("&nbsp;");
    $(".message").css("font-size", "13px");
    $(".message").css("color", "red");
    $(".message").css("float", "left");
    $(".message").hide();

    // Validate email
    if (user_email === "") {
        $("#msguser_email").show().html("Enter your email");
        valid = false;
    } else if (!/^\S+@\S+\.\S+$/.test(user_email)) {
        $("#msguser_email").show().html("Enter a valid email");
        valid = false;
    }

    if (password.length == 0) {
        valid = false;
        $("#msg_password").html("Enter password");
        $("#msg_password").show();
    }

    return valid;
}


$(document).on('click', '#updateProfile', function () {
    if (updateProfile()) {
        var id = $("input[name='id']").val();
        var user_name = $("input[name='user_name']").val();
        var state = $("input[name='state']").val();
        var city = $("input[name='city']").val();
        var pincode = $("input[name='pincode']").val();
        var address = $("textarea[name='address']").val();
        var image = $("#image").prop("files")[0];
        var formData = new FormData();
        formData.append("id", id);
        formData.append("user_name", user_name);
        formData.append("state", state);
        formData.append("city", city);
        formData.append("pincode", pincode);
        formData.append("address", address);
        formData.append("image", image);
        $.ajax({
            url: siteUrl + "dashboard/updateUserData",
            type: "POST",
            data: formData,
            async: false,
            contentType: false,
            processData: false,
            success: function (result) {
                console.log(result);
                if (result.indexOf("1") > -1) {
                    window.location.replace(siteUrl + "dashboard/user-dashboard");
                } else {
                    $("#msgheading_slug").html("Already exists");
                    $("#msgheading_slug").show();
                }
            }
        });
    }
});

function updateProfile() {
    var valid = true;
    var user_name = $("input[name='user_name']").val();
    var state = $("input[name='state']").val();
    var city = $("input[name='city']").val();
    var pincode = $("input[name='pincode']").val();
    var address = $("textarea[name='address']").val();

    $(".message").html("&nbsp;");
    $(".message").css({
        "font-size": "13px",
        "color": "red",
        "float": "left"
    }).hide();

    if (user_name === "") {
        valid = false;
        $("#msg_user_name").html("Enter Your Name").show();
    }

    if (state === "") {
        valid = false;
        $("#msg_state").html("Enter State").show();
    }

    if (city === "") {
        valid = false;
        $("#msg_city").html("Enter City").show();
    }

    if (pincode === "") {
        valid = false;
        $("#msg_pincode").html("Enter Your Pincode").show();
    }

    if (address === "") {
        valid = false;
        $("#msg_address").html("Enter Full Address").show();
    }

  
    return valid;
}




$(document).on('click', '#changePassword', function () {
    if (changePassword()) {
        var id = $("input[name='id']").val();
        var oldPassword = $("input[name='old_password']").val();
        var newPassword = $("input[name='new_password']").val();

        var formData = new FormData();
        formData.append("id", id);
        formData.append("old_password", oldPassword);
        formData.append("new_password", newPassword);

        $.ajax({
            url: siteUrl + "dashboard/changePassword",  
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                console.log(result);
                if (result.indexOf("1") > -1) {
                    window.location.replace(siteUrl + "dashboard/user-dashboard");
                } else if (result.indexOf("2") > -1) {
                    $("#msg_error").html("Old password does not exist").show();
                } else {
                    $("#msg_error").html("Something went wrong").show();
                }
            },
            error: function () {
                $("#msg_error").html("Server error. Try again later.").show();
            }
        });
    }
});

function changePassword() {
    var valid = true;
    var oldPassword = $("input[name='old_password']").val();
    var newPassword = $("input[name='new_password']").val();
    var confirmPassword = $("input[name='confirm_password']").val();

    $(".message").html("&nbsp;");
    $(".message").css({
        "font-size": "13px",
        "color": "red",
        "float": "left"
    }).hide();
    if (oldPassword === "") {
        $("#msg_old_password").html("Enter old password").show();
        valid = false;
    }

    if (newPassword === "") {
        $("#msg_new_password").html("Enter new password").show();
        valid = false;
    }

    if (confirmPassword === "") {
        $("#msg_confirm_password").html("Confirm your password").show();
        valid = false;
    }

    if (newPassword !== "" && confirmPassword !== "" && newPassword !== confirmPassword) {
        $("#msg_confirm_password").html("Passwords do not match").show();
        valid = false;
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