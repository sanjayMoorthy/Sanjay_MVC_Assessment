<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit page</title>
</head>
<body>
<form action="../../index.php" method="post">
    <div>
        <?php foreach ($getData as $values): ?>
        <h3>prodectName</h3>
        <input type="text" name = "prodectName" placeholder="product Name" value="<?php echo $values->prodect_name ?>" >
        <h3>prodectImage</h3>
        <input type="file" name = "productImage" value="<?php echo $values->prodect_image ?>">
        <h3>prodect SKU</h3>
        <input type="text" name = "prodectSKU" value="<?php echo $values->prodect_sku ?>">
        <h3>prodect Price</h3>
        <input type="number" name= "prodectPrice" value="<?php echo $values->prodect_price ?>">
        <h3>prodect Brand</h3>
        <select name = "prodectBrand" id="" value="<?php echo $values->prodect_brand ?>">
            <option value="">- Select a Brand -</option>
            <option value="Honda">Honda</option>
            <option value="Tata">Tata</option>
            <option value="BMW">BMW</option>
            <option value="Audi">Audi</option>
        </select>
        <h3>Manufacture Date</h3>
        <input type="date" name = "prodectMFD" value="<?php echo $values->prodect_mfd ?>">
        <h3>Available Stock</h3>
        <input type="number" name="availableStock" value="<?php echo $values->prodect_available_stock ?>">
        
        <input type="text" hidden name="edit" value="<?php echo $values->id ?>">
        <button value="edit" name="action">Update</button>
        <?php endforeach; ?>
    </div>
</form>
</body>
</html>