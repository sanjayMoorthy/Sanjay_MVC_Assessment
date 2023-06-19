<html>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
} 
td {
    text-align: center;
}  
table, th, td {
  border:1px solid black;
}
    img{
        width: 75px;
        height: 75px;
    }
</style>
<head>
    <title>List</title>
</head>
<body>
    <div class="container">
        <table style="width:100%">
            <tr>
                <th>No</th>
                <th>product Name</th>
                <th>product image</th>
                <th>product sku</th>
                <th>product price</th>
                <th>product Brand</th>
                <th>product Manufacture Date</th>
                <th>product Available Stock</th>
                <th>opr delete</th>
                <th>opr Edit</th>
            </tr>
            <?php foreach ($allUsers as $user):?>
            <tr>
                    <td><?php echo $user->id ?></td>
                    <td><?php echo $user-> prodect_name ?></td>
                    <td><img src="<?php echo $user->prodect_image ?>"></td>
                    <td><?php echo $user->prodect_sku ?></td>
                    <td><?php echo $user->prodect_price ?></td>
                    <td><?php echo $user->prodect_brand ?></td>
                    <td><?php echo $user->prodect_mfd ?></td>
                    <td><?php echo $user->prodect_available_stock ?></td>
                   <td>
                    <form method="post" action="../../index.php">
                        <input hidden name="action" value="delete">
                        <button name="delete" value="<?php echo $user->id ?>" type="submit" >delete</button>
                    </form>
                   </td>
                    <td>
                    <form method="post" action="../../index.php">
                        <input hidden name="action" value="view">
                        <button name="edit" type="submit" value="<?php echo $user->id ?>">edit</button>
                    </form>
                    </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>


