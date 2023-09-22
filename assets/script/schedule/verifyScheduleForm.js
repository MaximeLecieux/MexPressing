function verifyMorningSchedule(){
    morning = $("#morning").val()
    if(morning.trim() === ""){
        $('#messageMorning').html("Un horaire est requis")
        $('#messageMorning').css("color", "red")
        return false
    } else {
        $('#messageMorning').html("Horaire valide")
        $('#messageMorning').css("color", "green")
        return true
    }
}

function verifyAfternoonSchedule(){
    afternoon = $("#afternoon").val()
    if(afternoon.trim() === ""){
        $('#messageAfternoon').html("Un horaire est requis")
        $('#messageAfternoon').css("color", "red")
        return false
    } else {
        $('#messageAfternoon').html("Horaire valide")
        $('#messageAfternoon').css("color", "green")
        return true
    }
}

$("#morning").on("blur", function(){
    verifyMorningSchedule()   
})

$("#afternoon").on("blur", function(){
    verifyAfternoonSchedule()   
})