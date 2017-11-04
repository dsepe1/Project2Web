<?php
include("header.inc");
?>
<html>
<head>
<title>Store</title>
    <style>
        <?php include 'stylesheet.css'; ?>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
            margin-bottom: 2cm;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

    </style>
</head>
<body>




<!--
<div class="container">
    <form method="post" action="cart.php">
<div class="gallery">
    <a target="_blank">
        <img src="http://images.footballfanatics.com/FFImage/thumb.aspx?i=/productImages%2f_826000%2fff_826951_xl.jpg&w=600 " alt="Rodgers" width="600" height="400">
    </a>
    <div class="desc"><a href="store.php" class="button">Add to Cart</a></div>
</div>

<div class="gallery">
    <a target="_blank">
        <img src="http://nflshop.frgimages.com/FFImage/thumb.aspx?i=/productImages%2f_825000%2fff_825432_xl.jpg&w=600" alt="Ryan" width="600" height="400">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
</div>
<div class="gallery">
    <a target="_blank">
        <img src="http://nflshop.frgimages.com/FFImage/thumb.aspx?i=/productImages%2f_2126000%2fff_2126355_xl.jpg&w=600" alt="Gurley" width="600" height="400">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
</div>
<div class="gallery">
    <a target="_blank">
        <img src="http://nflshop.frgimages.com/FFImage/thumb.aspx?i=/productImages%2f_1778000%2fff_1778836_xl.jpg&w=600" alt="OBJ" width="300" height="200">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
</div>
<div class="gallery">
    <a target="_blank">
        <img src="http://nflshop.frgimages.com/FFImage/thumb.aspx?i=/productImages%2f_2524000%2fff_2524641_full.jpg&w=600" alt="Green" width="300" height="200">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
</div>
<div class="gallery">
    <a target="_blank">
        <img src="http://nflshop.frgimages.com/FFImage/thumb.aspx?i=/productImages%2f_1921000%2fff_1921510_xl.jpg&w=600" alt="Freeman" width="300" height="200">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
</div>
<div class="gallery">
    <a target="_blank">
        <img src="http://images.footballfanatics.com/FFImage/thumb.aspx?i=/productImages%2f_2708000%2fff_2708255_full.jpg&w=600" alt="Almiron" width="300" height="200">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
</div>
<div class="gallery">
    <a target="_blank">
        <img src="http://images.footballfanatics.com/FFImage/thumb.aspx?i=/productImages%2f_2756000%2fff_2756853_full.jpg&w=600" alt="Martinez" width="300" height="200">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
</div>
<div class="gallery">
    <a target="_blank">
        <img src="https://www.imagehandler.net/?iset=0108&img=A1002785000&fmt=jpg&w=300&h=300&iindex=0009&c=999&cmp=85&l1c=100&l1f=auth_epl_2017__&l1sz=90&l1ag=R1005117&l1v=HAZARD&l1x1=220&l1y1=158&l1x2=1002&l1y2=158&l1x3=220&l1y3=264&l1x4=1002&l1y4=264&l1a=0&l2c=100&l2f=auth_epl_2017__&l2sz=440&l2ag=R1005119&l2v=10&l2x1=378&l2y1=148&l2x2=846&l2y2=148&l2x3=378&l2y3=666&l2x4=846&l2y4=666&l2a=0" alt="Hazard" width="300" height="200">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
</div>
<div class="gallery">
    <a target="_blank">
        <img src="https://www.imagehandler.net/?iset=0108&img=A1003394000&fmt=jpg&w=300&h=300&iindex=0009&c=999&cmp=85&l1c=100&l1f=auth_epl_2017__&l1sz=90&l1ag=R1005117&l1v=IBRAHIMOVI%C4%86&l1x1=246&l1y1=124&l1x2=986&l1y2=124&l1x3=246&l1y3=404&l1x4=986&l1y4=404&l1a=0&l1px=616&l1py=494&l1r=280&l1d=180&l2c=100&l2f=auth_epl_2017__&l2sz=440&l2ag=R1005119&l2v=10&l2x1=376&l2y1=126&l2x2=844&l2y2=126&l2x3=376&l2y3=644&l2x4=844&l2y4=644&l2a=0" alt="Ibra" width="300" height="200">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
</div>
<div class="gallery">
    <a target="_blank">
        <img src="https://www.imagehandler.net/?iset=0108&img=A97558000&fmt=jpg&cmp=85&w=600&h=600&iindex=0009&c=999&l1c=710&l1f=auth_fcb_1718__&l1sz=90&l1ag=R1005421&l1v=MESSI&l1x1=20&l1y1=170&l1x2=1178&l1y2=170&l1x3=20&l1y3=690&l1x4=1178&l1y4=690&l1a=0&l1px=598&l1py=780&l1r=520&l1d=140&l2c=710&l2f=auth_fcb_1718__&l2sz=450&l2ag=R1005423&l2v=10&l2x1=380&l2y1=204&l2x2=806&l2y2=204&l2x3=380&l2y3=710&l2x4=806&l2y4=710&l2a=0" alt="Ibra" width="300" height="200">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
</div>
<div class="gallery">
    <a target="_blank">
        <img src="http://www.picshouse2.com/vb/imgcache/2/12642poster.png" alt="Ronaldo" width="300" height="200">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
</div>
    </form>
</div>-->
</body>
<?php
include("footer.inc");
?>





