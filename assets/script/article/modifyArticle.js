$("#articleInDb").on("change", function(){
    modifyArticle()   
})

function modifyArticle(){
    let form = new FormData()
    form.append('article', $('#articleInDb').val())

    $.ajax({
        type: "POST",
        url: "assets/lib/article/get_article_by_name.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (response) {
            let res = $.parseJSON(response)
            let article = res[0]['article']
            let price = res[0]['price']

            $('#modifyArticle').val(article)
            $('#modifyArticle').prop('disabled', false);

            $('#modifyPrice').val(price)
            $('#modifyPrice').prop('disabled', false);

            $('#modifyCategory').prop('disabled', false);
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
}

$('#modifyArticleForm').on("submit", function(e){
    e.preventDefault()

    let form = new FormData()
    form.append('article', $('#articleInDb').val())
    form.append('articleModify', $('#modifyArticle').val())
    form.append('price', $('#modifyPrice').val())
    form.append('category', $('#modifyCategory').val())

    $.ajax({
        type: "POST",
        url: "assets/lib/article/modify_article.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (response) {
            $('#message').html('<div class="alert alert-success"><span>L\'article a bien été modifié</span></div>')
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
})