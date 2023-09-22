$('#deleteArticleForm').on("submit", function(e){
    e.preventDefault()

    let form = new FormData()
    form.append('article', $('#articles').val())

    $.ajax({
        type: "POST",
        url: "assets/lib/article/delete_article.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (response) {
            $('#message').html('<div class="alert alert-success"><span>L\'article a bien été supprimé</span></div>')
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
})