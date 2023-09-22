$.get("assets/lib/article/set_articles_in_front_page.php", function(response){
    let res = $.parseJSON(response)
    setCategoriesInPage(res.categories)
    setFirstCatInPage(res.first, res.categories)
    setSecondCatInPage(res.second, res.categories)
    setThirdCatInPage(res.third, res.categories)
    setFourCatInPage(res.four, res.categories)
    setFiveCatInPage(res.five, res.categories)
    setSixCatInPage(res.six, res.categories)
    setSevenCatInPage(res.seven, res.categories)    
})

function setCategoriesInPage(categories){
    categories.forEach(element => {
        $('#card').prepend('<div class="masonry-item"><div class="card mb-3 mt-3"><div class="class-header bg-secondary-subtle"><h3>'+element.name+'</h3></div><ul class="list-group list-group-flush" id="'+element.id+'"></ul></div></div>')
    });
}

function setFirstCatInPage(first, category){
    category = category[0].id
    first.forEach(element => {
        $('#1').prepend('<li class="list-group-item d-flex justify-content-between"><span>'+element.article+'</span><span>'+element.price+'</span></li>')
    });

}

function setSecondCatInPage(second, category){
    category = category[1].id
    second.forEach(element => {
        $('#2').prepend('<li class="list-group-item d-flex justify-content-between"><span>'+element.article+'</span><span>'+element.price+'</span></li>')
    });

}

function setThirdCatInPage(third, category){
    category = category[2].id
    third.forEach(element => {
        $('#3').prepend('<li class="list-group-item d-flex justify-content-between"><span>'+element.article+'</span><span>'+element.price+'</span></li>')
    });

}

function setFourCatInPage(four, category){
    category = category[3].id
    four.forEach(element => {
        $('#4').prepend('<li class="list-group-item d-flex justify-content-between"><span>'+element.article+'</span><span>'+element.price+'</span></li>')
    });

}

function setFiveCatInPage(five, category){
    category = category[4].id
    five.forEach(element => {
        $('#5').prepend('<li class="list-group-item d-flex justify-content-between"><span>'+element.article+'</span><span>'+element.price+'</span></li>')
    });

}

function setSixCatInPage(six, category){
    category = category[5].id
    six.forEach(element => {
        $('#6').prepend('<li class="list-group-item d-flex justify-content-between"><span>'+element.article+'</span><span>'+element.price+'</span></li>')
    });

}

function setSevenCatInPage(seven, category){
    category = category[6].id
    seven.forEach(element => {
        $('#7').prepend('<li class="list-group-item d-flex justify-content-between"><span>'+element.article+'</span><span>'+element.price+'</span></li>')
    });

}