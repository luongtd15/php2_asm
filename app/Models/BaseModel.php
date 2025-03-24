<?php

namespace App\Models;

use PDO;
use PDOException;

class BaseModel
{
    protected $conn = null;
    protected $tableName = null;
    protected $primaryKey = 'id';
    protected $sqlBuilder;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost; dbname=php2_asm; charset=utf8; port=3306", "root", "");
        } catch (PDOException $e) {
            echo "Lỗi cơ sở dữ liệu:" . $e->getMessage();
        }
    }

    public static function all() //truy cập trực tiếp ko cần tạo đối tượng
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    /*
* method create: dùng để thêm dữ liệu
* @$data: dữ liệu bao gồm có key và value, trong đó key là tên cột trong bảng 
dữ liệu và value tương ứng
*/
    public static function create($data)
    {
        $model = new static;
        $sql = "INSERT INTO $model->tableName(";
        $values = " VALUES(";

        foreach ($data as $column => $val) {
            $sql .= "`$column`, ";
            $values .= ":$column, ";
        }

        $sql = rtrim($sql, ', ') . ") "
            . rtrim($values, ', ') . ")"; // xóa kí tự ở bên phải theo tiêu chí
        // dd($sql);
        $stmt = $model->conn->prepare($sql);

        $stmt->execute($data);

        return $model->conn->lastInsertId();
    }

    /*
    *Phương thức update: để cập nhật dữ liệu theo id
    *@$data: dữ liệu bao gồm có key và value, trong đó key là tên cột trong bảng 
dữ liệu và value tương ứng
    */
    public static function update($data, $id)
    {
        $model = new static;
        $sql = "UPDATE $model->tableName set";
        foreach ($data as $column => $val) {
            $sql .= "`$column`=:$column, ";
        }
        $sql = rtrim($sql, ", ") . " WHERE $model->primaryKey=:$model->primaryKey";

        // Thêm primary vào cho data 
        $data["$model->primaryKey"] = $id;
        $stmt = $model->conn->prepare($sql);
        $stmt->execute($data);
    }

    /**
     * @method delete: Phương thức xóa dữ liệu
     * @param $id: giá trị theo khóa chính
     */

    public static function delete($id)
    {
        $model = new static;
        $sql = "DELETE FROM $model->tableName WHERE
        $model->primaryKey=:$model->primaryKey";

        $stmt = $model->conn->prepare($sql);
        $stmt->execute(["$model->primaryKey" => $id]);
    }

    /**
     * @method find: tìm kiếm dữ liệu theo id, trả về 1 bản ghi
     * @param $id: giá trị cần tìm
     */

    public static function find($id)
    {
        $model = new static;
        $sql = "SELECT * FROM $model->tableName WHERE
        $model->primaryKey=:$model->primaryKey";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute(["$model->primaryKey" => $id]);

        $result = $stmt->fetchAll(PDO::FETCH_CLASS);

        return $result[0] ?? [];
    }

    /**
     * @method where : Phương thức lấy dữ liệu theo điều kiện
     * @param $column: tên cột cần tìm
     * @param $operator: biểu thức
     * @param $value: giá trị cần tìm
     * Hàm tìm kiếm sản phẩm
     */

    public static function where($column, $operator, $value)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE `$column` $operator
        '$value' ";

        return $model;
    }

    public function whereClause($column, $operator, $value)
    {
        // Nếu cột chưa có tên bảng, tự động thêm bảng chính (ví dụ: products)
        if (!str_contains($column, '.')) {
            $column = "$this->tableName.$column";
        }

        $this->sqlBuilder .= " WHERE $column $operator '$value'";
        return $this;
    }


    public function whereRaw($condition)
    {
        $this->sqlBuilder .= " WHERE $condition ";
        return $this;
    }

    /**
     * @method get: lấy dữ liệu
     */
    public function get()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        // dd($this->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * @method first: lấy ra phần tử đầu tiên
     * 
     */
    public function first()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS)[0] ?? [];
    }
    /**
     * @method orWhere: thêm điều kiện hoặc 
     *  @param $column: tên cột cần tìm
     * @param $operator: biểu thức
     * @param $value: giá trị cần tìm
     */
    public function orWhere($column, $operator, $value)
    {
        $this->sqlBuilder .= " OR `$column` $operator '$value'";
        return $this;
    }
    public function andWhere($column, $operator, $value)
    {
        $this->sqlBuilder .= " AND `$column` $operator '$value'";
        return $this;
    }

    public function orderBy($column, $direction = 'ASC')
    {
        $this->sqlBuilder .= " ORDER BY `$column` $direction";
        return $this;
    }
    /**
     * @method select: phương thức chọn cột cần lấy
     * @param $columns: mảng các tên cột lấy 
     * 
     */

    public static function select($columns = ['*'])
    {
        $model = new static;
        $model->sqlBuilder = "SELECT ";
        foreach ($columns as $col) {
            $model->sqlBuilder .= " $col, ";
        }
        // loại bỏ dấu ", "
        $model->sqlBuilder = rtrim($model->sqlBuilder, ", ") . " FROM $model->tableName ";
        return $model;
    }


    /**
     * @method join: nối bảng
     * @param  $table: tên bảng cần nối 
     * @param $parentKey: khóa chính bảng cha
     * @param $childKey: khóa ngoại
     */
    public function join($table, $parentKey, $childKey)
    {
        $this->sqlBuilder .= " JOIN $table ON $this->tableName.$parentKey = $table.$childKey ";
        return $this;
    }

    public static function updateQuantity($userId, $productId, $quantity)
    {
        $model = new static;

        // Câu lệnh UPDATE: Cộng thêm quantity mới vào quantity cũ và cập nhật total_price
        $sql = "UPDATE `$model->tableName` 
            SET `quantity` = `quantity` + :quantity, 
                `total_price` = `total_price` + :quantity * `unit_price`
            WHERE `user_id` = :userId AND `product_id` = :productId";

        $stmt = $model->conn->prepare($sql);
        $stmt->execute([
            'quantity' => $quantity,
            'userId' => $userId,
            'productId' => $productId
        ]);
    }

    public static function setQuantity($userId, $productId, $quantity)
    {
        $model = new static;

        // Câu lệnh UPDATE: Cộng thêm quantity mới vào quantity cũ và cập nhật total_price
        $sql = "UPDATE `$model->tableName` 
            SET `quantity` = :quantity, 
                `total_price` = :quantity * `unit_price`
            WHERE `user_id` = :userId AND `product_id` = :productId";

        $stmt = $model->conn->prepare($sql);
        $stmt->execute([
            'quantity' => $quantity,
            'userId' => $userId,
            'productId' => $productId
        ]);
    }

    public static function updateStock($productId, $stock, $operator)
    {
        $model = new static;

        // Giảm stock của sản phẩm
        $sql = "UPDATE `$model->tableName` 
            SET `stock` = `stock` $operator :stock
            WHERE `id` = :productId";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute([
            'stock' => $stock,
            'productId' => $productId
        ]);

        // Kiểm tra nếu stock = 0 thì cập nhật trạng thái thành 'unavailable'
        $sql = "UPDATE `$model->tableName` 
            SET `status` = 'unavailable' 
            WHERE `id` = :productId AND `stock` <= 0";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute(['productId' => $productId]);
    }

    public function paginate($page = 1, $limit = 8)
    {
        $offset = ($page - 1) * $limit;

        // Gắn LIMIT vào truy vấn hiện tại
        $this->sqlBuilder .= " LIMIT :limit OFFSET :offset";
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_CLASS);

        // Lấy tổng số bản ghi từ truy vấn hiện tại (bỏ LIMIT và OFFSET)
        $countQuery = preg_replace('/SELECT (.+?) FROM/i', 'SELECT COUNT(*) FROM', $this->sqlBuilder);
        $countQuery = preg_replace('/LIMIT(.*)/i', '', $countQuery); // Xóa LIMIT để lấy số bản ghi thực tế

        $countStmt = $this->conn->prepare($countQuery);
        $countStmt->execute();
        $totalRows = $countStmt->fetchColumn();

        $totalPages = ($totalRows > $limit) ? ceil($totalRows / $limit) : 1; // Nếu dưới 8 record thì chỉ có 1 trang

        return [
            'data' => $data,
            'total_pages' => $totalPages,
            'current_page' => $page
        ];
    }
}
