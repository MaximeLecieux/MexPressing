$('#deleteUserForm').on("submit", function(e){
    e.preventDefault()

    let form = new FormData()
    form.append('identifiant', $('#user').val())

    $.ajax({
        type: "POST",
        url: "assets/lib/compte/delete_user.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (response) {
            $('#message').html('<div class="alert alert-success"><span>Le compte utilisateur a bien été supprimé</span></div>')
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    }) 
})