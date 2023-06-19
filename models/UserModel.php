<?php

require "connection.php";

class UserModel extends database {
   

    public function create($productName, $productImage,$product_sku,$productPrice,$productBrand,$productMfg,$product_Available) {

        $this->db->query("Insert into prodect_details(prodect_name,prodect_image,prodect_sku,prodect_price,prodect_brand,prodect_mfd,prodect_available_stock) values('$productName','$productImage','$product_sku','$productPrice','$productBrand','$productMfg','$product_Available')");
        header('location:/');
        
    }

    public function read($id) {
        $read = $this->db->query("SELECT * FROM prodect_details where id='$id'");
        $allValue = $read->fetchAll(PDO::FETCH_OBJ);
        return $allValue;
    }

    public function updateValues($id, $data) {
        $productName = $data['prodectName'];
        $productImage  = $data['productImage'];
        $product_sku  = $data['prodectSKU'];
        $productPrice  = $data['prodectPrice'];
        $productBrand  = $data['prodectBrand'];
        $productMfg  = $data['prodectMFD'];
        $product_Available  = $data['availableStock'];

        $this->db->query("UPDATE prodect_details SET prodect_name = '$productName',prodect_image = '$productImage',prodect_sku = '$product_sku',prodect_price = '$productPrice ',prodect_brand = ' $productBrand',prodect_mfd = '$productMfg',prodect_available_stock = '$product_Available' where id='$id'");
        header('location:/');
    }

    public function delete($id) {
        $deleteValue = $this->db->query("DELETE FROM prodect_details WHERE id='$id'");
        header('location:/');
    }


    public function getAllUsers() {
        $allUsers = $this->db->query("SELECT * FROM prodect_details");
        $getUsers = $allUsers->fetchAll(PDO::FETCH_OBJ);
        return $getUsers;
    }
}