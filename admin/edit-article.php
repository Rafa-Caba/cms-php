<?php

require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';

if (isset($_GET['id'])) {
    
    $article = Article::getById($conn, $_GET['id']);

    if ( !$article ) {
        die("Article not found!");
    }

} else {
    die("Id not supplied, article not found");
}

$categories_ids = array_column($article->getCategories($conn), 'id');
$categories = Category::getAll($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->published_at = $_POST['published_at'];

    $categories_ids = $_POST['category'] ?? [];

    if ($article->update($conn)) {

        $article->setCategories($conn, $categories_ids);
        
        Url::redirect("/admin/article.php?id={$article->id}");
    
    }
}

?>

<?php require '../includes/header.php'; ?>

    <h2>Edit article</h2>

    <?php require 'includes/article-form.php'; ?>

<?php require '../includes/footer.php'; ?>
