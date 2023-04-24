// Validation Custom Rules
jQuery.validator.addMethod("strongPassword",function(value){
    return /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(value)},"Use 8 or more characters with a mix of uppercase, lowercase letters & numbers.");

// END

// Login Form Validation
$('#login_form').validate({
    rules:{
        email:{
            required:true,
            email:true,
        },
        password:{
            required:true,
        }
    }
});
// Register Form Validation
$('#register_form').validate({
    rules:{
        name:{
            required:true,
        },
        email:{
            required:true,
            email:true,
        },
        password:{
            required:true,
            strongPassword:true,
        }
    }
});

// Forgot Password Validation
$('#forgot_password_form').validate({
    rules:{
        email:{
            required:true,
            email:true,
        }
    }
});

// New Password Validation
$('#setup_new_password').validate({
    rules:{
        email:{
            required:true,
            email:true,
        },
        password:{
            required:true,
            strongPassword:true,
        },
        password_confirmation:{
            equalTo : "#password"
        }
    }
});


