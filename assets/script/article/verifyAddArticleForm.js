function verifyNameArticle(){
        article = $("#article").val()
        if(article.trim() === ""){
            $('#messageArticle').html("Un nom est requis")
            $('#messageArticle').css("color", "red")
            return false
        }else {
            $('#messageArticle').html("Nom d'article valide")
            $('#messageArticle').css("color", "green")
            return true
        }
}


$("#article").on("blur", function(){
    verifyNameArticle()   
})


$("#category").on("change", function(){
    verifyAddArticleForm()   
})

function verifyAddArticleForm(){
    let article = verifyNameArticle()

    if (article === true){
        $('#addArticle').removeClass('disabled')
    }
}