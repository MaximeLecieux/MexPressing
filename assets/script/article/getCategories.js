$.get("assets/lib/article/get_categories.php", function(response){
    let res = $.parseJSON(response)
    res.forEach(element => {
        $('#category').prepend('<option value="'+element.id+'">'+element.name+'</option>')    
        $('#modifyCategory').prepend('<option value="'+element.id+'">'+element.name+'</option>')
    });
})
