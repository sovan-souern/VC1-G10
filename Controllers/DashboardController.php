<?php
require_once 'Controllers/BaseController.php';

class DashboardController extends BaseController {
    function index() {
        // Fetch data (replace with actual database queries)
        $data = [
            'profit' => 5000,
            'sales' => 12000,
            'payments' => 8000,
            'orders' => 300,
            'totalRevenue' => [
                '2024' => 40000,
                '2025' => 50000
            ],
            'orderStatistics' => [
                'totalOrders' => 8258,
                'categories' => [
                    ['name' => 'Electronic', 'sales' => '82.5k'],
                    ['name' => 'Fashion', 'sales' => '23.8k'],
                    ['name' => 'Decor', 'sales' => '849k'],
                    ['name' => 'Sports', 'sales' => '99']
                ]
            ]
        ];

        // Pass data to the view
        $this->views('dashboard/list.php', $data);
    }
}