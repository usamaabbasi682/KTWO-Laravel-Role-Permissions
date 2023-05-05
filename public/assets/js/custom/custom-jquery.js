$(document).ready(function () {
    jQuery.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
    });

    // Users page code for deleting multiple users
    var del_ids=[];
    $('#delete_selected').click(function() 
    {
        if (confirm('Are you sure you want to delete selected users?')) {
            var url = $('#delete_all_users_route').val();
            $('input:checkbox[name="delete_selected_user"]:checked').each(function() {
                var data= $(this).val();
                del_ids.push(data);
            });   

            $.ajax({
                type: "DELETE",
                url: url,
                data:{user_ids:del_ids},
                error: function (request, status, error) {
                    alert(status.responseText);
                },
                success: function (response) {
                    if (response) {
                        alert('Users deleted successfully.');
                        location.reload();
                    } else {
                        alert('This action is unauthorized.');
                    }
                }
            });  
        }
    });
    // End

    // Roles View page code for select multiple permissions
    $('#kt_roles_select_all').click(function () {    
        $('input:checkbox').prop('checked', this.checked);    
    });
    //End

    // Roles view page , Search permissions 
    $('#items-to-search > div').jqSearch({
        searchInput:'#search',
        searchTarget:'data',
        animation:'slide'
      });
    // End

    // setTimeout(function(){ 
    //     $('#email_address_for_change_email').hide(); 
    // }, 3000);

    // Updating User Email
    $('#btn_update_email').click(function(e) { 
        e.preventDefault();
        var $url = $('#form_change_email').attr('action');
        var $email = $('input:text[name=email]').val();
        var $password = $('input:password[name=confirm_password_for_email]').val();
        $.ajax({
            type: "POST",
            url: $url,
            data: {email:$email,password:$password},
            success: function (response) {
                if (response == '1') {
                    $('#email_address_for_change_email').hide();
                    $('#show_success_msg').css('display','');
                    $('input:password[name=confirm_password_for_email]').val('');
                    setTimeout(function(){ 
                        location.reload();
                    }, 3000);
                } else {
                    $('#email_address_for_change_email').html('<strong>'+response+'</strong>');
                }
            }
        });
    });
    //End

    // Change Password
    $('#btn_change_password').click(function() {
        var $url = $('#update_pwd').attr('action');
        var $current_password = $('#currentpassword').val();
        var $new_password = $('#newpassword').val();
        var $confirm_password = $('#confirmpassword').val();
        $.ajax({
            type: "POST",
            url: $url,
            data: {current_password:$current_password,new_password:$new_password,confirm_password:$confirm_password},
            success: function (response) {
                if (response == '1') {
                    $('#email_address_for_change_pwd').hide();
                    $('#show_success_msg_for_change_pwd').css('display','');
                    $('#currentpassword').val('');
                    $('#newpassword').val('');
                    $('#confirmpassword').val('');
                    setTimeout(function(){ 
                        location.reload();
                    }, 3000);
                } else {
                    $('#email_address_for_change_pwd').html('<strong>'+response+'</strong>');
                }
            }
        });
    });
    // End

    // Convert each letter into lower case in laravel permissions
    // $('#permission_field').keyup(function(){
    //     $va=$(this).val($(this).val().toLowerCase());    
    //     $(this).val($(this).val().replace(/ /g,'-'));  
    //     $(this).val($(this).val().replace(/_/g,'-'));  
    // });

    // $('#permission_field').on('input', function(event) {
    //     var words = $(this).val().split('-');
    //     if (words.length > 3) {
    //       $(this).val(words.slice(0,3).join('-'));
    //     } else if (words.length === 3) {
    //       $(this).val(words.join('')); 
    //     }
    // });

    // $('#modelName').on('keyup', function(event) {
    //     var words = $(this).val().split('-');
    //     if (words.length === 1 && event.keyCode !== 8) {
    //       event.preventDefault();
    //     }
    // });

    $('#modelName').keyup(function(){
        $va=$(this).val($(this).val().toLowerCase());
    });

    $('#modelName').mouseleave(function () { 
        $(this).blur();
        var inputVal = $(this).val();
        var singularWord = pluralize.singular(inputVal);
        $(this).val(singularWord);
    });

    $('#modelName').on('keypress', function(event) {
        // Get the current value of the input field
        var value = $(this).val();
        // Count the number of spaces in the input
        var numSpaces = value.split(' ').length - 1;
        // If there is already one space in the input, prevent further input
        if (numSpaces >= 1 && event.keyCode !== 8) {
          event.preventDefault();
        }
    });

    $('#modelName').on('keydown', function(event) {
        // If the spacebar key is pressed, prevent default behavior
        if (event.keyCode === 32) {
            event.preventDefault();
        }
    });

    $('#appName,#appUrl').on('keydown', function(event) {
        if (event.keyCode === 32) {
            event.preventDefault();
        }
    });

    $('#appName,#appUrl').mouseleave(function () { 
        $(this).blur();
    });

    $('#reloadhomePage').click(function() {
        window.location.reload();
    });
});
