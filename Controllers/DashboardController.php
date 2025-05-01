<?php
require_once 'Controllers/BaseController.php';
require_once 'Models/OrderModel.php';

class DashboardController extends BaseController {
    function index() {
        // Initialize OrderModel
        $orderModel = new OrderModel();

        // Fetch total number of orders
        $totalOrders = $orderModel->getTotalOrders();

        // Fetch total revenue for 2025
        $totalRevenue2025 = $orderModel->getTotalRevenue(2025);

        // Fetch total products sold for 2025
        $totalProductsSold2025 = $orderModel->getTotalProductsSold(2025);

        // Fetch total profit for 2025
        $totalProfit2025 = $orderModel->getTotalProfit(2025);

        // Fetch yearly revenue for 2023–2025
        $yearlyRevenue = $orderModel->getYearlyRevenue([2023, 2024, 2025]);

        // Fetch monthly revenue for 2025 (default year)
        $monthlyRevenue2025 = $orderModel->getMonthlyRevenue(2025);

        // Define periods for percentage changes
        $currentPeriod = [
            'start' => '2025-01-01 00:00:00', // Start of 2025
            'end' => '2025-12-31 23:59:59'   // End of 2025
        ];
        $previousPeriod = [
            'start' => '2024-01-01 00:00:00', // Start of 2024
            'end' => '2024-12-31 23:59:59'   // End of 2024
        ];

        // Calculate percentage changes
        $orderPercentageChange = $orderModel->getOrderPercentageChange($currentPeriod, $previousPeriod);
        $revenuePercentageChange = $orderModel->getRevenuePercentageChange($currentPeriod, $previousPeriod);
        $productsSoldPercentageChange = $orderModel->getProductsSoldPercentageChange($currentPeriod, $previousPeriod);
        $profitPercentageChange = $orderModel->getProfitPercentageChange($currentPeriod, $previousPeriod);

        // Prepare data for the view
        $data = [
            'profit' => $totalProfit2025,
            'profitPercentageChange' => $profitPercentageChange,
            'sales' => $totalProductsSold2025,
            'salesPercentageChange' => $productsSoldPercentageChange,
            'payments' => $totalRevenue2025,
            'orders' => $totalOrders,
            'orderPercentageChange' => $orderPercentageChange,
            'totalRevenue2025' => $totalRevenue2025,
            'revenuePercentageChange' => $revenuePercentageChange,
            'yearlyRevenue' => $yearlyRevenue, // Revenue for 2023–2025
            'monthlyRevenue2025' => $monthlyRevenue2025, // Monthly revenue for 2025
            'totalRevenue' => [
                '2024' => $yearlyRevenue[2024],
                '2025' => $yearlyRevenue[2025]
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