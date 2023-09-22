let validatePasswordRegex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/ // Regex for strong password
let validationIdentifiantRegex = /^[a-zA-Z-\s]+$/ // Regex for validation name

function verifyIdentifiant(){
        identifiant = $("#identifiant").val()
        if(identifiant.trim() === ""){
            $('#messageIdentifiant').html("Un identifiant est requis")
            $('#messageIdentifiant').css("color", "red")
            return false
        } else if (validationIdentifiantRegex.test(identifiant) === false){
            $('#messageIdentifiant').html("Veuillez saisir un identifiant valide")
            $('#messageIdentifiant').css("color", "red")
            return false
        } else {
            $('#messageIdentifiant').html("Identifiant valide")
            $('#messageIdentifiant').css("color", "green")
            return true
        }
}

function verifyPassword(){
    password = $("#password").val()
    if(password.trim() === ""){
        $('#messagePassword').html("Un mot de passe est requis")
        $('#messagePassword').css("color", "red")
        return false
    } else if (validatePasswordRegex.test(password) === false){
        $('#messagePassword').html("Un mot de passe valide est requis (8 caractères minimum, 1 lettre majuscule, 1 lettre minuscule, 1 chiffre et 1 caractère spécial)")
        $('#messagePassword').css("color", "red")
        return false
    } else {
        $('#messagePassword').html("Mot de passe valide")
        $('#messagePassword').css("color", "green")
        return true
    }
}

function verifyPasswordCheck(){
    password = $("#password").val()
    passwordCheck = $("#passwordcheck").val()
    if(passwordCheck.trim() === ""){
        $('#messagePasswordCheck').html("Veuillez confirmer le mot de passe")
        $('#messagePasswordCheck').css("color", "red")
        return false
    } else if (password.trim() != passwordCheck.trim()){
        $('#messagePasswordCheck').html("Veuillez indiquer le même mot de passe")
        $('#messagePasswordCheck').css("color", "red")
        return false
    } else {
        $('#messagePasswordCheck').html("Mot de passe valide")
        $('#messagePasswordCheck').css("color", "green")
        return true
    }
}

$("#identifiant").on("blur", function(){
    verifyIdentifiant()   
})

$("#password").on("blur", function(){
    verifyPassword()   
})

$("#passwordcheck").on("blur", function(){
    verifyPasswordCheck()   
})

$("#fonction").on("change", function(){
    verifyAddUserForm()   
})

function verifyAddUserForm(){
    let identifiant = verifyIdentifiant()
    let password = verifyPassword()
    let passwordcheck = verifyPasswordCheck()

    if (identifiant && password && passwordcheck === true){
        $('#addUser').removeClass('disabled')
    }
}