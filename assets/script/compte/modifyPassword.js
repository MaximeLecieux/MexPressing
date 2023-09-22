$('#modifyPasswordForm').on("submit", function(e){
    e.preventDefault()

    let form = new FormData()
    form.append('identifiant', $('#username').val())
    form.append('newPassword', $('#newPassword').val())

    $.ajax({
        type: "POST",
        url: "assets/lib/compte/modify_password.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (response) {
            $('#message').html('<div class="alert alert-success"><span>Le mot de passe a bien été modifié</span></div>')
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    }) 

})