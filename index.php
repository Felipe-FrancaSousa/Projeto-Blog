<?php include_once("templates/header.php");?>

    <main>
        <div id="title-container">
            <h1>Blog de Programação</h1>
            <p>Confira as novidades do mundo dev!</p>
            <br>
        </div>
<!-- Criação automática dos posts com base nos dados contidos em posts.php -->
        <div id="posts-container">
            <?php foreach($posts as $post): ?>
                <div class="post-box">
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
        </div>

    </main>

<?php include_once("templates/footer.php"); ?>