<?php 
include_once("templates/header.php");

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
    <main id="post-container">
        <div class="content-container">
            <h1 class="main-title"> <?= $currentPost['title']?> </h1>
            <p id="post-description"><?= $currentPost['description']?> </p>
            <div class="img-container">
                 <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title']?>">
             </div>

             <div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                 Blanditiis enim similique, non harum vitae dolor tenetur omnis. Consequuntur perspiciatis 
                 dicta molestias accusamus vero facere odit sint. Soluta repellendus dolorem sit.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis enim similique,
             non harum vitae dolor tenetur omnis. Consequuntur perspiciatis dicta molestias accusamus 
             vero facere odit sint. Soluta repellendus dolorem sit. </p>

             </div>

        </div>

        <aside id="nav-container">
        <h3 id="tags-title"></h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
          </ul>

          <h3 id="categories-title">Categorias</h3>
          <ul id="categories-list">
          <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
          </ul>
    </aside>
    </main>

    
    <?php 
include_once("templates/footer.php");
?>
</body>
</html>