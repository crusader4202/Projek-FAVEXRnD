$(document).ready(function() {
    $.validator.addMethod("exactlength", function(value, element, param) {
        return this.optional(element) || value.length == param;
        });
    $.validator.addMethod("passwordPattern", function(value, element) {
        return this.optional(element) || value == value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/);
        });
    


    $(".login-form").validate({
        rules: {
            id: {
              required: true,
              exactlength: 10
            },
            password: {
                required: true
            }
          },
          messages: {
            
            id: {
              required: "Please input this field",
              exactlength: "ID must be 10 digits"
            },
            password: {
                required: "Please input this field",
            }
          },
          errorPlacement: function(error, element) {
            error.insertAfter(element);
            error.addClass('errorMsg');  
            error.addClass('text-regular');  
          }
        //   unhighlight: function(element) {  
        //     $(element).addClass("valid");
        //     $(element).parent().removeClass('errorBorder');
        //     $(element).parent().children(".symbol").css("display", "none");
        //     $(element).parent().parent().children(".symbol").css("display", "none");
        //   }
    });

    $(".signup-form").validate({
        rules: {
            name: {
                required: true
            },
            id: {
              required: true,
              exactlength: 10
            },
            password2: {
                required: true,
                passwordPattern: true
            },
            password_confirmation: {
                required: true,
                equalTo: "#password2"
            },
            gender: {
                required: true
            }
          },
          messages: {
            name: {
                required: "Please input this field"
            },
            id: {
              required: "Please input this field",
              exactlength: "ID must be 10 digits"
            },
            password2: {
                required: "Please input this field",
                passwordPattern: "Password must contain at least a lower case, an upper case, a number, and 8 digits"
            },
            password_confirmation: {
                required: "Please input this field",
                equalTo: "Password do not match"
            },
            gender: {
                required: "Please input this field"
            }
          },
          errorPlacement: function(error, element) {
            if (element.attr("type") == "radio"){
                error.insertAfter(element.parent().parent());
                error.addClass('errorMsg2');
                error.addClass('text-regular'); 
                // element.parent().parent().children(".symbol").css("display", "block");
            }
            else{
                error.insertAfter(element);
                error.addClass('errorMsg2');  
                error.addClass('text-regular'); 
            }
             
          }
        //   unhighlight: function(element) {  
        //     $(element).addClass("valid");
        //     $(element).parent().removeClass('errorBorder');
        //     $(element).parent().children(".symbol").css("display", "none");
        //     $(element).parent().parent().children(".symbol").css("display", "none");
        //   }
    });



});