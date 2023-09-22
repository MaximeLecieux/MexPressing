<?php
require_once('templates/dashboard_header.php');

if(!isset($_SESSION['user'])){
    header('Location: login.php');
}
?>

<h1 class="text-center mb-3">Horaires d'ouverture</h1>

<div id="message"></div>

<div class="rounded bg-dark-subtle p-4 mb-4 text-center">
    <form method="POST" id="scheduleForm">   
        <div class="mb-3">
            <label for="day" class="form-label">Jour</label>
            <select name="day" id="day" class="form-select">
                <option selected>Veuillez choisir un jour</option>
                <!-- Option is genered by getShedule.js -->
            </select>
        </div>
        <div class="mb-4">
            <label for="morning" class="form-label">Horaires matin</label>
            <input type="text" id="morning" name="morning" class="form-control" disabled>
            <span id="messageMorning"></span>
        </div>
        <div class="mb-4">
            <label for="afternoon" class="form-label">Horaires après-midi</label>
            <input type="text" id="afternoon" name="afternoon" class="form-control" disabled>
            <span id="messageAfternoon"></span>
        </div>
        <button type="submit" id="addArticle" name="addArticle" class="btn btn-primary">Enregister</button>
    </form>

</div>

<script src="assets/script/schedule/getSchedule.js"></script>
<script src="assets/script/schedule/modifySchedule.js"></script>
<script src="assets/script/schedule/verifyScheduleForm.js"></script>

<?php
    require_once('templates/dashboard_footer.php');
?>