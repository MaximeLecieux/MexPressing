$("#day").on("change", function(){
    modifySchedule()   
})

function modifySchedule(){
    let form = new FormData()
    form.append('day', $('#day').val())

    $.ajax({
        type: "POST",
        url: "assets/lib/schedule/get_schedule.php",
        data: form,
        processData: false,
        contentType: false,  
        success: function (response) {
            let res = $.parseJSON(response)
            let morning = res[0]['morning']
            let afternoon = res[0]['afternoon']

            $('#morning').val(morning)
            $('#morning').prop('disabled', false);

            $('#afternoon').val(afternoon)
            $('#afternoon').prop('disabled', false);
        },

        error: function (response) {
            $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
        }
    })
}

$('#scheduleForm').on("submit", function(e){
    e.preventDefault()

    let valideMorning = verifyMorningSchedule()
    let valideAfternoon = verifyAfternoonSchedule()

    if(valideMorning && valideAfternoon === true){
        let form = new FormData()
        form.append('day', $('#day').val())
        form.append('morning', $('#morning').val())
        form.append('afternoon', $('#afternoon').val())

        $.ajax({
            type: "POST",
            url: "assets/lib/schedule/modify_schedule.php",
            data: form,
            processData: false,
            contentType: false,  
            success: function (response) {
                $('#message').html('<div class="alert alert-success"><span>Les horaires ont bien été modifiés</span></div>')
            },
    
            error: function (response) {
                $('#message').html('<div class="alert alert-danger"><span>Une erreur c\'est produite</span></div>')
            }
        })
    } else {
        $('#message').html('<div class="alert alert-danger"><span>Vous ne remplissez pas les conditions</span></div>')
    }
})