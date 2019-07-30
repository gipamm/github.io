<?php
$list = $arr = [
    [
        "title" => "My First Salary",
        "authors" => "Karen Shaybekyan",
        "mentor" => "Done",
        "url" => "https://readymag.com/u90183317/1465371/2",
        "image" => "p1160286.jpg"],
    [
        "title" => "Iron Ladies ",
        "authors" => "Varduhi Kurghinyan",
        "mentor" => "Done",
        "url" => "https://spark.adobe.com/page/1d8eb9a5-1f19-4687-b038-cce093fddcaa/",
        "image" => "7702.jpg"],
    [
        "title" => "Woman With a Name of a Flower",
        "authors" => "Lilit Karakhanyan, Hasmik Avagyan, Zhanna Chogandaryan",
        "mentor" => "Done",
        "url" => "https://spark.adobe.com/page/AkEl9j4A5IG2F/",
        "image" => "9679.jpg"],
    [
        "title" => "My Phone",
        "authors" => "Violetta Sargsyan",
        "mentor" => "Done",
        "url" => "https://spark.adobe.com/page/M6uUXlMHdo7U7/",
        "image" => "677.jpg"],
    [
        "title" => "Smoking ",
        "authors" => "Eldar",
        "mentor" => "Done                      ",
        "url" => "https://spark.adobe.com/page/rPs09VBxgCzt6"],
    [
        "title" => "The Price of Water",
        "authors" => "Sevak Gabrielyan",
        "mentor" => "Done",
        "url" => "https://spark.adobe.com/page/VZRrp88ARJHgv",
        "image" => "3954.jpg"],
    [
        "title" => "Grandmother Asli",
        "authors" => "Amalya Mgdesyan, Armen Savoyan",
        "mentor" => "Done",
        "url" => "https://spark.adobe.com/page/yyRAd4L9Q5Tyl",
        "image" => "5677.png"],
    [
        "title" => "Power of Hands (only video)",
        "authors" => "Ashkhen Khachatryan",
        "mentor" => "Done",
        "url" => "https://www.youtube.com/watch?reload=9&v=iTv6vv51rdA&feature=youtu.be",
        "image" => "power-of-hand.jpg"],
    [
        "title" => "Library Without Readers",
        "authors" => "Hasmik Avagyan, Zhanna Chogandaryan, Aksana Gigolyan",
        "mentor" => "Done",
        "image" => "671.jpg"],
    [
        "title" => "On His Own ",
        "authors" => "Nazeli Khachatryan, Artyom Nalbandyan, Shaliko Nersisyan",
        "mentor" => "Taguhi",
        "image" => "0400.jpg"],
    [
        "title" => "The Beekeeper",
        "authors" => "Veronika Tumasyan",
        "mentor" => "Ani",
        "image" => "the-bee-keeper.jpg"],
    [
        "title" => "Class minus girls",
        "authors" => "Namig, Amil, Nicat",
        "mentor" => "Not yet  "],
    [
        "title" => "Garbage ",
        "authors" => "Kenan and Senan",
        "mentor" => "Done "],
    [
        "title" => "Early marriage ",
        "authors" => "Gulgun",
        "mentor" => "Not yet (in a hour) "],
    [
        "title" => "Vanising trees",
        "authors" => "Eltun",
        "mentor" => "Done "],
    [
        "title" => "Transport ",
        "authors" => "Aziz , Sema",
        "mentor" => "Done "],
    [
        "title" => "Meet  Abbas ",
        "authors" => "Idris ",
        "mentor" => "Done"],
    [
        "authors" => "Xuldara "],
    [
        "title" => "Garage ",
        "authors" => "Vali, Mehemmed ",
        "mentor" => "Done"],
    [
        "title" => "Wishing trees ",
        "authors" => "Gunel, Bahar",
        "mentor" => "Done"],
    [
        "title" => "On my way home",
        "authors" => "Tural",
        "mentor" => "Done"],
    [
        "title" => "Dogs ",
        "authors" => "Ayxan , Kenan ",
        "mentor" => "Done"]
];;
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
                <?php if (key_exists('url', $item) AND $item['url'] !== ''):?>
                <div class="col-xs-10 col-md-8 offset-md-2 blockDesign blockDesign<?php echo $key % 4 + 1; ?>">
                    <div class="parent">
                        <div class="introImg" style="background-image:url(<?php echo 'images/' . $item['image']; ?>);">
                            <div class="hoverLayer"></div>
                        </div>
                        <div class="introText">
                            <article>
                                <h1><a href="<?php echo $item['url'];?>" target="_blank"><?php echo $item['title']; ?></a></h1>
                                <br>
                                <p><?php echo $item['description']; ?></p>
                            </article>
                        </div>
                    </div>
                    <h4 class="authors"><?php echo $item['authors']; ?></h4>
                    <div class="animationBox"></div>
                </div>
                <?php endif;?>
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