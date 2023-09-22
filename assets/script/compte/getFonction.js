$.get("assets/lib/compte/get_fonction.php", function(response){
    let res = $.parseJSON(response)
    res.forEach(element => {
        $('#fonction').prepend('<option value="'+element.id+'">'+element.role+'</option>')
    });
})