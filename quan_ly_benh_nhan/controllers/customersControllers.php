<?php
require_once 'Models/customers.php';
class CustomersControllers {
    // Hien thi danh sach records => table
    public function index(){
        $rows = Customers::all();
       
        // Truyen data xuong view
        require_once 'Views/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        require_once 'Views/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Customers::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controllers=Customers&action=index");

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id']; //1
        $row = Customers::find($id);
        // Truyen xuong view
        require_once 'Views/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Customers::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controllers=Customers&action=index");
    }

    // Xoa
    public function destroy(){
        $id = $_GET['ID'];
        Customers::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controllers=Customers&action=index");
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['ID'];
        $row = Customers::find($id);

        // Truyen xuong view
        require_once 'Views/show.php';
    }
    public function search(){
        // Goi model
        Customers::search($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controllers=Customers&action=index");
        

    }
}