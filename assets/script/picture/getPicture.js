$.get("assets/lib/picture/set_images_in_front_page.php", function(response){
    let res = $.parseJSON(response)
    res.forEach(element => {
        $('#carousel').prepend('<div class="carousel-item" data-bs-interval="3000"><img src="uploads/'+element.url+'" class="d-block w-100" alt="'+element.url+'"></div>')
    });
})