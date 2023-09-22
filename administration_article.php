<?php
require_once('templates/dashboard_header.php');

if(!isset($_SESSION['user'])){
    header('Location: login.php');
}
?>

<h1 class="text-center mb-3">Base de données articles</h1>

<div id="message"></div>

<div class="rounded bg-dark-subtle p-4 mb-4 text-center">
    <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#addArticleModal">Ajouter un article</button>
    <button type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#deleteArticleModal">Supprimer un article</button>
    <button type="button" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#modifyArticleModal">Modifier un article</button>
</div>

<div class="rounded bg-dark-subtle p-4 mb-4 text-center">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Catégorie</th>
                <th scope="col">Article</th>
                <th scope="col">Prix</th>
            </tr>
        </thead>
        <tbody id="table">
            <!-- Table is genered by getArticle.js  -->
        </tbody>
    </table>
</div>

<!--  Modal for add article in database -->
<div class="modal fade" id="addArticleModal" tabindex="-1" aria-labelledby="addArticleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="addArticleForm">
                    <div class="mb-4">
                        <label for="article" class="form-label">Nom de l'article</label>
                        <input type="text" id="article" name="article" class="form-control">
                        <span id="messageArticle"></span>
                    </div>
                    <div class="mb-4">
                        <label for="price" class="form-label">Prix</label>
                        <input type="text" id="price" name="price" class="form-control">
                        <span id="messagePrice"></span>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Catégorie</label>
                        <select name="category" id="category" class="form-select">
                            <option selected>Veuillez choisir une categorie</option>
                            <!-- Option is genered by getCategories.js -->
                        </select>
                    </div>
                    <button type="submit" id="addArticle" name="addArticle" class="btn btn-primary disabled">Enregister</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--  Modal for delete article in database -->
<div class="modal fade" id="deleteArticleModal" tabindex="-1" aria-labelledby="deleteArticleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer un article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="deleteArticleForm">
                    <div class="mb-3">
                        <label for="articles" class="form-label">Article</label>
                        <select name="articles" id="articles" class="form-select">
                            <option selected>Veuillez choisir un article</option>
                            <!-- Option is genered by getArticle.js -->
                        </select>
                    </div>
                    <button type="submit" id="deleteArticle" name="deleteArticle" class="btn btn-primary">Enregister</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--  Modal for modify article in database -->
<div class="modal fade" id="modifyArticleModal" tabindex="-1" aria-labelledby="modifyArticleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier un article</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="modifyArticleForm">
                    <div class="mb-3">
                        <label for="articleInDb" class="form-label">Article à modifier</label>
                        <select name="articleInDb" id="articleInDb" class="form-select">
                            <option selected>Veuillez choisir un article</option>
                            <!-- Option is genered by getCategories.js -->
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="modifyArticle" class="form-label">Nom de l'article</label>
                        <input type="text" id="modifyArticle" name="modifyArticle" class="form-control" disabled>
                        <span id="messageModifyArticle"></span>
                    </div>
                    <div class="mb-4">
                        <label for="modifyPrice" class="form-label">Prix</label>
                        <input type="text" id="modifyPrice" name="modifyPrice" class="form-control" disabled>
                        <span id="messageModifyPrice"></span>
                    </div>
                    <div class="mb-3">
                        <label for="modifyCategory" class="form-label">Catégorie</label>
                        <select name="modifyCategory" id="modifyCategory" class="form-select" disabled>
                            <!-- Option is genered by getCategories.js -->
                        </select>
                    </div>
                    <button type="submit" id="modifyArticleBtn" name="modifyArticleBtn" class="btn btn-primary disabled">Enregister</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="assets/script/article/getArticle.js"></script>
<script src="assets/script/article/getCategories.js"></script>
<script src="assets/script/article/verifyAddArticleForm.js"></script>
<script src="assets/script/article/addArticle.js"></script>
<script src="assets/script/article/deleteArticle.js"></script>
<script src="assets/script/article/modifyArticle.js"></script>
<script src="assets/script/article/verifyModifyArticleForm.js"></script>

<?php
    require_once('templates/dashboard_footer.php');
?>