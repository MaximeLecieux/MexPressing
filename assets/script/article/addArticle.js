$('#addArticleForm').on("submit", function(e){
    e.preventDefault()

    let form = new FormData()
    form.append('article', $('#article').val())
    form.append('price', $('#price').val())
    form.append('category', $('#category').val())

    $.ajax({
        type: "POST",
        url: "assets/lib/article/add_article.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (response) {
            $('#message').html('<div class="alert alert-success"><span>L\'article a bien été enregistré</span></div>')
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
})