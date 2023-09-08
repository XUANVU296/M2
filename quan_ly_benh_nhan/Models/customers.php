<?php
    // Ket noi voi database
    class Customers {
        // lay ta ca du lieu
        public static function all()
        {
            global $conn;
            if (isset($_GET['search'])) {
                $keyword = '%' . $_GET['search'] . '%';
                $sql = "SELECT *
                        FROM benhnhan
                        WHERE TEN LIKE :keyword OR 
                        PHONG LIKE :keyword";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':keyword', $keyword);
            } else {
                $sql = "SELECT *
                        FROM `benhnhan`";
                $stmt = $conn->query($sql);
            }
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        }

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `benhnhan` WHERE ID = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // // Them moi du lieu
        public static function store($data){
            global $conn;
            $TEN = $data['TEN'];
            $PHONG = $data['PHONG'];
            $NGAY = $data['NGAY'];
            $GIOI_TINH = $data['GIOI_TINH'];
            $TINH_TRANG = $data['TINH_TRANG'];
            $THONG_TIN = $data['THONG_TIN'];
            $sql = "INSERT INTO `benhnhan` 
            ( `TEN`, `PHONG`, `NGAY`, `GIOI_TINH`, `TINH_TRANG`, `THONG_TIN`) 
            VALUES 
            ('$TEN','$PHONG','$NGAY','$GIOI_TINH','$TINH_TRANG','$THONG_TIN')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $TEN = $data['TEN'];
            $PHONG = $data['PHONG'];
            $NGAY = $data['NGAY'];
            $GIOI_TINH = $data['GIOI_TINH'];
            $TINH_TRANG = $data['TINH_TRANG'];
            $THONG_TIN = $data['THONG_TIN'];
            $sql = "UPDATE `benhnhan` SET `TEN` = '$TEN', `PHONG` = '$PHONG', `NGAY` = '$NGAY', `GIOI_TINH` = '$GIOI_TINH', `TINH_TRANG` = '$TINH_TRANG', `THONG_TIN` = '$THONG_TIN' WHERE `ID` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM benhnhan WHERE ID = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
        public static function search($searchTerm){
            global $conn;
            $searchTerm = "%$searchTerm%";
            $sql = "SELECT * 
                    FROM benhnhan 
                    WHERE TEN LIKE :searchTerm OR
                    PHONG LIKE :searchTerm";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':searchTerm', $searchTerm);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    }