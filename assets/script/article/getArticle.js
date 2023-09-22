$.get("assets/lib/article/get_article.php", function(response){
    let res = $.parseJSON(response)
    res.forEach(element => {
        $('#table').prepend('<tr><td>'+element.name+'</td><td>'+element.article+'</td><td>'+element.price+'</td></tr>')
        $('#articles').prepend('<option value="'+element.article+'">'+element.article+'</option>')
        $('#articleInDb').prepend('<option value="'+element.article+'">'+element.article+'</option>')
    });
})
