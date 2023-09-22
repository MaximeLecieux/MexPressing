$.get("assets/lib/schedule/get_horaires.php", function(response){
    let res = $.parseJSON(response)
    res.forEach(element => {
        $('#schedule').prepend('<li class="p-2"><ul class="row justify-content-center p-0"><li class="col-md-6">'+element.day+'</li><li class="col-md-6">'+element.morning+'<br>'+element.afternoon+'</li></ul></li>')   
    });
})