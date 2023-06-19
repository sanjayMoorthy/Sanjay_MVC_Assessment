<?php

require "models/UserModel.php";
class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function create($prodects) {
        $this->userModel->create($prodects['prodectName'],$prodects['productImage'],$prodects['prodectSKU'],$prodects['prodectPrice'],$prodects['prodectBrand'],$prodects['prodectMFD'],$prodects['availableStock']);
    }

    public function update($id) {
        $allvalues = $this->userModel->updateValues($id,$_POST);
    }

    public function delete($id) {
        $this->userModel->delete($id);

    }

    public function index() {
        $allUsers = $this->userModel->getAllUsers();
        require 'views/user/list.php';
    }

    public function view($id) {
        $getData = $this->userModel->read($id);
        require 'views/user/edit.php';
    }
}
