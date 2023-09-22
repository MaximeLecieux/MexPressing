function verifyNewPassword(){
    newPassword = $("#newPassword").val()
    if(newPassword.trim() === ""){
        $('#messageNewPassword').html("Un mot de passe est requis")
        $('#messageNewPassword').css("color", "red")
        return false
    } else if (validatePasswordRegex.test(newPassword) === false){
        $('#messageNewPassword').html("Un mot de passe valide est requis (8 caractères minimum, 1 lettre majuscule, 1 lettre minuscule, 1 chiffre et 1 caractère spécial)")
        $('#messageNewPassword').css("color", "red")
        return false
    } else {
        $('#messageNewPassword').html("Mot de passe valide")
        $('#messageNewPassword').css("color", "green")
        return true
    }
}

function verifyNewPasswordCheck(){
    newPassword = $("#newPassword").val()
    newPasswordCheck = $("#newPasswordCheck").val()
    if(newPasswordCheck.trim() === ""){
        $('#messageNewPasswordCheck').html("Veuillez confirmer le mot de passe")
        $('#messageNewPasswordCheck').css("color", "red")
        return false
    } else if (newPassword.trim() != newPasswordCheck.trim()){
        $('#messageNewPasswordCheck').html("Veuillez indiquer le même mot de passe")
        $('#messageNewPasswordCheck').css("color", "red")
        return false
    } else {
        $('#messageNewPasswordCheck').html("Mot de passe valide")
        $('#messageNewPasswordCheck').css("color", "green")
        return true
    }
}

$("#newPassword").on("blur", function(){
    verifyNewPassword()   
})

$("#newPasswordCheck").on("blur", function(){
    verifyNewPasswordCheck()
    verifyModifyPasswordForm()  
})

function verifyModifyPasswordForm(){

    let newPassword = verifyNewPassword()
    let newPasswordCheck = verifyNewPasswordCheck()
    if(newPassword && newPasswordCheck === true){
        $('#modifyPassword').removeClass('disabled')
    }
}