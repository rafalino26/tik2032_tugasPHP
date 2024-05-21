<?php
require 'koneksi.php';
$blog = query("SELECT * FROM blog");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
 <div class="blog-page">
   <div class="navbar">
     <nav>
        <ul>
            <li class="home"><a href="index.html">Home</a></li>
            <li class="gallery"><a href="gallery.html">Gallery</a></li>
            <li class="blog"><a href="blog.php" class="active">Blog</a></li>
            <li class="contact"><a href="contact.html">Contact</a></li>
        </ul>
     </nav>
    </div>
<body>
    <div class="head">
        <h2>Personal Homepage</h2>
    </div>
        <div class="bloghead">
            <h2>Blog</h2>
        </div>
            <div class="blog-content">
            <?php foreach ($blog as $b) : ?>
                <article>
                    <h3><?= $b["judul"];?></h3>
                    <p>
                    <?= $b["isi"];?>
                    </p>
                </article>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</body>
</html>
