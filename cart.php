<?php
include("header.inc");
?>
<head>
    <title>Cart</title>
</head>

<body>
<h1 align="center">Cart</h1>
<div class="container" style="width:700px;">
    <h3 align="center">Simple PHP Mysql Shopping Cart</h3><br />
    <?php
    include("db_connect.php");
    $query = "SELECT * FROM inventory";
    $result = mysqli_query($dbc,$query);
    if(mysqli_num_rows($result) > 0)
    {
    while($row = mysqli_fetch_array($result))
    {
    ?>
    <div class="col-md-4">
        <form method="post" action="cart.php">
            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                <input type="text" name="quantity" class="form-control" value="1" />
                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
            </div>
        </form>
    </div>
</body>

<?php
include("footer.inc");
?>





