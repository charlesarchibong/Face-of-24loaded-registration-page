/*
 * Copyright (c) 2019, Zealnetworks Technologies. All rights reserved.
 * DO NOT ALTER OR REMOVE COPYRIGHT NOTICES OR THIS FILE HEADER.
 *
 * You are not meant to edit or modify this source code unless you are
 * authorized to do so.
 *
 * Please contact me at contact@zealtech.com.ng
 * or visit www.zealtech.com.ng if you need additional information or have any
 * questions.
 */
$(function(){

    $('#example23').dataTable();
    $('#contestForm').submit(function(event){
        event.preventDefault();
        var name = $('#fullName').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var location = $('#location').val();
        var facebookId = $('#facebookId').val();
        var age = $('#age').val();

        if(name.length <= 0){
            swal("Error!!!", "name can not be empty", "error");
        }else if(email.length <= 0){
            swal("Error!!!", "email can not be empty", "error");
        }else if(phone.length <= 0){
            swal("Error!!!", "phone number can not be empty", "error");
        }else if(location.length <= 0){
            swal("Error!!!", "location can not be empty", "error");
        }else if(facebookId.length <= 0){
            swal("Error!!!", "facebook username can not be empty", "error");
        }else if(age.length <= 0){
            swal("Error!!!", "age can not be empty", "error");
        }else{
            $.ajax({
                url: "backend/register",
                method: 'POST',
                cache: false,
                dataType: 'JSON',
                data: {name: name, email: email, phone: phone, location: location, fbhandle: facebookId, age: age},
                beforeSend: function(xhr){
                    $('#registerBtn').html('<i class="fa fa-refresh fa-spin"> </i> Registering');
                    $('#registerBtn').attr("disalbed", true);
                },
                success: function(data, textStatus, jqXHR){
                    if(data.success === true){
                        swal("Success!!!", name + ", you have Successfully registered for Face Of 24loaded 2019, Our Admin will get to you soon.", "success").then(function(){
                            console.log("DOnmeeee");
                            window.location.href = "home";
                        });
                        $('#registerBtn').html('<i class="fa fa-sign-in"> </i> Register');
                    }else{
                        $('#registerBtn').html('<i class="fa fa-sign-in"> </i> Register');
                        $('#registerBtn').removeAttr("disabled");
                        swal("Error!!!", email + " exist already, try another!", "error");
                    }
                },
                error: function(){
                    $('#registerBtn').html('<i class="fa fa-sign-in"> </i> Register');
                    $('#registerBtn').removeAttr("disabled");
                    swal("Error!!!", "Please refresh this page and try again!!!", "error");
                }
            });
        }
    });

    $('.removeBtn').click(function(){
        var email = $(this).attr('email');
        var button = $(this);
        $.ajax({
            url: "backend/register",
            method: 'POST',
            cache: false,
            dataType: 'JSON',
            data: {delete: "true", email: email},
            beforeSend: function(xhr){
                button.html('<i class="fa fa-refresh fa-spin"></i> Removing...');
                button.attr("disabled", true);
            },
            success: function(data, textStatus, jqXHR){
                if(data.success === true){
                    button.html('<i class="fa fa-trash"> </i> Removed');
                }else{
                    button.removeAttr("disabled");
                    button.html('<i class="fa fa-trash"> </i> Error, try again!');
                }
            },
            error: function(){
                button.removeAttr("disabled");
                button.html('<i class="fa fa-trash"> </i> Error, try again!');
            }
        });
    });
    $('.approveBtn').click(function(){
        var email = $(this).attr('email');
        var button = $(this);
        $.ajax({
            url: "backend/register",
            method: 'POST',
            cache: false,
            dataType: 'JSON',
            data: {approve: "true", email: email},
            beforeSend: function(xhr){
                button.html('<i class="fa fa-refresh fa-spin"></i> Approving...');
                button.attr("disabled", true);
            },
            success: function(data, textStatus, jqXHR){
                if(data.success === true){
                    button.html('<i class="fa fa-check"> </i> Approved');
                }else{
                    button.removeAttr("disabled");
                    button.html('<i class="fa fa-check"> </i> Error, try again!');
                }
            },
            error: function(){
                button.removeAttr("disabled");
                button.html('<i class="fa fa-check"> </i> Error, try again!');
            }
        });
    });

});

