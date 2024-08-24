$(document).ready(function(){
    $(".opt_delete_account a").click(function(){
        $("#dialog-delete-account").dialog('open');
    });

    $("#dialog-delete-account").dialog({
        autoOpen: false,
        modal: true,
        buttons: [
            {
                text: benny.langs.delete,
                click: function() {
                    window.location = benny.base_url + '?page=user&action=delete&id=' + benny.user.id  + '&secret=' + benny.user.secret;
                }
            },
            {
                text: benny.langs.cancel,
                click: function() {
                    $(this).dialog("close");
                }
            }
        ]
    });
});