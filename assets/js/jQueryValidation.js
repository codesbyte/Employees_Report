  
// When the browser is ready...
$.validator.addMethod("user_email_not_same", function(value, element) {
    return $('#txtEmail').val() !== $('#txtAlternateEmail').val();
}, "Email and Alternate email should not be same");

$.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[\sa-z]+$/i.test(value);
},"special character and numeric value not allowed"); 

/* employee validation code start */
$(function (){
    $("#loginForm").validate({
        rules:
        {
            txtEmail:{
                required: true,
                email: true
            },   
            txtPassword:{
                required:true
            }
        },
        message:
        {
            txtEmail:{
                  required:"Please enter email address",
                  email: "Invalid Email Address"
            },
            txtPassword:{
              required:"Please enter password"
            }
        },
        submitHandler: function(form) {
          form.submit();
        }
    });
});

$(function (){
    $("#ForgetPassword").validate({
        rules:{
            txtEmail:{
                required: true,
                email: true
            }
        },
        message:{
           txtEmail:{
                required:"Enter email",
                email: "Please enter a valid email address"
           }
        },
        submitHandler: function(form) {
          form.submit();
        }
    });
});

$(function() {
  $("#ResetPasswordForm").validate({
      rules: {
          txtNewPassword: {
             required:true,
             minlength: 5
          },
           txtConfirmNewPassword: {
              required:true,
              equalTo:"#txtNewPassword"

          }
       },
      messages: {
          txtNewPassword: {
              required:"Enter password",
              minlength: "Your password must be at least 5 characters long"
          },
           txtConfirmNewPassword: {
              required:"Enter confirm password",
              equalTo:"Confirm password same as new password"

          }
      },
      submitHandler: function(form) {
          form.submit();
      }
  });
});

$(function() {
  $("#sendTask").validate({
      // Specify the validation rules
      rules: 
      {
          txtTaskDate: {
              required: true
          },
          txtInTime: {
             required:true
          },
          txtOutTime: {
              required:true
          },
          txtTaskDescription: {
              required: true
          }
      },
      messages: 
      {
          txtTaskDate: {
             required:"Please enter task date"
          },
          txtInTime: {
              required:"Please enter in time"
          },
          txtOutTime: {
              required:"Please enter out time"
          },
          txtTaskDescription:{
              required:"Please enter task description"
          }
      },
      submitHandler: function(form) {
          form.submit();
      }
  });
});

$(function() {
  $("#ChangePassword").validate({
      rules: {
          txtCurrentPassword: {
             required:true
          },
          txtNewPassword: {
             required:true,
             minlength: 5
          },
           txtConfirmPassword: {
              required:true,
              equalTo:"#single-input_1"
          }
       },
      messages: {
          txtCurrentPassword: {
              required:"Enter password"
          },
          txtNewPassword: {
              required:"Enter new password",
              minlength: "Your password must be at least 5 characters long"
          },
           txtConfirmPassword: {
              required:"Enter confirm password",
              equalTo:"Confirm password same as new password"

          }
      },
      submitHandler: function(form) {
          form.submit();
      }
  });
});

$(function() {
  $("#profile").validate({
      // Specify the validation rules
      rules: 
      {
          txtEmail: {
              required: true,
              email: true
          },
          txtFirstName: {
             required:true,
             lettersonly:true
          },
          txtLastName: {
              required:true,
              lettersonly:true
          },
          txtDesignation: {
              required: true
          },
          txtContactNo: {
              required:true,
              number:true,
              maxlength:10,
              minlength:10
          }
      },
      messages: 
      {
          txtEmail: {
             required:"Please enter email id",
             email: "Please enter a valid email address"
          },
          txtFirstName: {
              required:"Enter first name"
          },
          txtLastName: {
              required:"Enter last name"

          },
          txtDesignation:{
              required:"Enter Designation name"
          },
          txtContactNo: {
              required: "Please enter your mobile ",
              minlength: "Your mobile no. must be at least 10 Number",
              maxlength: "Max. length should be 10 only"
          }
      },
      submitHandler: function(form) {
          form.submit();
      }
  });
});
/* employee validation code close */
