function verifyNameModifyArticle(){
    article = $("#modifyArticle").val()
    if(article.trim() === ""){
        $('#messageModifyArticle').html("Un nom est requis")
        $('#messageModifyArticle').css("color", "red")
        return false
    } else if (validationArticleRegex.test(article) === false){
        $('#messageModifyArticle').html("Veuillez saisir un nom valide")
        $('#messageModifyArticle').css("color", "red")
        return false
    } else {
        $('#messageModifyArticle').html("Nom d'article valide")
        $('#messageModifyArticle').css("color", "green")
        return true
    }
}

$("#modifyArticle").on("blur", function(){
    verifyNameModifyArticle()   
})

$("#modifyCategory").on("change", function(){
    verifyModifyArticleForm()   
})

function verifyModifyArticleForm(){
    let article = verifyNameModifyArticle()

    if (article === true){
        $('#modifyArticleBtn').removeClass('disabled')
    }
}