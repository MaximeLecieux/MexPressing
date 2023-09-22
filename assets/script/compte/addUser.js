$('#addUserForm').on("submit", function(e){
    e.preventDefault()

    let form = new FormData()
    form.append('identifiant', $('#identifiant').val())

    $.ajax({ // check if the identifier is not already in the database 
        type: "POST",
        url: "assets/lib/compte/verify_user.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (response) {
            if(response != "false"){
                $('#messageIdentifiant').html('Cet identifiant est déjà utilisé')
                $('#messageIdentifiant').css("color", "red")
            } else { // send user if all is ok
                let formData = new FormData()
                formData.append('identifiant', $('#identifiant').val())
                formData.append('fonction', $('#fonction').val())
                formData.append('password', $('#password').val())
                
                $.ajax({
                    type: "POST",
                    url: "assets/lib/compte/add_user.php",
                    data: formData,
                    processData: false,
                    contentType: false,  
                    success: function (response) {
                        $('#message').html('<div class="alert alert-success"><span>Le compte utilisateur a bien été enregistré</span></div>')
                    },
            
                    error: function (response) {
                        $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
                    }
                })        
            }
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
})