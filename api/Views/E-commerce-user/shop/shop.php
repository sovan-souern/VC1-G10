<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashion | Shop</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Views/E-commerce-user/assets/css/style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .slideshow-container, .dot-container {
            display: none;
        }

        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        /* Stock Status Badge Styles */
        .stock-status-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            color: white;
            padding: 4px 8px;
            border-radius: 5px;
            font-weight: 500;
            z-index: 1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            font-size: 10px;
            text-transform: uppercase;
        }

        .stock-status-badge.low-stock {
            background-color: #f59e0b;
        }

        .stock-status-badge.out-of-stock {
            background-color: #ff5252;
        }

        /* Discount Product Card Styles */
        .discount-product-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            display: flex;
            flex-direction: column;
            min-height: 280px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .discount-product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /* General Product Item Styles */
        .general-product-item {
            position: relative;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            min-height: 280px;
        }

        .general-product-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /* Product Hover Shared Styles */
        .product-hover-shared {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: row;
            gap: 8px;
            opacity: 0;
            visibility: hidden;
            padding: 0;
            z-index: 2;
            transition: opacity 0.3s ease;
        }

        .discount-product-card:hover .discount-product-hover,
        .general-product-item:hover .general-product-hover {
            opacity: 1;
            visibility: visible;
        }

        .product-hover-shared li {
            list-style: none;
            margin: 0;
        }

        .product-hover-shared li a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            background: #ffffff;
            border-radius: 50%;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .product-hover-shared li a:hover {
            background: #ff5252;
            color: #ffffff;
            transform: scale(1.1);
        }

        .product-hover-shared li a .arrow_expand,
        .product-hover-shared li a .icon_heart_alt,
        .product-hover-shared li a .icon_bag_alt {
            color: #333;
            font-size: 14px;
        }

        .product-hover-shared li a:hover .arrow_expand,
        .product-hover-shared li a:hover .icon_heart_alt,
        .product-hover-shared li a:hover .icon_bag_alt {
            color: #fff;
        }

        /* Favorite Icon Styles */
        .product-hover-shared li a.favorited .icon_heart_alt {
            color: #ff5252;
        }

        .product-hover-shared li a.favorited:hover .icon_heart_alt {
            color: #fff;
        }

        /* Add to Cart Button */
        .add-to-cart {
            background-color: #ffb6c1;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            width: 100%;
            font-size: 12px;
            transition: background-color 0.3s ease;
            border-radius: 0px;
            text-transform: uppercase;
        }

        .add-to-cart:hover:not(:disabled) {
            background-color: #ff6699;
        }

        .add-to-cart:disabled {
            background-color: #d3d3d3;
            color: #666;
            cursor: not-allowed;
        }

        body {
            line-height: 1.5;
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .col-lg-2, .col-lg-10, .col-md-2, .col-md-10, .col-sm-12 {
            padding: 0 10px;
            position: relative;
            width: 100%;
        }

        .col-sm-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .py-5 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .text-center {
            text-align: center;
        }

        /* Sidebar Styles */
        .shop__sidebar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .shop__sidebar:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .sidebar__header {
            margin-bottom: 20px;
        }

        .sidebar__header h4 {
            font-size: 20px;
            font-weight: 700;
            color: #1a1a1a;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 15px;
        }

        .sidebar__header h4 i {
            color: #ff5252;
            font-size: 18px;
        }

        .search-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .sidebar-search {
            border-radius: 20px;
            padding: 10px 40px 10px 15px;
            font-size: 14px;
            border: 1px solid #e0e0e0;
            color: #333;
            transition: all 0.3s ease;
            width: 100%;
            background: rgba(255, 255, 255, 0.8);
        }

        .sidebar-search:focus {
            border-color: #ff5252;
            outline: none;
            box-shadow: 0 0 8px rgba(255, 82, 82, 0.2);
            background: white;
        }

        .clear-search {
            position: absolute;
            right: 10px;
            background: none;
            border: none;
            color: #777;
            font-size: 14px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .clear-search:hover {
            color: #ff5252;
        }

        .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
            max-height: 300px;
            overflow-y: auto;
            scrollbar-width: thin;
        }

        .category-list::-webkit-scrollbar {
            width: 5px;
        }

        .category-list::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.05);
            border-radius: 3px;
        }

        .category-list::-webkit-scrollbar-thumb {
            background: #ff5252;
            border-radius: 3px;
        }

        .category-item {
            margin: 6px 0;
            transition: all 0.2s ease;
        }

        .category-filter {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
            padding: 10px 12px;
            border-radius: 8px;
            /* background: rgba(255, 255, 0.7); */
            transition: all 0.3s ease;
        }

        .category-filter:hover {
            background: #ffebee;
            color: #ff5252;
            transform: translateX(5px);
        }

        .category-filter.active {
            background: #ff5252;
            color: white;
            font-weight: 600;
        }

        .category-filter i {
            font-size: 14px;
            color: inherit;
        }

        .category-name {
            flex-grow: 1;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .category-count {
            background: #ff5252;
            color: white;
            font-size: 10px;
            padding: 3px 8px;
            border-radius: 12px;
            min-width: 24px;
            text-align: center;
        }

        .category-filter.active .category-count {
            background: white;
            color: #ff5252;
        }

        .no-items {
            color: #999;
            font-style: italic;
            padding: 10px 12px;
            font-size: 13px;
        }

        .quick-filters {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #e0e0e0;
        }

        .quick-filters h5 {
            font-size: 16px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 10px;
        }

        .filter-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 12px;
            margin: 5px 0;
            border-radius: 8px;
            color: #333;
            font-size: 14px;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.7);
            transition: all 0.3s ease;
            position: relative;
        }

        .filter-item:hover {
            background: #ffebee;
            color: #ff5252;
            transform: translateX(5px);
        }

        .filter-item.active {
            background: #ff5252;
            color: white;
        }

        .filter-item i {
            font-size: 14px;
        }

        .sidebar-toggle {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1050;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #ff5252;
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: white;
            font-size: 18px;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .sidebar-toggle:hover {
            transform: scale(1.1);
            background: #e63946;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 999;
            transition: opacity 0.3s ease;
        }

        /* Product Grid Styles */
        #product-container {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .product-col {
            padding: 0 10px;
            margin-bottom: 20px;
        }

        /* General Product Item Styles */
        .general-product-pic {
            position: relative;
            width: 100%;
            aspect-ratio: 4 / 3;
            overflow: hidden;
        }

        .general-product-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .general-product-text {
            padding: 10px;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .general-product-text h6 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .general-product-text h6 a {
            color: #000000;
            text-decoration: none;
        }

        .general-product-price {
            font-weight: 500;
            font-size: 14px;
            color: #333;
            margin: 5px 0;
        }

        /* Discount Product Card Styles */
        .product-image {
            position: relative;
            width: 100%;
            aspect-ratio: 4 / 3;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .discount-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff5252;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: 500;
            z-index: 1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            font-size: 12px;
        }

        .product-info {
            padding: 10px;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-info h5 {
            font-weight: 600;
            color: #000000;
            margin-bottom: 5px;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Price Styles */
        .price {
            margin: 5px 0;
            font-size: 14px;
            color: #333;
        }

        .original-price {
            text-decoration: line-through;
            color: #999;
            margin-right: 5px;
            font-size: 12px;
        }

        .discounted-price {
            font-weight: 500;
            color: #333;
        }

        /* Pagination Styles */
        .pagination__option {
            margin-top: 20px;
            display: inline-block;
        }

        .pagination__option a {
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            margin: 0 3px;
            color: #333;
            text-decoration: none;
            font-size: 12px;
        }

        .pagination__option a.active,
        .pagination__option a:hover {
            background: #ff5252;
            color: #fff;
        }

        /* Cart Panel Styles */
        .cart-panel {
            position: fixed;
            top: 0;
            right: 0;
            width: 350px;
            height: 100%;
            background: #fff;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }

        .cart-panel.active {
            transform: translateX(0);
        }

        .cart-header {
            background-color: #ffb6c1;
            color: #000;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-header h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .close-cart {
            font-size: 1.5rem;
            cursor: pointer;
            color: #000;
            transition: transform 0.3s ease;
        }

        .close-cart:hover {
            transform: rotate(90deg);
        }

        .cart-items {
            padding: 20px;
            max-height: calc(100% - 150px);
            overflow-y: auto;
        }

        .cart-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .cart-item img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            margin-right: 15px;
            border-radius: 5px;
        }

        .cart-item-details {
            flex-grow: 1;
        }

        .cart-item-name {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .cart-item-price {
            font-weight: bold;
            color: #ff6699;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .quantity-btn {
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            color: #333;
            padding: 0 5px;
        }

        .quantity-input {
            width: 40px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 3px;
            margin: 0 5px;
        }

        .cart-item-total {
            font-weight: bold;
            color: #333;
        }

        .delete-btn {
            margin-left: 10px;
            cursor: pointer;
            color: #777;
            transition: color 0.3s ease;
        }

        .delete-btn:hover {
            color: #ff3333;
        }

        .cart-footer {
            padding: 20px;
            border-top: 1px solid #eee;
            position: absolute;
            bottom: 0;
            width: 100%;
            background: #fff;
        }

        .subtotal {
            display: flex;
            justify-content: space-between;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .view-cart-btn {
            background-color: #ffb6c1;
            color: #000;
            border: none;
            padding: 10px;
            width: 100%;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .view-cart-btn:hover {
            background-color: #ff9eb5;
        }

        /* Toast Notification and Zoom Modal Styles */
        .toast-notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            z-index: 1000;
            font-family: 'Montserrat', sans-serif;
        }

        .toast-notification.show {
            opacity: 1;
            visibility: visible;
        }

        .toast-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
        }

        .toast-header h6 {
            margin: 0;
            font-size: 14px;
            font-weight: 600;
            color: #666;
        }

        .toast-close {
            background: #ffb6c1;
            color: #fff;
            border: none;
            border-radius: 4px;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .toast-close:hover {
            background: #ff6699;
        }

        .toast-body {
            padding: 15px;
            font-size: 14px;
            color: #333;
            line-height: 1.4;
        }

        .zoom-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .zoom-modal-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
        }

        .zoom-modal-content img {
            max-width: 100%;
            max-height: 80vh;
            display: block;
            border: 5px solid white;
            border-radius: 5px;
        }

        .zoom-close {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
        }

        .add-to-cart.adding {
            background-color: #4CAF50;
        }

        /* Responsive Styles */
        @media (min-width: 768px) {
            .col-lg-2.custom-width {
                flex: 0 0 20%;
                max-width: 20%;
            }
            
            .col-lg-10.custom-width {
                flex: 0 0 80%;
                max-width: 80%;
            }
            
            .product-col {
                flex: 0 0 25%;
                max-width: 25%;
            }
        }

        @media (max-width: 991px) and (min-width: 768px) {
            .product-col {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .general-product-item,
            .discount-product-card {
                min-height: 260px;
            }

            .general-product-pic,
            .product-image {
                aspect-ratio: 4 / 3;
            }

            .general-product-text,
            .product-info {
                padding: 8px;
            }

            .general-product-text h6,
            .product-info h5 {
                font-size: 13px;
                margin-bottom: 3px;
            }

            .general-product-price,
            .price {
                font-size: 13px;
            }

            .add-to-cart {
                padding: 8px;
                font-size: 13px;
            }

            .stock-status-badge {
                padding: 3px 6px;
                font-size: 9px;
            }

            .discount-badge {
                padding: 4px 8px;
                font-size: 11px;
            }
        }

        @media (max-width: 767px) {
            .sidebar-toggle {
                display: flex;
            }

            .shop__sidebar {
                padding: 15px;
                border-radius: 0;
                height: 100vh;
                width: 260px;
                position: fixed;
                left: -260px;
                top: 0;
                z-index: 1000;
                transition: left 0.3s ease;
            }

            .shop__sidebar.active {
                left: 0;
            }

            .shop__sidebar:hover {
                transform: none;
            }

            .overlay.active {
                display: block;
            }

            .col-lg-2.custom-width {
                display: block !important;
            }

            .col-lg-10.custom-width {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .product-col {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .general-product-item,
            .discount-product-card {
                min-height: 240px;
            }

            .general-product-pic,
            .product-image {
                aspect-ratio: 4 / 3;
            }

            .general-product-text,
            .product-info {
                padding: 6px;
            }

            .general-product-text h6,
            .product-info h5 {
                font-size: 12px;
                margin-bottom: 2px;
            }

            .general-product-price,
            .price {
                font-size: 11px;
            }

            .add-to-cart {
                padding: 6px;
                font-size: 11px;
            }

            .stock-status-badge {
                padding: 2px 5px;
                font-size: 8px;
            }

            .discount-badge {
                padding: 3px 6px;
                font-size: 10px;
            }

            .sidebar__header h4 {
                font-size: 18px;
            }

            .sidebar__header h4 i {
                font-size: 16px;
            }

            .sidebar-search {
                padding: 8px 35px 8px 12px;
                font-size: 13px;
            }

            .category-filter {
                font-size: 13px;
                padding: 8px 10px;
            }

            .category-count {
                font-size: 9px;
                padding: 2px 6px;
            }

            .quick-filters h5 {
                font-size: 14px;
            }

            .filter-item {
                font-size: 13px;
                padding: 7px 10px;
            }

            .toast-notification {
                width: 280px;
                right: 15px;
                bottom: 15px;
            }
        }

        @media (max-width: 480px) {
            .product-col {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .general-product-item,
            .discount-product-card {
                min-height: 220px;
            }

            .general-product-pic,
            .product-image {
                aspect-ratio: 4 / 3;
            }

            .general-product-text,
            .product-info {
                padding: 5px;
            }

            .general-product-text h6,
            .product-info h5 {
                font-size: 11px;
            }

            .general-product-price,
            .price {
                font-size: 10px;
            }

            .add-to-cart {
                padding: 5px;
                font-size: 11px;
            }

            .stock-status-badge {
                padding: 2px 4px;
                font-size: 7px;
            }

            .discount-badge {
                padding: 3px 5px;
                font-size: 9px;
            }

            .shop__sidebar {
                width: 240px;
                left: -240px;
            }

            .shop__sidebar.active {
                left: 0;
            }

            .sidebar-toggle {
                width: 44px;
                height: 44px;
                font-size: 16px;
            }

            .toast-notification {
                width: 260px;
                right: 10px;
                bottom: 10px;
            }
        }

        #product-container:hover {
            color: initial;
        }
    </style>
</head>

<body>
    <section class="shop spad py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 custom-width mb-4">
                    <div class="shop__sidebar">
                        <div class="sidebar__header">
                            <h4><i class="fas fa-filter"></i> Shop Filters</h4>
                            <div class="search-wrapper">
                                <input type="text" class="form-control sidebar-search" id="sidebarSearch" placeholder="Search categories..." aria-label="Search categories">
                                <button class="clear-search" id="clearSearch" aria-label="Clear search" style="display: none;">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="sidebar__categories">
                            <ul class="category-list" role="listbox">
                                <li role="option" class="category-item">
                                    <a href="#" class="category-filter active" data-category-id="all" aria-label="Filter by All Products">
                                        <i class="fas fa-th"></i>
                                        <span class="category-name">All Products</span>
                                        <span class="category-count"><?php echo isset($products) ? count($products) : '0'; ?></span>
                                    </a>
                                </li>
                                <?php
                                if (isset($categories) && is_array($categories) && !empty($categories)) {
                                    foreach ($categories as $category) {
                                        echo '<li role="option" class="category-item">';
                                        echo '<a href="#" class="category-filter" data-category-id="' . htmlspecialchars($category["category_id"]) . '" aria-label="Filter by ' . htmlspecialchars($category["category_name"]) . '">';
                                        echo '<i class="fas fa-tag"></i>';
                                        echo '<span class="category-name">' . htmlspecialchars($category["category_name"]) . '</span>';
                                        echo '<span class="category-count">' . (isset($category["product_count"]) ? htmlspecialchars($category["product_count"]) : '') . '</span>';
                                        echo '</a>';
                                        echo '</li>';
                                    }
                                } else {
                                    echo '<li class="no-items">No categories available</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 custom-width">
                    <div class="row" id="product-container">
                        <?php foreach ($products as $index => $product): ?>
                            <?php 
                                $hasDiscount = false;
                            ?>
                            <?php foreach ($discounts as $key => $discount): ?>
                                <?php if ($product["product_id"] == $discount["product_id"]): ?>
                                    <?php if ($discount["end_date"] >= date("Y-m-d") && $discount["start_date"] <= date("Y-m-d")): ?>
                                        <?php
                                            $original_price = floatval($discount["price"]);
                                            $discount_percentage = floatval($discount["discount_percentage"]);
                                            $discounted_price = $original_price * (1 - $discount_percentage / 100);
                                            $product_name = htmlspecialchars($discount["product_name"]);
                                            $image_url = !empty($discount["image"]) ? htmlspecialchars($discount["image"]) : 'https://via.placeholder.com/150';
                                            $discount_badge = "-" . number_format($discount_percentage, 0) . "%";
                                            $original_price_formatted = "$" . number_format($original_price, 2);
                                            $discounted_price_formatted = "$" . number_format($discounted_price, 2);
                                            $quantity = isset($product['quantity']) ? intval($product['quantity']) : 0;
                                            $stock_status = '';
                                            $stock_class = '';
                                            $is_out_of_stock = false;
                                            if ($quantity == 0) {
                                                $stock_status = 'Out of Stock';
                                                $stock_class = 'out-of-stock';
                                                $is_out_of_stock = true;
                                            } elseif ($quantity < 10) {
                                                $stock_status = 'Low Stock';
                                                $stock_class = 'low-stock';
                                            }
                                        ?>
                                        <div class="col product-col mb-4" data-category-id="<?php echo htmlspecialchars($product["category_id"]); ?>">
                                            <div class="discount-product-card">
                                                <?php if ($stock_status): ?>
                                                    <div class="stock-status-badge <?php echo $stock_class; ?>"><?php echo $stock_status; ?></div>
                                                <?php endif; ?>
                                                <div class="discount-badge"><?php echo $discount_badge; ?></div>
                                                <div class="product-image">
                                                    <img src="<?php echo $image_url; ?>" alt="<?php echo $product_name; ?>">
                                                    <ul class="discount-product-hover product-hover-shared">
                                                        <li><a href="#" class="image-zoom" data-image="<?php echo $image_url; ?>"><span class="arrow_expand"></span></a></li>
                                                        <li><a href="#" class="favorite-btn" data-product-id="<?php echo htmlspecialchars($product["product_id"]); ?>" data-product-name="<?php echo $product_name; ?>" data-product-price="<?php echo $discounted_price_formatted; ?>" data-product-image="<?php echo $image_url; ?>" data-product-discount="<?php echo $discount_percentage; ?>" data-product-quantity="<?php echo $quantity; ?>" data-category-id="<?php echo htmlspecialchars($product["category_id"]); ?>"><span class="icon_heart_alt"></span></a></li>
                                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-info">
                                                    <h5 class="product-name"><?php echo $product_name; ?></h5>
                                                    <div class="price">
                                                        <span class="original-price"><?php echo $original_price_formatted; ?></span>
                                                        <span class="discounted-price"><?php echo $discounted_price_formatted; ?></span>
                                                    </div>
                                                    <button class="add-to-cart" data-product-name="<?php echo $product_name; ?>" data-product-price="<?php echo $discounted_price; ?>" data-product-image="<?php echo $image_url; ?>" <?php echo $is_out_of_stock ? 'disabled' : ''; ?>>Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                            $hasDiscount = true; 
                                            break; 
                                        ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if (!$hasDiscount): ?>
                                <?php
                                    $price = number_format(floatval($product['price']), 2);
                                    $image = !empty($product['image']) ? htmlspecialchars($product['image']) : 'https://via.placeholder.com/150';
                                    $productLink = "product-page.php?id=" . htmlspecialchars($product['product_id']);
                                    $quantity = isset($product['quantity']) ? intval($product['quantity']) : 0;
                                    $stock_status = '';
                                    $stock_class = '';
                                    $is_out_of_stock = false;
                                    if ($quantity == 0) {
                                        $stock_status = 'Out of Stock';
                                        $stock_class = 'out-of-stock';
                                        $is_out_of_stock = true;
                                    } elseif ($quantity < 10) {
                                        $stock_status = 'Low Stock';
                                        $stock_class = 'low-stock';
                                    }
                                ?>
                                <div class="col product-col mb-4" data-category-id="<?php echo htmlspecialchars($product["category_id"]); ?>">
                                    <div class="general-product-item">
                                        <?php if ($stock_status): ?>
                                            <div class="stock-status-badge <?php echo $stock_class; ?>"><?php echo $stock_status; ?></div>
                                        <?php endif; ?>
                                        <div class="general-product-pic">
                                            <img src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>">
                                            <ul class="general-product-hover product-hover-shared">
                                                <li><a href="#" class="image-zoom" data-image="<?php echo $image; ?>"><span class="arrow_expand"></span></a></li>
                                                <li><a href="#" class="favorite-btn" data-product-id="<?php echo htmlspecialchars($product["product_id"]); ?>" data-product-name="<?php echo htmlspecialchars($product['product_name']); ?>" data-product-price="$<?php echo $price; ?>" data-product-image="<?php echo $image; ?>" data-product-discount="0" data-product-quantity="<?php echo $quantity; ?>" data-category-id="<?php echo htmlspecialchars($product["category_id"]); ?>"><span class="icon_heart_alt"></span></a></li>
                                                <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="general-product-text">
                                            <h6><a href="<?php echo $productLink; ?>"><?php echo htmlspecialchars($product['product_name']); ?></a></h6>
                                            <div class="general-product-price">$<?php echo $price; ?></div>
                                            <button class="add-to-cart" data-product-name="<?php echo htmlspecialchars($product['product_name']); ?>" data-product-price="<?php echo $price; ?>" data-product-image="<?php echo $image; ?>" <?php echo $is_out_of_stock ? 'disabled' : ''; ?>>Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile sidebar toggle button -->
    <button class="sidebar-toggle" id="sidebarToggle" aria-label="Toggle sidebar">
        <i class="fas fa-filter"></i>
    </button>

    <!-- Overlay for mobile sidebar -->
    <div class="overlay" id="overlay"></div>

    <!-- JavaScript Files -->
    <script src="Views/E-commerce-user/assets/js/jquery-3.3.1.min.js"></script>
    <script src="Views/E-commerce-user/assets/js/bootstrap.min.js"></script>
    <script src="Views/E-commerce-user/assets/js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get elements
            const categoryFilters = document.querySelectorAll('.category-filter');
            const quickFilters = document.querySelectorAll('.filter-item');
            const productItems = document.querySelectorAll('.product-col');
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.querySelector('.shop__sidebar');
            const overlay = document.getElementById('overlay');
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            const zoomButtons = document.querySelectorAll('.image-zoom');
            const favoriteButtons = document.querySelectorAll('.favorite-btn');
            const sidebarSearch = document.getElementById('sidebarSearch');
            const clearSearch = document.getElementById('clearSearch');

            // Initialize favorites from localStorage
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

            // Update favorite buttons' appearance based on favorites
            function updateFavoriteButtons() {
                favoriteButtons.forEach(button => {
                    const productId = button.getAttribute('data-product-id');
                    const isFavorited = favorites.some(item => item.product_id === productId);
                    button.classList.toggle('favorited', isFavorited);
                });
            }

            // Favorite button handling
            favoriteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const productId = this.getAttribute('data-product-id');
                    const productName = this.getAttribute('data-product-name');
                    const productPrice = this.getAttribute('data-product-price');
                    const productImage = this.getAttribute('data-product-image');
                    const productDiscount = parseFloat(this.getAttribute('data-product-discount')) || 0;
                    const productQuantity = parseInt(this.getAttribute('data-product-quantity')) || 0;
                    const categoryId = this.getAttribute('data-category-id');

                    const product = {
                        product_id: productId,
                        name: productName,
                        price: productPrice,
                        image: productImage,
                        discount: productDiscount,
                        quantity: productQuantity,
                        category_id: categoryId,
                        description: `Description for ${productName}` // Placeholder, adjust as needed
                    };

                    const existingIndex = favorites.findIndex(item => item.product_id === productId);
                    let action = '';
                    if (existingIndex >= 0) {
                        // Remove from favorites
                        favorites.splice(existingIndex, 1);
                        this.classList.remove('favorited');
                        action = 'remove';
                        showToast('Removed from Favorites', `${productName} has been removed from your favorites.`);
                    } else {
                        // Add to favorites
                        favorites.push(product);
                        this.classList.add('favorited');
                        action = 'add';
                        showToast('Added to Favorites', `${productName} has been added to your favorites.`);
                    }

                    // Update localStorage
                    localStorage.setItem('favorites', JSON.stringify(favorites));
                    updateFavoriteButtons();
                });
            });

            // Category filter handling
            categoryFilters.forEach(filter => {
                filter.addEventListener('click', function(e) {
                    e.preventDefault();
                    const selectedCategoryId = this.getAttribute('data-category-id');
                    
                    // Update active class
                    categoryFilters.forEach(f => f.classList.remove('active'));
                    this.classList.add('active');

                    // Filter products
                    if (selectedCategoryId === 'all') {
                        productItems.forEach(item => {
                            item.style.display = 'none';
                            setTimeout(() => {
                                item.style.display = 'block';
                                item.style.opacity = '1';
                            }, 300);
                        });
                    } else {
                        productItems.forEach(item => {
                            item.style.opacity = '0';
                            setTimeout(() => {
                                item.style.display = item.getAttribute('data-category-id') === selectedCategoryId ? 'block' : 'none';
                                if (item.style.display === 'block') {
                                    setTimeout(() => item.style.opacity = '1', 10);
                                }
                            }, 300);
                        });
                    }

                    // Smooth scroll to product container
                    const productContainer = document.getElementById('product-container');
                    window.scrollTo({
                        top: productContainer.offsetTop - 100,
                        behavior: 'smooth'
                    });

                    // Close mobile sidebar after selection
                    if (window.innerWidth <= 767) {
                        sidebar.classList.remove('active');
                        overlay.classList.remove('active');
                    }
                });
            });

            // Quick filter handling
            quickFilters.forEach(filter => {
                filter.addEventListener('click', function() {
                    this.classList.toggle('active');
                    const filterType = this.getAttribute('data-filter');
                    console.log(`Toggled filter: ${filterType}`);
                    // Add your quick filter logic here (e.g., filter products by new, popular, or sale)
                });
            });

            // Sidebar search handling
            if (sidebarSearch && clearSearch) {
                sidebarSearch.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    const categoryItems = document.querySelectorAll('.category-list .category-item');
                    clearSearch.style.display = searchTerm ? 'block' : 'none';

                    categoryItems.forEach(item => {
                        const categoryName = item.querySelector('.category-name').textContent.toLowerCase();
                        item.style.display = categoryName.includes(searchTerm) ? 'block' : 'none';
                    });
                });

                clearSearch.addEventListener('click', function() {
                    sidebarSearch.value = '';
                    clearSearch.style.display = 'none';
                    const categoryItems = document.querySelectorAll('.category-list .category-item');
                    categoryItems.forEach(item => item.style.display = 'block');
                    sidebarSearch.focus();
                });
            }

            // Mobile sidebar toggle
            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('active');
                    overlay.classList.toggle('active');
                });
            }

            // Overlay click to close sidebar
            if (overlay) {
                overlay.addEventListener('click', function() {
                    sidebar.classList.remove('active');
                    overlay.classList.remove('active');
                });
            }

            // Add to cart functionality
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    if (this.disabled) return; // Prevent action if button is disabled
                    
                    let productName;
                    let productPrice;
                    
                    if (this.closest('.general-product-text')) {
                        productName = this.closest('.general-product-text').querySelector('h6 a').textContent;
                        productPrice = this.closest('.general-product-text').querySelector('.general-product-price').textContent;
                    } else if (this.closest('.product-info')) {
                        productName = this.closest('.product-info').querySelector('.product-name').textContent;
                        productPrice = this.closest('.product-info').querySelector('.discounted-price').textContent;
                    }
                    
                    this.classList.add('adding');
                    this.textContent = 'Added!';
                    
                    setTimeout(() => {
                        this.classList.remove('adding');
                        this.textContent = 'Add to Cart';
                    }, 1500);
                    
                    showToast('Added to Cart', `${productName} has been added to your cart.`);
                });
            });

            // Image zoom functionality
            zoomButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    let imageUrl;
                    if (this.closest('.general-product-pic')) {
                        imageUrl = this.closest('.general-product-pic').querySelector('img').src;
                    } else if (this.closest('.product-image')) {
                        imageUrl = this.closest('.product-image').querySelector('img').src;
                    }
                    
                    const modal = document.createElement('div');
                    modal.classList.add('zoom-modal');
                    modal.innerHTML = `
                        <div class="zoom-modal-content">
                            <span class="zoom-close">×</span>
                            <img src="${imageUrl}" alt="Zoomed Image">
                        </div>
                    `;
                    
                    document.body.appendChild(modal);
                    setTimeout(() => modal.style.opacity = '1', 10);
                    
                    modal.querySelector('.zoom-close').addEventListener('click', () => closeZoomModal(modal));
                    modal.addEventListener('click', (e) => {
                        if (e.target === modal) closeZoomModal(modal);
                    });
                });
            });

            function closeZoomModal(modal) {
                modal.style.opacity = '0';
                setTimeout(() => document.body.removeChild(modal), 300);
            }

            function showToast(header, message) {
                // Remove any existing toast
                const existingToast = document.querySelector('.toast-notification');
                if (existingToast) {
                    existingToast.classList.remove('show');
                    document.body.removeChild(existingToast);
                }

                // Create new toast
                const toast = document.createElement('div');
                toast.classList.add('toast-notification');
                toast.innerHTML = `
                    <div class="toast-header">
                        <h6>${header}</h6>
                        <button class="toast-close">×</button>
                    </div>
                    <div class="toast-body">
                        ${message}
                    </div>
                `;

                document.body.appendChild(toast);

                // Show toast with fade-in
                setTimeout(() => toast.classList.add('show'), 10);

                // Auto-dismiss after 3 seconds
                const timeout = setTimeout(() => {
                    toast.classList.remove('show');
                    setTimeout(() => document.body.removeChild(toast), 300);
                }, 3000);

                // Close button functionality
                toast.querySelector('.toast-close').addEventListener('click', () => {
                    clearTimeout(timeout);
                    toast.classList.remove('show');
                    setTimeout(() => document.body.removeChild(toast), 300);
                });
            }

            // Initialize
            updateFavoriteButtons();
            document.querySelector('.category-filter[data-category-id="all"]').click();
        });
    </script>
</body>
</html>