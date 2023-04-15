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
      
});