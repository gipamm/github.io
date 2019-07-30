<?php $list = $arr = [
    [
        "title" => "Grandmother Asli",
        "authors" => "Amalya, Armen",
        "url" => "",
        "img" => "landscape.jpg",
        "description" => ""],
    [
        "title" => "Library Without Readers",
        "authors" => "Hasmik, Zhanna, Aksana",
        "url" => "",
        "img" => "landscape.jpg",
        "description" => ""],
    [
        "title" => "My Phone",
        "authors" => "Vioeleta",
        "url" => "",
        "img" => "landscape.jpg",
        "description" => ""],
    [
        "title" => "Iron Ladies /Migration/",
        "authors" => "Varduhi",
        "url" => "",
        "img" => "landscape.jpg",
        "description" => ""],
    [
        "title" => "On His Own (Gym)",
        "authors" => "Nazeli, Artyom, Shaliko",
        "url" => "",
        "img" => "landscape.jpg",
        "description" => ""],
    [
        "title" => "Beekeeper Woman",
        "authors" => "Veronika",
        "url" => "",
        "img" => "landscape.jpg",
        "description" => ""],
    [
        "title" => "My First Salary",
        "authors" => "Karen",
        "url" => "",
        "img" => "landscape.jpg",
        "description" => ""],
    [
        "title" => "The Price of Water",
        "authors" => "Sevak",
        "url" => "",
        "img" => "landscape.jpg",
        "description" => ""],
    [
        "title" => "Grandfather of Ashkhen",
        "authors" => "Ashkhen",
        "url" => "",
        "img" => "landscape.jpg",
        "description" => ""],
    [
        "title" => "Woman With a Name of Flower",
        "authors" => "Lilit, Hasmik, Zhanna",
        "url" => "",
        "img" => "landscape.jpg",
        "description" => ""],
    [
        "title" => "Class minus girls",
        "authors" => "",
        "url" => "",
        "img" => "landscape.jpg",
        "description" => ""]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <!-- styles -->
    <link rel="stylesheet" href="css/Reset.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/Layout.css">
    <link rel="stylesheet" href="css/Fonts.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/homeStyles.css">
    <!-- end styles -->
</head>
<body>
<div class="container-fluid body-content">
    <div class="row">
        <div class="col-md-12 mainContainer">
            <header class="blockHeader">
                Interactive
            </header>
            <?php foreach ($list as $key => $item): ?>
                <div class="col-xs-10 col-md-8 offset-md-2 blockDesign blockDesign<?php echo $key % 4 + 1; ?>">
                    <div class="parent">
                        <div class="introImg" style="background-image:url(<?php echo 'images/' . $item['img']; ?>);">
                            <div class="hoverLayer"></div>
                        </div>
                        <div class="introText">
                            <article>
                                <h1><a href="" target="_blank"><?php echo $item['title']; ?></a></h1>
                                <br>
                                <p><?php echo $item['description']; ?></p>
                            </article>
                        </div>
                    </div>
                    <h4 class="authors"><?php echo $item['authors']; ?></h4>
                    <div class="animationBox"></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- scripts -->
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<!-- end scripts -->
</body>
</html>