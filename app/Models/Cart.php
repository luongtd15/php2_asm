<?php

namespace App\Models;

class Cart extends BaseModel
{
    protected $tableName = 'carts';

    public static function getTotalPrice($userId)
    {
        $model = new static;
        $sql = "SELECT SUM(total_price) AS total_amount FROM carts WHERE `user_id` = :userId"; // Đổi 'hoa_don_chi_tiet' theo tên bảng của bạn
        $stmt = $model->conn->prepare($sql);
        $stmt->execute(
            ['userId' => $userId]
        );

        return $stmt->fetchColumn(); // Lấy tổng giá trị và trả về
    }

    public static function deleteCart($id)
    {
        $model = new static;
        $sql = "DELETE FROM carts WHERE
        `user_id` = :user_id";

        $stmt = $model->conn->prepare($sql);
        $stmt->execute(["user_id" => $id]);
    }
}
