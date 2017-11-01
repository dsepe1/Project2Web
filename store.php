<?php
include("header.inc");
?>
<html>
<head>
<title>Store</title>
    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
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

<div class="gallery">
    <a target="_blank">
        <img src="http://images.footballfanatics.com/FFImage/thumb.aspx?i=/productImages%2f_826000%2fff_826951_xl.jpg&w=600 " alt="Rodgers" width="600" height="400">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
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
        <img src="http://www.picshouse2.com/vb/imgcache/2/12642poster.png " alt="Ronaldo" width="300" height="200">
    </a>
    <div class="desc"><a href="#" class="button">Add to Cart</a></div>
</div>
</body>

<?php
include("footer.inc");
?>





