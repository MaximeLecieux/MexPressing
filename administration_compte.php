<?php
    require_once('templates/dashboard_header.php');

    if(!isset($_SESSION['user'])){
        header('Location: login.php');
    }
?>
<h1 class="text-center mb-3">Comptes utilisateur</h1>

<div id="message"></div>

<div class="rounded bg-dark-subtle p-4 mb-4 text-center">
    <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#addUserModal">Ajouter un utilisateur</button>
    <button type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#deleteUserModal">Supprimer un utilisateur</button>
    <button type="button" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#modifyPasswordModal">Modifier un mot de passe</button>
</div>

<div class="rounded bg-dark-subtle p-4 mb-4 text-center">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Identifiant</th>
                <th scope="col">Fonction</th>
            </tr>
        </thead>
        <tbody id="table">
            <!-- Table is genered by getUser.js  -->
        </tbody>
    </table>
</div>

<!--  Modal for add user in database -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un compte utilisateur</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="addUserForm">
                    <div class="mb-3">
                        <label for="identifiant" class="form-label">Identifiant</label>
                        <input type="text" class="form-control" id="identifiant" name="identifiant" aria-describedby="identifiant">
                        <span id="messageIdentifiant"></span>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" id="password" name="password" class="form-control">
                        <span id="messagePassword"></span>
                    </div>
                    <div class="mb-4">
                        <label for="passwordcheck" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" id="passwordcheck" name="passwordcheck" class="form-control">
                        <span id="messagePasswordCheck"></span>
                    </div>
                    <div class="mb-3">
                        <label for="fonction" class="form-label">Fonction</label>
                        <select name="fonction" id="fonction" class="form-select">
                            <option selected>Veuillez choisir une fonction</option>
                            <!-- Option is genered by getFonction.js -->
                        </select>
                    </div>
                    <button type="submit" id="addUser" name="addUser" class="btn btn-primary disabled">Enregister</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--  Modal for delete user in database -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer un compte utilisateur</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="deleteUserForm">
                    <div class="mb-3">
                        <label for="user" class="form-label">Utilisateur</label>
                        <select name="user" id="user" class="form-select">
                            <!-- Option is genered by getUser.js -->
                        </select>
                    </div>
                    <button type="submit" name="deleteUser" class="btn btn-primary">Enregister</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--  Modal for modify user password in database -->
<div class="modal fade" id="modifyPasswordModal" tabindex="-1" aria-labelledby="modifyPasswordModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier un compte utilisateur</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="modifyPasswordForm">
                    <div class="mb-3">
                        <label for="username" class="form-label">Utilisateur</label>
                        <select name="username" id="username" class="form-select">
                            <!-- Option is genered by getUser.js -->
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="newPassword" class="form-label">Nouveau mot de passe</label>
                        <input type="password" id="newPassword" name="newPassword" class="form-control">
                        <span id="messageNewPassword"></span>
                    </div>
                    <div class="mb-4">
                        <label for="newPasswordCheck" class="form-label">Confirmer le nouveau mot de passe</label>
                        <input type="password" id="newPasswordCheck" name="newPasswordCheck" class="form-control">
                        <span id="messageNewPasswordCheck"></span>
                    </div>
                    <button type="submit" name="modifyPassword" id="modifyPassword" class="btn btn-primary disabled">Enregister</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="assets/script/compte/getFonction.js"></script>
<script src="assets/script/compte/verifyAddUserForm.js"></script>
<script src="assets/script/compte/addUser.js"></script>
<script src="assets/script/compte/getUser.js"></script>
<script src="assets/script/compte/deleteUser.js"></script>
<script src="assets/script/compte/verifyModifyPasswordForm.js"></script>
<script src="assets/script/compte/modifyPassword.js"></script>

<?php
    require_once('templates/dashboard_footer.php');
?>