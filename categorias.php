<?php include_once("templates/header.php"); ?>

    <ul id="categories-list">
        <h3 id="categories-title">Categorias</h3>
        <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category?></a></li>
        <?php endforeach; ?>
    </ul>

    <?php foreach($posts as $post): ?>
        <div class="categorias-box">
            <a href="<?=$BASE_URL?>/post.php?id=<?=$post['id']?>">
                <img src="<?=$BASE_URL?>/img/<?=$post['img']?>" alt="<?=$post['title']?>">
                <h2 class="post-title">
                    <?=$post['title']?>
                </h2>
            </a>
            <p class="post-descrition"><?=$post['description']?></p>
        <div>
            <div class="tags-container">
                <?php foreach($post['tags'] as $tag): ?>
                    <a class="tags-container" href="#"><?= $tag?></a>
                <?php endforeach; ?>
            </div>
        </div>    
        </div>
    <?php endforeach; ?>

<?php include_once("templates/footer.php"); ?>