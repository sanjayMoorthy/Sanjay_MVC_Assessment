<html>
<style>
.container {
    box-shadow: 0px 0px 17px 1px;
    text-align: center;
    width: 400px;
    margin-left: 410px;
    border-radius: 10px;
}
button.submitBtn {
    margin-top: 15px;
    color: white;
    background-color: blue;
    border: 0;
    height: 30px;
    width: 100px;
    border-radius: 5px;
}
h3{
    color: slateblue;
}
</style>
<head>
    <title>Product insering page</title>
</head>
    <body>
        <div class="container">
        <form method="post" action="../../index.php">
        <h3>prodectName</h3>
        <input type="text" name = "prodectName" placeholder="product Name">
        <h3>prodectImage</h3>
        <input type="file" name = "productImage">
        <h3>prodect SKU</h3>
        <input type="text" name = "prodectSKU">
        <h3>prodect Price</h3>
        <input type="number" name= "prodectPrice" id="">
        <h3>prodect Brand</h3>
        <select name = "prodectBrand" id="">
            <option value="">- Select a Brand -</option>
            <option value="Honda">Honda</option>
            <option value="Tata">Tata</option>
            <option value="BMW">BMW</option>
            <option value="Audi">Audi</option>
        </select>
        <h3>Manufacture Date</h3>
        <input type="date" name = "prodectMFD">
        <h3>Available Stock</h3>
        <input type="number" name="availableStock" id="">
        <input type="hidden" name="action" value="create">
            <br>
        <button type ="submit" class="submitBtn" >Submit</button>
    </form>
        </div>
    </body>
</html>

