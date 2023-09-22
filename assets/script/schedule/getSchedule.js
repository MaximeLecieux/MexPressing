$.get("assets/lib/schedule/get_day.php", function(response){
    let res = $.parseJSON(response)
    res.forEach(element => {
        $('#day').prepend('<option value="'+element.day+'">'+element.day+'</option>')  
    });
})