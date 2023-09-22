$.get("assets/lib/compte/get_user.php", function(response){
    let res = $.parseJSON(response)
    res.forEach(element => {
        $('#table').prepend('<tr><td>'+element.identifiant+'</td><td>'+element.role+'</td></tr>')
        $('#user').prepend('<option value="'+element.identifiant+'">'+element.identifiant+'</option>')
        $('#username').prepend('<option value="'+element.identifiant+'">'+element.identifiant+'</option>')
    });
})
