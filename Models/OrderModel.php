<?php
require_once 'Databases/database.php';

class OrderModel
{
    private $pdo;

    function __construct()
    {
        $this->pdo = (new Database())->getConnection();
    }

    function getOrder()
    {
        $stmt = $this->pdo->query("SELECT * FROM orders");
        return $stmt->fetchAll();
    }
    public function createOrder($data, $adminId)
    {
        $orderId = null;

        foreach ($data['product_ids'] as $productId) {
            $stmt = $this->pdo->prepare("
                INSERT INTO orders (admin_id, phone, order_status, total, buy_at, address_id, firstName, lastName, product_id, amount_product) 
                VALUES (:admin_id, :phone, :order_status, :total, :buy_at, :address_id, :firstName, :lastName, :product_id, :amount_product)
            ");
            $stmt->execute([
                'admin_id' => $data['admin_id'] ?? null,
                'firstName' => $data['first_name'] ?? '',
                'lastName' => $data['last_name'] ?? '',
                'product_id' => $productId, // Insert each product ID individually
                'amount_product' => $data['amount_products'][$productId] ?? 1, // Insert the corresponding quantity
                'phone' => $data['phone'] ?? '',
                'order_status' => $data['order_status'] ?? 'Pending',
                'total' => $data['total'] ?? 0,
                'buy_at' => $data['buy_at'] ?? date('Y-m-d H:i:s'),
                'address_id' => $data['address_id'] ?? null
            ]);

            // Store the last inserted order ID (useful for notifications)
            $orderId = $this->pdo->lastInsertId();
        }

        // Return the last inserted order ID
        return $orderId;
    }

    function getUser()
    {
        try {
            $stmt = $this->pdo->query("SELECT * FROM admins");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("Failed to fetch admins: " . $e->getMessage());
            return [];
        }
    }

    function createAddress($data)
    {
        try {
            $sql = "INSERT INTO address (city, admin_id, country, create_at, village, commune, district, province) 
                    VALUES (:city, :admin_id, :country, :create_at, :village, :commune, :district, :province)";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute([
                ':city' => $data['city'],
                ':admin_id' => $data['admin_id'],
                // ':address_text' => $data['address_text'],
                ':country' => $data['country'],
                ':village'=>$data['village'],
                ':commune'=>$data['commune'],
              ':district'=>$data['district'],
              ':province'=>$data['province'],
                ':create_at' => date('Y-m-d H:i:s') 
            ]);

            return $this->pdo->lastInsertId();
        } catch (Exception $e) {
            error_log("Failed to create address: " . $e->getMessage());
            return false;
        }
    }
     function getOrderDetail(){
        $stmt = $this->pdo->query("
        SELECT 
            orders.order_id AS id,
            orders.admin_id AS admin_id,
            orders.firstName AS first_name,
            orders.lastName AS last_name,
            orders.phone AS phone_number,
            orders.buy_at AS created_at,
            orders.amount_product AS amount_product,
            orders.order_status AS status,
            orders.total AS total,
            orders.product_id AS productId,
            orders.admin_id AS notification_user_id,
            admins.name AS admin_name,
            products.image AS product_image, 
             products.price AS product_price,   
            products.product_name AS product_name,
            products.quantity AS product_quantity
        FROM 
            orders
        LEFT JOIN 
            admins ON orders.admin_id = admins.admin_id
        LEFT JOIN 
            products ON orders.product_id = products.product_id
    ");
    return $stmt->fetchAll();
    }


     function getOrderID($id){
        $stmt = $this->pdo->query("
        SELECT 
            orders.order_id AS id,
            orders.admin_id AS admin_id,
            orders.firstName AS first_name,
            orders.lastName AS last_name,
            orders.phone AS phone_number,
            orders.buy_at AS created_at,
            
            orders.order_status AS status,
            orders.total AS total,
            orders.product_id AS productId,
            orders.admin_id AS notification_user_id,
            orders.address_id AS address_id,
            address.city AS city,
            address.country AS country,
            address.village AS village,
            address.commune AS commune,
            address.district AS district,
            address.province AS province,

            admins.name AS admin_name,
            products.image AS product_image,    
            products.product_name AS product_name,
            products.price AS product_price,
            products.quantity AS product_quantity
            FROM 
            orders
        LEFT JOIN 
            admins ON orders.admin_id = admins.admin_id
        LEFT JOIN 
            products ON orders.product_id = products.product_id
        LEFT JOIN 
            address ON orders.address_id = address.address_id
        WHERE orders.order_id = $id
    ");
    return $stmt->fetch();
    }
    function UpdateComfirmOrder($id){
        $stmt = $this->pdo->prepare("UPDATE orders SET order_status = :status WHERE order_id = :id");
        $stmt->execute([
            'status' => "Comfirm",
            'id' => $id
        ]);
    }
    function UpdateCancelOrder($id){
        $stmt = $this->pdo->prepare("UPDATE orders SET order_status = :status WHERE order_id = :id");
        $stmt->execute([
            'status' => "Cancelled",
            'id' => $id
        ]);
    }
    function UpdateUncomfirm($id){
        $stmt = $this->pdo->prepare("UPDATE orders SET order_status = :status WHERE order_id = :id");
        $stmt->execute([
            'status' => "Pending",
            'id' => $id
        ]);
    }
    function UpdateUncancel($id){
        $stmt = $this->pdo->prepare("UPDATE orders SET order_status = :status WHERE order_id = :id");
        $stmt->execute([
            'status' => "Pending",
            'id' => $id
        ]);
    }
    public function getTotalOrders()
    {
        try {
            $stmt = $this->pdo->query("SELECT COUNT(*) as total FROM orders");
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return (int)$result['total']; // Return the total count as an integer
        } catch (Exception $e) {
            error_log("Failed to fetch total orders: " . $e->getMessage());
            return 0; // Return 0 in case of error
        }
    }

    // Optionally, get percentage change in orders between two periods
    public function getOrderPercentageChange($currentPeriod, $previousPeriod)
    {
        try {
            // Count orders for the current period
            $stmtCurrent = $this->pdo->prepare("
                SELECT COUNT(*) as total 
                FROM orders 
                WHERE buy_at >= :start AND buy_at <= :end
            ");
            $stmtCurrent->execute([
                ':start' => $currentPeriod['start'],
                ':end' => $currentPeriod['end']
            ]);
            $currentCount = $stmtCurrent->fetch(PDO::FETCH_ASSOC)['total'];

            // Count orders for the previous period
            $stmtPrevious = $this->pdo->prepare("
                SELECT COUNT(*) as total 
                FROM orders 
                WHERE buy_at >= :start AND buy_at <= :end
            ");
            $stmtPrevious->execute([
                ':start' => $previousPeriod['start'],
                ':end' => $previousPeriod['end']
            ]);
            $previousCount = $stmtPrevious->fetch(PDO::FETCH_ASSOC)['total'];

            // Calculate percentage change
            if ($previousCount == 0) {
                return $currentCount > 0 ? 100 : 0; // Handle division by zero
            }
            return round((($currentCount - $previousCount) / $previousCount) * 100, 2);
        } catch (Exception $e) {
            error_log("Failed to calculate order percentage change: " . $e->getMessage());
            return 0;
        }
    }
    public function getTotalRevenue($year)
    {
        try {
            $stmt = $this->pdo->prepare("
                SELECT SUM(total) as total_revenue 
                FROM orders 
                WHERE YEAR(buy_at) = :year
            ");
            $stmt->execute([':year' => $year]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return (float)($result['total_revenue'] ?? 0); // Return 0 if no revenue
        } catch (Exception $e) {
            error_log("Failed to fetch total revenue: " . $e->getMessage());
            return 0;
        }
    }

    // Get percentage change in revenue between two periods
    public function getRevenuePercentageChange($currentPeriod, $previousPeriod)
    {
        try {
            // Revenue for the current period
            $stmtCurrent = $this->pdo->prepare("
                SELECT SUM(total) as total_revenue 
                FROM orders 
                WHERE buy_at >= :start AND buy_at <= :end
            ");
            $stmtCurrent->execute([
                ':start' => $currentPeriod['start'],
                ':end' => $currentPeriod['end']
            ]);
            $currentRevenue = (float)($stmtCurrent->fetch(PDO::FETCH_ASSOC)['total_revenue'] ?? 0);

            // Revenue for the previous period
            $stmtPrevious = $this->pdo->prepare("
                SELECT SUM(total) as total_revenue 
                FROM orders 
                WHERE buy_at >= :start AND buy_at <= :end
            ");
            $stmtPrevious->execute([
                ':start' => $previousPeriod['start'],
                ':end' => $previousPeriod['end']
            ]);
            $previousRevenue = (float)($stmtPrevious->fetch(PDO::FETCH_ASSOC)['total_revenue'] ?? 0);

            // Calculate percentage change
            if ($previousRevenue == 0) {
                return $currentRevenue > 0 ? 100 : 0; // Handle division by zero
            }
            return round((($currentRevenue - $previousRevenue) / $previousRevenue) * 100, 2);
        } catch (Exception $e) {
            error_log("Failed to calculate revenue percentage change: " . $e->getMessage());
            return 0;
        }
    }
    public function getTotalProductsSold($year)
    {
        try {
            $stmt = $this->pdo->prepare("
                SELECT SUM(amount_product) as total_products 
                FROM orders 
                WHERE YEAR(buy_at) = :year
            ");
            $stmt->execute([':year' => $year]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return (int)($result['total_products'] ?? 0); // Return 0 if no products sold
        } catch (Exception $e) {
            error_log("Failed to fetch total products sold: " . $e->getMessage());
            return 0;
        }
    }

    // Get percentage change in products sold between two periods
    public function getProductsSoldPercentageChange($currentPeriod, $previousPeriod)
    {
        try {
            // Products sold in the current period
            $stmtCurrent = $this->pdo->prepare("
                SELECT SUM(amount_product) as total_products 
                FROM orders 
                WHERE buy_at >= :start AND buy_at <= :end
            ");
            $stmtCurrent->execute([
                ':start' => $currentPeriod['start'],
                ':end' => $currentPeriod['end']
            ]);
            $currentProducts = (int)($stmtCurrent->fetch(PDO::FETCH_ASSOC)['total_products'] ?? 0);

            // Products sold in the previous period
            $stmtPrevious = $this->pdo->prepare("
                SELECT SUM(amount_product) as total_products 
                FROM orders 
                WHERE buy_at >= :start AND buy_at <= :end
            ");
            $stmtPrevious->execute([
                ':start' => $previousPeriod['start'],
                ':end' => $previousPeriod['end']
            ]);
            $previousProducts = (int)($stmtPrevious->fetch(PDO::FETCH_ASSOC)['total_products'] ?? 0);

            // Calculate percentage change
            if ($previousProducts == 0) {
                return $currentProducts > 0 ? 100 : 0; // Handle division by zero
            }
            return round((($currentProducts - $previousProducts) / $previousProducts) * 100, 2);
        } catch (Exception $e) {
            error_log("Failed to calculate products sold percentage change: " . $e->getMessage());
            return 0;
        }
    }
    public function getTotalProfit($year, $profitMargin = 0.2)
    {
        try {
            $stmt = $this->pdo->prepare("
                SELECT SUM(total) as total_revenue 
                FROM orders 
                WHERE YEAR(buy_at) = :year
            ");
            $stmt->execute([':year' => $year]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $totalRevenue = (float)($result['total_revenue'] ?? 0);
            return $totalRevenue * $profitMargin; // Calculate profit as a percentage of revenue
        } catch (Exception $e) {
            error_log("Failed to fetch total profit: " . $e->getMessage());
            return 0;
        }
    }

    // Get percentage change in profit between two periods
    public function getProfitPercentageChange($currentPeriod, $previousPeriod, $profitMargin = 0.2)
    {
        try {
            // Profit for the current period
            $stmtCurrent = $this->pdo->prepare("
                SELECT SUM(total) as total_revenue 
                FROM orders 
                WHERE buy_at >= :start AND buy_at <= :end
            ");
            $stmtCurrent->execute([
                ':start' => $currentPeriod['start'],
                ':end' => $currentPeriod['end']
            ]);
            $currentRevenue = (float)($stmtCurrent->fetch(PDO::FETCH_ASSOC)['total_revenue'] ?? 0);
            $currentProfit = $currentRevenue * $profitMargin;

            // Profit for the previous period
            $stmtPrevious = $this->pdo->prepare("
                SELECT SUM(total) as total_revenue 
                FROM orders 
                WHERE buy_at >= :start AND buy_at <= :end
            ");
            $stmtPrevious->execute([
                ':start' => $previousPeriod['start'],
                ':end' => $previousPeriod['end']
            ]);
            $previousRevenue = (float)($stmtPrevious->fetch(PDO::FETCH_ASSOC)['total_revenue'] ?? 0);
            $previousProfit = $previousRevenue * $profitMargin;

            // Calculate percentage change
            if ($previousProfit == 0) {
                return $currentProfit > 0 ? 100 : 0; // Handle division by zero
            }
            return round((($currentProfit - $previousProfit) / $previousProfit) * 100, 2);
        } catch (Exception $e) {
            error_log("Failed to calculate profit percentage change: " . $e->getMessage());
            return 0;
        }
    }
    public function getYearlyRevenue($years)
    {
        try {
            $placeholders = implode(',', array_fill(0, count($years), '?'));
            $stmt = $this->pdo->prepare("
                SELECT YEAR(buy_at) as year, SUM(total) as total_revenue 
                FROM orders 
                WHERE YEAR(buy_at) IN ($placeholders)
                GROUP BY YEAR(buy_at)
            ");
            $stmt->execute($years);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Initialize revenue array with 0 for each year
            $revenue = array_fill_keys($years, 0);
            foreach ($results as $row) {
                $revenue[$row['year']] = (float)($row['total_revenue'] ?? 0);
            }
            return $revenue;
        } catch (Exception $e) {
            error_log("Failed to fetch yearly revenue: " . $e->getMessage());
            return array_fill_keys($years, 0);
        }
    }

    // Get monthly revenue for a specific year
    public function getMonthlyRevenue($year)
    {
        try {
            $stmt = $this->pdo->prepare("
                SELECT MONTH(buy_at) as month, SUM(total) as total_revenue 
                FROM orders 
                WHERE YEAR(buy_at) = :year
                GROUP BY MONTH(buy_at)
            ");
            $stmt->execute([':year' => $year]);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Initialize revenue array with 0 for each month (1–12)
            $monthlyRevenue = array_fill(1, 12, 0);
            foreach ($results as $row) {
                $monthlyRevenue[$row['month']] = (float)($row['total_revenue'] ?? 0);
            }
            return $monthlyRevenue;
        } catch (Exception $e) {
            error_log("Failed to fetch monthly revenue: " . $e->getMessage());
            return array_fill(1, 12, 0);
        }
    }
}