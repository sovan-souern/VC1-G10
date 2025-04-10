<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Checkout Experience</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #0066cc;
            --secondary-color: #f8f9fa;
            --accent-color: #00a3e0;
            --success-color: #28a745;
            --warning-color: #f5c518;
            --danger-color: #dc3545;
            --dark-color: #212529;
            --light-color: #f8f9fa;
            --gray-color: #6c757d;
            --border-radius: 10px;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        body {
            background-color: var(--light-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-color);
        }

        .checkout-container {
            max-width: 1200px;
            margin: 30px auto;
        }

        /* Stepper styling */
        .checkout-stepper {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            position: relative;
        }

        .checkout-stepper::before {
            content: '';
            position: absolute;
            top: 24px;
            left: 0;
            right: 0;
            height: 3px;
            background-color: #e9ecef;
            z-index: 1;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
            flex: 1;
        }

        .step-number {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #e9ecef;
            color: var(--gray-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 10px;
            transition: var(--transition);
            font-size: 18px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .step.active .step-number {
            background-color: var(--primary-color);
            color: white;
            box-shadow: 0 4px 8px rgba(0, 102, 204, 0.3);
        }

        .step.completed .step-number {
            background-color: var(--success-color);
            color: white;
        }

        .step-label {
            font-size: 14px;
            font-weight: 500;
            color: var(--gray-color);
            transition: var(--transition);
            text-align: center;
        }

        .step.active .step-label {
            color: var(--dark-color);
            font-weight: 600;
        }

        /* Form sections */
        .form-section {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: var(--box-shadow);
            display: none;
            transition: var(--transition);
        }

        .form-section.active {
            display: block;
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 25px;
            color: var(--dark-color);
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 15px;
        }

        /* Form fields */
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .form-group {
            flex: 1;
            position: relative;
            margin-bottom: 20px;
        }

        .form-label {
            margin-bottom: 8px;
            display: block;
            font-weight: 500;
            font-size: 14px;
            color: #495057;
        }

        .form-control, .form-select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            transition: var(--transition);
            font-size: 15px;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(0, 102, 204, 0.25);
        }

        .form-control.is-invalid, .form-select.is-invalid {
            border-color: var(--danger-color);
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: var(--danger-color);
        }

        .form-control.is-invalid ~ .invalid-feedback {
            display: block;
        }

        /* Payment options */
        .payment-options-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .payment-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            border: 2px solid #dee2e6;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            height: 100%;
            position: relative;
            background-color: white;
        }

        .payment-option:hover {
            border-color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .payment-option.selected {
            border-color: var(--primary-color);
            background-color: rgba(0, 102, 204, 0.05);
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.2);
        }

        .payment-option.selected::after {
            content: '✓';
            position: absolute;
            top: -10px;
            right: -10px;
            width: 25px;
            height: 25px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .payment-logo {
            width: 80px;
            height: 60px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .payment-option:hover .payment-logo {
            transform: scale(1.05);
        }

        .payment-logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 5px;
        }

        .payment-details {
            text-align: center;
        }

        .payment-title {
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--dark-color);
            font-size: 16px;
        }

        .payment-description {
            font-size: 0.85rem;
            color: var(--gray-color);
        }

        .payment-radio {
            position: absolute;
            opacity: 0;
        }

        /* Contact options */
        .contact-options {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
            margin-bottom: 25px;
        }

        .contact-option {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            border: 2px solid #dee2e6;
            border-radius: 8px;
            cursor: pointer;
            flex: 1;
            min-width: 120px;
            justify-content: center;
            transition: var(--transition);
            background-color: white;
        }

        .contact-option:hover {
            border-color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-option.selected {
            border-color: var(--primary-color);
            background-color: rgba(0, 102, 204, 0.05);
            box-shadow: 0 3px 10px rgba(0, 102, 204, 0.2);
        }

        .contact-option i {
            margin-right: 10px;
            color: var(--gray-color);
            font-size: 18px;
            transition: var(--transition);
        }

        .contact-option.selected i {
            color: var(--primary-color);
        }

        /* Order summary */
        .order-summary {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 30px;
            position: sticky;
            top: 20px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 15px;
        }

        .order-header h5 {
            font-weight: 600;
            color: var(--dark-color);
            margin: 0;
            font-size: 20px;
        }

        .edit-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: var(--transition);
            display: flex;
            align-items: center;
        }

        .edit-link i {
            margin-right: 5px;
        }

        .edit-link:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .order-items-container {
            max-height: 250px;
            overflow-y: auto;
            margin-bottom: 20px;
            padding-right: 5px;
        }

        .order-items-container::-webkit-scrollbar {
            width: 5px;
        }

        .order-items-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .order-items-container::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }

        .product-item {
            display: flex;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f1f1f1;
        }

        .product-image {
            width: 70px;
            height: 70px;
            background-color: #f8f9fa;
            border-radius: 8px;
            margin-right: 15px;
            flex-shrink: 0;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-details {
            flex-grow: 1;
        }

        .product-name {
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--dark-color);
        }

        .product-quantity {
            font-size: 14px;
            color: var(--gray-color);
        }

        .product-price {
            font-weight: 600;
            text-align: right;
            white-space: nowrap;
            color: var(--dark-color);
            font-size: 16px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 15px;
            color: #495057;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            font-weight: 600;
            font-size: 20px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e9ecef;
            color: var(--dark-color);
        }

        /* Navigation buttons */
        .nav-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            gap: 15px;
        }

        .back-btn {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            color: #495057;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            min-width: 120px;
            text-align: center;
        }

        .back-btn:hover {
            background-color: #e9ecef;
            transform: translateY(-2px);
        }

        .next-btn, .proceed-payment-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            min-width: 120px;
            text-align: center;
        }

        .next-btn:hover, .proceed-payment-btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 102, 204, 0.3);
        }

        .next-btn:disabled, .proceed-payment-btn:disabled {
            background-color: #6c757d;
            cursor: not-allowed;
            opacity: 0.65;
            transform: none;
            box-shadow: none;
        }

        .proceed-payment-btn {
            flex: 1;
            margin-top: 0;
            padding: 14px 24px;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .proceed-payment-btn i {
            margin-right: 8px;
        }

        /* Secure checkout badge */
        .secure-checkout {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            color: var(--gray-color);
            font-size: 14px;
        }

        .secure-checkout i {
            margin-right: 8px;
            color: var(--success-color);
        }

        /* QR Code Popup - IMPROVED */
        .qr-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(5px);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .qr-popup.active {
            opacity: 1;
            visibility: visible;
        }

        .qr-popup-content {
            background-color: #fff;
            border-radius: 20px;
            padding: 35px;
            width: 450px;
            text-align: center;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            transform: scale(0.9);
            transition: transform 0.3s ease;
            overflow: hidden;
        }

        .qr-popup.active .qr-popup-content {
            transform: scale(1);
        }

        .qr-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .qr-bank-info {
            display: flex;
            align-items: center;
        }

        .qr-logo {
            width: 60px;
            height: 60px;
            object-fit: contain;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .qr-bank-name {
            margin-left: 15px;
            font-weight: 600;
            font-size: 18px;
            color: var(--dark-color);
            text-align: left;
        }

        .qr-timer {
            display: flex;
            align-items: center;
            font-size: 18px;
            font-weight: 500;
            color: var(--gray-color);
            background-color: #f8f9fa;
            padding: 8px 15px;
            border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .timer-circle {
            margin-right: 10px;
            width: 24px;
            height: 24px;
        }

        .timer-circle-bg {
            fill: none;
            stroke: #e0e0e0;
            stroke-width: 3;
        }

        .timer-circle-progress {
            fill: none;
            stroke: var(--accent-color);
            stroke-width: 3;
            stroke-linecap: round;
            transform: rotate(-90deg);
            transform-origin: center;
            stroke-dasharray: 60;
            stroke-dashoffset: 0;
            transition: stroke-dashoffset 1s linear;
        }

        .qr-close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #f1f1f1;
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            z-index: 10;
        }

        .qr-close-btn:hover {
            background-color: #e9ecef;
            color: var(--dark-color);
            transform: rotate(90deg);
        }

        .qr-amount {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-color);
            position: relative;
            display: inline-block;
        }

        .qr-amount::before {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent-color);
            border-radius: 3px;
        }

        .qr-instruction {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 25px;
            color: var(--gray-color);
        }

        .qr-code-container {
            position: relative;
            margin: 0 auto;
            width: 220px;
            padding: 15px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .qr-code-wrapper {
            position: relative;
            width: 100%;
            height: 190px;
        }

        .qr-code-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 8px;
        }

        .qr-code-corners {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .qr-code-corners .corner {
            position: absolute;
            width: 30px;
            height: 30px;
            border: 4px solid var(--warning-color);
        }

        .qr-code-corners .top-left {
            top: -4px;
            left: -4px;
            border-right: none;
            border-bottom: none;
            border-top-left-radius: 8px;
        }

        .qr-code-corners .top-right {
            top: -4px;
            right: -4px;
            border-left: none;
            border-bottom: none;
            border-top-right-radius: 8px;
        }

        .qr-code-corners .bottom-left {
            bottom: -4px;
            left: -4px;
            border-right: none;
            border-top: none;
            border-bottom-left-radius: 8px;
        }

        .qr-code-corners .bottom-right {
            bottom: -4px;
            right: -4px;
            border-left: none;
            border-top: none;
            border-bottom-right-radius: 8px;
        }

        .qr-scan-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
            border-radius: 8px;
        }

        .qr-scan-line {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--warning-color), transparent);
            box-shadow: 0 0 8px 2px rgba(245, 197, 24, 0.5);
            animation: scanAnimation 2s linear infinite;
        }

        @keyframes scanAnimation {
            0% {
                top: 0;
            }
            50% {
                top: 100%;
            }
            100% {
                top: 0;
            }
        }

        .qr-footer {
            margin-top: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
        }

        .qr-help-btn {
            background-color: transparent;
            border: 1px solid #dee2e6;
            color: var(--gray-color);
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            font-size: 14px;
        }

        .qr-help-btn:hover {
            background-color: #f8f9fa;
            color: var(--dark-color);
        }

        .qr-cancel-btn {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            color: var(--danger-color);
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            font-size: 14px;
        }

        .qr-cancel-btn:hover {
            background-color: rgba(220, 53, 69, 0.1);
            border-color: var(--danger-color);
        }

        /* Bank Info Popup */
        .bank-info-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(3px);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .bank-info-popup.active {
            opacity: 1;
            visibility: visible;
        }

        .bank-info-content {
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
            width: 400px;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transform: scale(0.9);
            transition: transform 0.3s ease;
        }

        .bank-info-popup.active .bank-info-content {
            transform: scale(1);
        }

        .bank-info-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #f1f1f1;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .bank-info-close:hover {
            background-color: #e9ecef;
            color: var(--dark-color);
            transform: rotate(90deg);
        }

        .bank-info-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .bank-info-logo {
            width: 70px;
            height: 70px;
            object-fit: contain;
            border-radius: 10px;
            margin-right: 15px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .bank-info-name {
            font-size: 24px;
            font-weight: 600;
            color: var(--dark-color);
        }

        .bank-info-details {
            margin-bottom: 20px;
        }

        .bank-info-row {
            display: flex;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #f1f1f1;
        }

        .bank-info-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .bank-info-label {
            width: 120px;
            font-weight: 500;
            color: var(--gray-color);
        }

        .bank-info-value {
            flex: 1;
            font-weight: 500;
            color: var(--dark-color);
        }

        .bank-info-features {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .bank-info-features-title {
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark-color);
            font-size: 16px;
        }

        .bank-feature {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .bank-feature i {
            color: var(--success-color);
            margin-right: 10px;
            font-size: 14px;
        }

        .bank-info-select-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bank-info-select-btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 102, 204, 0.3);
        }

        .bank-info-select-btn i {
            margin-right: 8px;
        }

        /* Toast notification */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }

        .toast {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
            padding: 15px 20px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            animation: slideIn 0.3s ease, fadeOut 0.5s ease 2.5s forwards;
            max-width: 350px;
            border-left: 5px solid;
        }

        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; visibility: hidden; }
        }

        .toast.error {
            border-left-color: var(--danger-color);
        }

        .toast.success {
            border-left-color: var(--success-color);
        }

        .toast.info {
            border-left-color: var(--accent-color);
        }

        .toast i {
            margin-right: 12px;
            font-size: 22px;
        }

        .toast.error i {
            color: var(--danger-color);
        }

        .toast.success i {
            color: var(--success-color);
        }

        .toast.info i {
            color: var(--accent-color);
        }

        .toast-message {
            flex: 1;
        }

        .toast-title {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 16px;
        }

        .toast-body {
            font-size: 14px;
            color: var(--gray-color);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .checkout-container {
                margin: 15px auto;
            }
            
            .checkout-stepper {
                flex-direction: column;
                align-items: flex-start;
                margin-left: 20px;
            }
            
            .checkout-stepper::before {
                top: 0;
                bottom: 0;
                left: 24px;
                right: auto;
                height: 100%;
                width: 3px;
            }
            
            .step {
                flex-direction: row;
                width: 100%;
                margin-bottom: 20px;
            }
            
            .step-number {
                margin-right: 15px;
                margin-bottom: 0;
            }
            
            .form-row {
                flex-direction: column;
                gap: 15px;
            }
            
            .payment-options-container {
                grid-template-columns: 1fr;
            }
            
            .contact-options {
                flex-direction: column;
            }
            
            .nav-buttons {
                flex-direction: column;
                gap: 10px;
            }
            
            .back-btn, .next-btn {
                width: 100%;
                text-align: center;
            }
            
            .order-summary {
                position: static;
                margin-top: 20px;
            }
            
            .qr-popup-content, .bank-info-content {
                width: 90%;
                padding: 25px;
            }
            
            .qr-logo, .bank-info-logo {
                width: 50px;
                height: 50px;
            }
            
            .qr-bank-name, .bank-info-name {
                font-size: 16px;
            }
            
            .qr-timer {
                font-size: 16px;
                padding: 6px 12px;
            }
            
            .qr-amount {
                font-size: 32px;
            }
            
            .qr-instruction {
                font-size: 16px;
            }
            
            .qr-code-container {
                width: 180px;
            }
            
            .qr-code-wrapper {
                height: 150px;
            }
        }

        @media (max-width: 480px) {
            .form-section {
                padding: 20px;
            }
            
            .qr-header {
                flex-direction: column;
                gap: 15px;
            }
            
            .qr-bank-info {
                width: 100%;
                justify-content: center;
            }
            
            .qr-close-btn {
                top: 10px;
                right: 10px;
                width: 30px;
                height: 30px;
                font-size: 16px;
            }
            
            .qr-amount {
                font-size: 28px;
            }
            
            .qr-footer {
                flex-direction: column;
                gap: 10px;
            }
            
            .qr-help-btn, .qr-cancel-btn {
                width: 100%;
            }
            
            .bank-info-header {
                flex-direction: column;
                text-align: center;
            }
            
            .bank-info-logo {
                margin-right: 0;
                margin-bottom: 10px;
            }
            
            .bank-info-row {
                flex-direction: column;
            }
            
            .bank-info-label {
                width: 100%;
                margin-bottom: 5px;
            }
        }
    </style>
</head>

<body>
    <div class="container checkout-container">
        <!-- Toast container for notifications -->
        <div class="toast-container" id="toast-container"></div>

        <!-- Bank Info Popup -->
        <div class="bank-info-popup" id="bank-info-popup">
            <div class="bank-info-content">
                <button class="bank-info-close" id="bank-info-close">
                    <i class="fas fa-times"></i>
                </button>
                
                <div class="bank-info-header">
                    <img id="bank-info-logo" src="/placeholder.svg" alt="Bank Logo" class="bank-info-logo">
                    <div class="bank-info-name" id="bank-info-name">Bank Name</div>
                </div>
                
                <div class="bank-info-details">
                    <div class="bank-info-row">
                        <div class="bank-info-label">Type</div>
                        <div class="bank-info-value" id="bank-info-type">Mobile Banking</div>
                    </div>
                    <div class="bank-info-row">
                        <div class="bank-info-label">Processing Time</div>
                        <div class="bank-info-value" id="bank-info-time">Instant</div>
                    </div>
                    <div class="bank-info-row">
                        <div class="bank-info-label">Fee</div>
                        <div class="bank-info-value" id="bank-info-fee">No additional fees</div>
                    </div>
                </div>
                
                <div class="bank-info-features">
                    <div class="bank-info-features-title">Features</div>
                    <div class="bank-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Secure payment processing</span>
                    </div>
                    <div class="bank-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Instant transaction confirmation</span>
                    </div>
                    <div class="bank-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>24/7 customer support</span>
                    </div>
                    <div class="bank-feature" id="bank-feature-specific">
                        <i class="fas fa-check-circle"></i>
                        <span>Bank-specific feature</span>
                    </div>
                </div>
                
                <button class="bank-info-select-btn" id="bank-info-select-btn">
                    <i class="fas fa-check"></i> Select This Payment Method
                </button>
            </div>
        </div>

        <!-- QR Code Popup -->
        <div class="qr-popup" id="qr-popup">
            <div class="qr-popup-content">
                <button class="qr-close-btn" id="qr-close-btn">
                    <i class="fas fa-times"></i>
                </button>
                
                <div class="qr-header">
                    <div class="qr-bank-info">
                        <img id="qr-payment-logo" src="/placeholder.svg" alt="Bank Logo" class="qr-logo">
                        <div class="qr-bank-name" id="qr-bank-name">ABA Bank</div>
                    </div>
                    <div class="qr-timer">
                        <svg class="timer-circle" width="24" height="24">
                            <circle class="timer-circle-bg" cx="12" cy="12" r="10"></circle>
                            <circle class="timer-circle-progress" cx="12" cy="12" r="10"></circle>
                        </svg>
                        <span id="qr-timer-text">03:00</span>
                    </div>
                </div>
                
                <div class="qr-amount" id="qr-amount">$5.00</div>
                <div class="qr-instruction">Scan to pay</div>
                
                <div class="qr-code-container">
                    <div class="qr-code-wrapper">
                        <img id="qr-code-image" src="/placeholder.svg" alt="QR Code" class="qr-code-image">
                        <div class="qr-code-corners">
                            <span class="corner top-left"></span>
                            <span class="corner top-right"></span>
                            <span class="corner bottom-left"></span>
                            <span class="corner bottom-right"></span>
                        </div>
                        <div class="qr-scan-animation">
                            <div class="qr-scan-line"></div>
                        </div>
                    </div>
                </div>
                
                <div class="qr-footer">
                    <button class="qr-help-btn" id="qr-help-btn">
                        <i class="fas fa-question-circle"></i> Need Help?
                    </button>
                    <button class="qr-cancel-btn" id="qr-cancel-btn">
                        <i class="fas fa-times-circle"></i> Cancel Payment
                    </button>
                </div>
            </div>
        </div>

        

        <div class="row">
            <!-- Left Column - Forms -->
            <div class="col-md-7">
                <form action="/checkout/store" method="POST" id="checkout-form">
                    <!-- Hidden inputs -->
                    <input type="hidden" name="admin_id" value="">
                    <input type="hidden" name="items" id="items">
                    <input type="hidden" name="total" id="total_input">
                    <input type="hidden" name="product_id" id="product_id">
                    <input type="hidden" name="payment_method" id="payment_method">
                    <input type="hidden" name="buy_at" id="buy_at">
                    <input type="hidden" name="order_status" id="order_status" value="Pending">
                    <input type="hidden" name="contact_method" id="contact_method" value="phone">

                    <!-- Customer Information Section -->
                    <div class="form-section active" id="customer-section">
                        <div class="section-title">Customer Information</div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName" class="form-label">First name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" name="first_name" required>
                                <div class="invalid-feedback">Please enter your first name</div>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="form-label">Last name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="lastName" name="last_name" required>
                                <div class="invalid-feedback">Please enter your last name</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                            <div class="invalid-feedback">Please enter a valid phone number</div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">Please enter a valid email address</div>
                        </div>
                        <div class="nav-buttons">
                            <div></div> <!-- Empty div for spacing -->
                            <button type="button" class="next-btn" data-next="delivery">
                                Continue to Delivery
                            </button>
                        </div>
                    </div>

                    <!-- Delivery Details Section -->
                    <div class="form-section" id="delivery-section">
                        <div class="section-title">Delivery Details</div>
                        <div class="form-group">
                            <label for="country" class="form-label">Country/Region <span class="text-danger">*</span></label>
                            <select class="form-select" id="country" name="country" required>
                                <option value="">Select country</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Canada">Canada</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                            <div class="invalid-feedback">Please select a country</div>
                        </div>
                        <div class="form-group">
                            <label for="address1" class="form-label">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address1" name="address" required>
                            <div class="invalid-feedback">Please enter your address</div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="city" class="form-label">City <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="city" name="city" required>
                                <div class="invalid-feedback">Please enter your city</div>
                            </div>
                            <div class="form-group">
                                <label for="postal_code" class="form-label">Postal Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="postal_code" name="postal_code" required>
                                <div class="invalid-feedback">Please enter your postal code</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="delivery_notes" class="form-label">Delivery Notes</label>
                            <textarea class="form-control" id="delivery_notes" name="delivery_notes" rows="2" placeholder="Special instructions for delivery (optional)"></textarea>
                        </div>
                        <div class="nav-buttons">
                            <button type="button" class="back-btn" data-prev="customer">
                                Back
                            </button>
                            <button type="button" class="next-btn" data-next="payment">
                                Continue to Payment
                            </button>
                        </div>
                        <!-- Hidden inputs for cart items and total -->
                        <input type="hidden" name="items" id="items">
                        <input type="hidden" name="total" id="total_input">
                        <input type="hidden" name="product_id" id="product_id">
                        <button type="submit" class="continue-btn" onclick="window.location.href='https://pay.ababank.com/efRPcMcXvMLRihKq6'">Continue</button>
                    </div>

                    <!-- Payment Method Section -->
                    <div class="form-section" id="payment-section">
                        <div class="section-title">Payment Method</div>
                        <div class="payment-options-container">
                            <!-- ABA PAY -->
                            <div class="payment-option" data-payment="aba">
                                <input type="radio" name="payment_option" id="aba_pay" class="payment-radio">
                                <div class="payment-logo">
                                    <img src="https://media.licdn.com/dms/image/v2/C510BAQEnYW7qoK68EQ/company-logo_200_200/company-logo_200_200/0/1630579892170/aba_bank_logo?e=2147483647&v=beta&t=CNGsdiQOwm9PB1VAqw8aqn7Iau72Zen8WZmsqrdC1sY" alt="ABA Pay Logo">
                                </div>
                                <div class="payment-details">
                                    <div class="payment-title">ABA PAY</div>
                                    <div class="payment-description">Scan to pay with ABA Mobile</div>
                                </div>
                            </div>
                            
                            <!-- ACLEDA PAY -->
                            <div class="payment-option" data-payment="acleda">
                                <input type="radio" name="payment_option" id="acleda_pay" class="payment-radio">
                                <div class="payment-logo">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRM37KLHTgu31C4LMRGMBzIu7QwwJXVeOC-EA&s" alt="ACLEDA Pay Logo">
                                </div>
                                <div class="payment-details">
                                    <div class="payment-title">ACLEDA PAY</div>
                                    <div class="payment-description">Pay securely with ACLEDA</div>
                                </div>
                            </div>
                            
                            <!-- Wing Bank -->
                            <div class="payment-option" data-payment="wing">
                                <input type="radio" name="payment_option" id="wing_bank" class="payment-radio">
                                <div class="payment-logo">
                                    <img src="https://play-lh.googleusercontent.com/-deHHbwBUh2I4dzTjq9n4ggBGPqJwKzj9pwvPqyaR-hPxzKN9QVJOBsZP_ShlCDmX60" alt="Wing Bank Logo">
                                </div>
                                <div class="payment-details">
                                    <div class="payment-title">Wing Bank</div>
                                    <div class="payment-description">Pay securely with WingPay</div>
                                </div>
                            </div>
                        </div>

                        <!-- Preferred contact line -->
                        <div class="section-title">Preferred contact line</div>
                        <div class="contact-options">
                            <div class="contact-option selected" data-contact="phone">
                                <i class="fas fa-phone"></i>
                                Phone call
                            </div>
                            <div class="contact-option" data-contact="telegram">
                                <i class="fab fa-telegram"></i>
                                Telegram
                            </div>
                            <div class="contact-option" data-contact="facebook">
                                <i class="fab fa-facebook"></i>
                                Facebook
                            </div>
                        </div>

                        <div class="nav-buttons">
                            <button type="button" class="back-btn" data-prev="delivery">
                                Back
                            </button>
                            <button type="submit" id="proceed-payment-btn" class="proceed-payment-btn" disabled>
                                <i class="fas fa-lock"></i> Proceed to Payment
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Right Column - Order Summary -->
            <div class="col-md-5">
                <div class="order-summary">
                    <div class="order-header">
                        <h5>Order summary (<span id="order-item-count">0</span>)</h5>
                        <a href="/cart" class="edit-link">
                            <i class="fas fa-edit"></i> Edit Cart
                        </a>
                    </div>

                    <!-- Product Items (Dynamically Populated) -->
                    <div id="order-items" class="order-items-container">
                        <!-- Cart items will be dynamically added here -->
                    </div>

                    <!-- Price Summary -->
                    <div class="summary-row">
                        <div>Subtotal</div>
                        <div id="subtotal">$0.00</div>
                    </div>
                    <div class="summary-row">
                        <div>Delivery</div>
                        <div>pay by yourself</div>
                    </div>
                    <div class="total-row">
                        <div>Total</div>
                        <div id="total">$0.00</div>
                    </div>

                    <!-- Secure Checkout -->
                    <div class="secure-checkout">
                        <i class="fas fa-shield-alt"></i>
                        Secure Checkout
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sample cart data for demonstration
        const sampleCart = [
            {
                id: 1,
                name: "William Shirt",
                price: 29.99,
                quantity: 2,
                image: "https://via.placeholder.com/70"
            },
            {
                id: 2,
                name: "Boris Sandals",
                price: 49.99,
                quantity: 1,
                image: "https://via.placeholder.com/70"
            }
        ];

        // Bank information data
        const bankInfo = {
            aba: {
                name: "ABA Bank",
                logo: "https://media.licdn.com/dms/image/v2/C510BAQEnYW7qoK68EQ/company-logo_200_200/company-logo_200_200/0/1630579892170/aba_bank_logo?e=2147483647&v=beta&t=CNGsdiQOwm9PB1VAqw8aqn7Iau72Zen8WZmsqrdC1sY",
                qrCode: "https://i.pinimg.com/736x/d8/11/10/d81110f74b45542aa26eddc290592ed8.jpg",
                type: "Mobile Banking",
                processingTime: "Instant",
                fee: "No additional fees",
                specificFeature: "ABA Mobile app integration"
            },
            acleda: {
                name: "ACLEDA Bank",
                logo: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRM37KLHTgu31C4LMRGMBzIu7QwwJXVeOC-EA&s",
                qrCode: "https://i.pinimg.com/736x/d8/11/10/d81110f74b45542aa26eddc290592ed8.jpg",
                type: "Mobile & Internet Banking",
                processingTime: "Within 15 minutes",
                fee: "No additional fees",
                specificFeature: "ACLEDA ToanChet app support"
            },
            wing: {
                name: "Wing Bank",
                logo: "https://play-lh.googleusercontent.com/-deHHbwBUh2I4dzTjq9n4ggBGPqJwKzj9pwvPqyaR-hPxzKN9QVJOBsZP_ShlCDmX60",
                qrCode: "https://i.pinimg.com/736x/d8/11/10/d81110f74b45542aa26eddc290592ed8.jpg",
                type: "Mobile Banking",
                processingTime: "Instant",
                fee: "No additional fees",
                specificFeature: "Wing Money app with cashback rewards"
            }
        };

        // Load cart from localStorage or use sample data
        let cart = [];
        try {
            const storedCart = localStorage.getItem('cart');
            cart = storedCart ? JSON.parse(storedCart) : sampleCart;
        } catch (e) {
            console.error("Error parsing cart from localStorage:", e);
            cart = sampleCart;
        }

        // Toast notification function
        function showToast(type, title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toast = document.createElement('div');
            toast.className = `toast ${type}`;
            
            const icon = type === 'error' ? 'fa-exclamation-circle' : 
                         type === 'success' ? 'fa-check-circle' : 'fa-info-circle';
            
            toast.innerHTML = `
                <i class="fas ${icon}"></i>
                <div class="toast-message">
                    <div class="toast-title">${title}</div>
                    <div class="toast-body">${message}</div>
                </div>
            `;
            
            toastContainer.appendChild(toast);
            
            // Remove toast after 3 seconds
            setTimeout(() => {
                toast.remove();
            }, 3000);
        }

        // Render cart items in the order summary
        function renderOrderSummary() {
            const orderItemsContainer = document.getElementById('order-items');
            orderItemsContainer.innerHTML = '';
            
            if (cart.length === 0) {
                orderItemsContainer.innerHTML = '<p class="text-center py-3">Your cart is empty.</p>';
            } else {
                cart.forEach((item) => {
                    const productItem = document.createElement('div');
                    productItem.classList.add('product-item');
                    productItem.innerHTML = `
                        <div class="product-image">
                            <img src="${item.image}" alt="${item.name}">
                        </div>
                        <div class="product-details">
                            <div class="product-name">${item.name}</div>
                            <div class="product-quantity">Qty: ${item.quantity}</div>
                        </div>
                        <div class="product-price">$${(item.price * item.quantity).toFixed(2)}</div>
                    `;
                    orderItemsContainer.appendChild(productItem);
                });
            }
            updateOrderSummary();
        }

        // Update order summary and prepare data for submission
        function updateOrderSummary() {
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            const subtotal = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
            const total = subtotal;

            document.getElementById('order-item-count').textContent = totalItems;
            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;

            const productIds = cart.map(item => item.id).filter(id => id).join(',');
            document.getElementById('items').value = JSON.stringify(cart);
            document.getElementById('product_id').value = productIds;
            document.getElementById('total_input').value = total.toFixed(2);
        }

        // Form validation
        function validateSection(sectionId) {
            const section = document.getElementById(sectionId);
            const requiredFields = section.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            // Additional validation for specific fields
            if (sectionId === 'customer-section') {
                const emailField = document.getElementById('email');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (emailField.value && !emailRegex.test(emailField.value)) {
                    emailField.classList.add('is-invalid');
                    isValid = false;
                }

                const phoneField = document.getElementById('phone');
                if (phoneField.value && phoneField.value.length < 8) {
                    phoneField.classList.add('is-invalid');
                    isValid = false;
                }
            }

            if (sectionId === 'payment-section') {
                const selectedPayment = document.querySelector('.payment-option.selected');
                if (!selectedPayment) {
                    showToast('error', 'Payment Method Required', 'Please select a payment method to continue');
                    isValid = false;
                }
            }

            return isValid;
        }

        // Navigation between sections
        function navigateToSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.form-section').forEach(section => {
                section.classList.remove('active');
            });
            
            // Show the target section
            document.getElementById(`${sectionId}-section`).classList.add('active');
            
            // Update stepper
            document.querySelectorAll('.step').forEach(step => {
                step.classList.remove('active', 'completed');
            });
            
            const steps = ['customer', 'delivery', 'payment'];
            const currentIndex = steps.indexOf(sectionId);
            
            // Mark current step as active
            document.querySelector(`.step[data-step="${sectionId}"]`).classList.add('active');
            
            // Mark previous steps as completed
            for (let i = 0; i < currentIndex; i++) {
                document.querySelector(`.step[data-step="${steps[i]}"]`).classList.add('completed');
            }

            // Enable/disable payment button based on payment selection
            if (sectionId === 'payment') {
                updatePaymentButton();
            }
        }

        // Update payment button state
        function updatePaymentButton() {
            const proceedBtn = document.getElementById('proceed-payment-btn');
            const selectedPayment = document.querySelector('.payment-option.selected');
            
            if (selectedPayment) {
                proceedBtn.disabled = false;
            } else {
                proceedBtn.disabled = true;
            }
        }

        // Next button click handler
        document.querySelectorAll('.next-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const currentSection = this.closest('.form-section').id;
                const nextSection = this.getAttribute('data-next');
                
                if (validateSection(currentSection)) {
                    navigateToSection(nextSection);
                } else {
                    showToast('error', 'Required Fields', 'Please fill in all required fields correctly');
                }
            });
        });

        // Back button click handler
        document.querySelectorAll('.back-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const prevSection = this.getAttribute('data-prev');
                navigateToSection(prevSection);
            });
        });

        // Stepper click handler
        document.querySelectorAll('.step').forEach(step => {
            step.addEventListener('click', function() {
                const targetSection = this.getAttribute('data-step');
                const steps = ['customer', 'delivery', 'payment'];
                const currentSection = document.querySelector('.form-section.active').id.replace('-section', '');
                const currentIndex = steps.indexOf(currentSection);
                const targetIndex = steps.indexOf(targetSection);
                
                // Only allow clicking on completed steps or the next step
                if (targetIndex < currentIndex || (targetIndex === currentIndex + 1 && validateSection(`${currentSection}-section`))) {
                    navigateToSection(targetSection);
                } else if (targetIndex > currentIndex + 1) {
                    showToast('error', 'Complete Previous Step', 'Please complete the current step first');
                } else if (targetIndex === currentIndex + 1) {
                    showToast('error', 'Required Fields', 'Please fill in all required fields correctly');
                }
            });
        });

        // Function to show bank info popup
        function showBankInfo(paymentMethod) {
            const bankInfoPopup = document.getElementById('bank-info-popup');
            const bankInfoLogo = document.getElementById('bank-info-logo');
            const bankInfoName = document.getElementById('bank-info-name');
            const bankInfoType = document.getElementById('bank-info-type');
            const bankInfoTime = document.getElementById('bank-info-time');
            const bankInfoFee = document.getElementById('bank-info-fee');
            const bankFeatureSpecific = document.getElementById('bank-feature-specific');
            
            const bank = bankInfo[paymentMethod];
            
            // Set bank info
            bankInfoLogo.src = bank.logo;
            bankInfoName.textContent = bank.name;
            bankInfoType.textContent = bank.type;
            bankInfoTime.textContent = bank.processingTime;
            bankInfoFee.textContent = bank.fee;
            bankFeatureSpecific.querySelector('span').textContent = bank.specificFeature;
            
            // Store selected payment method for the select button
            document.getElementById('bank-info-select-btn').setAttribute('data-payment', paymentMethod);
            
            // Show the popup with animation
            bankInfoPopup.style.display = 'flex';
            setTimeout(() => {
                bankInfoPopup.classList.add('active');
            }, 10);
        }

        // Function to close bank info popup
        function closeBankInfo() {
            const bankInfoPopup = document.getElementById('bank-info-popup');
            bankInfoPopup.classList.remove('active');
            
            setTimeout(() => {
                bankInfoPopup.style.display = 'none';
            }, 300);
        }

        // Timer for QR code popup
        let qrTimerInterval = null;

        // Function to start the QR code timer
        function startQrTimer() {
            let timeLeft = 180; // 3 minutes in seconds
            const timerElement = document.getElementById('qr-timer-text');
            const timerCircle = document.querySelector('.timer-circle-progress');
            const totalTime = 180; // Total time in seconds
            const circumference = 60; // 2 * π * r, where r = 10

            qrTimerInterval = setInterval(() => {
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                timerElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

                // Update the circle progress
                const dashoffset = circumference * (1 - timeLeft / totalTime);
                timerCircle.style.strokeDashoffset = dashoffset;

                if (timeLeft <= 0) {
                    clearInterval(qrTimerInterval);
                    closeQrPopup();
                    showToast('error', 'Payment Expired', 'Your payment session has expired. Please try again.');
                }
                timeLeft--;
            }, 1000);
        }

        // Function to open the QR code popup
        function openQrPopup(paymentMethod) {
            const qrPopup = document.getElementById('qr-popup');
            const qrPaymentLogo = document.getElementById('qr-payment-logo');
            const qrBankName = document.getElementById('qr-bank-name');
            const qrAmount = document.getElementById('qr-amount');
            const qrCodeImage = document.getElementById('qr-code-image');
            
            const bank = bankInfo[paymentMethod];
            
            // Set the payment logo and bank name
            qrPaymentLogo.src = bank.logo;
            qrBankName.textContent = bank.name;
            
            // Set the amount
            const totalAmount = document.getElementById('total').textContent;
            qrAmount.textContent = totalAmount;
            
            // Set the QR code image
            qrCodeImage.src = bank.qrCode;
            
            // Show the popup with animation
            qrPopup.style.display = 'flex';
            setTimeout(() => {
                qrPopup.classList.add('active');
            }, 10);
            
            // Start the timer
            startQrTimer();
        }

        // Function to close the QR code popup
        function closeQrPopup() {
            const qrPopup = document.getElementById('qr-popup');
            qrPopup.classList.remove('active');
            
            setTimeout(() => {
                qrPopup.style.display = 'none';
            }, 300);
            
            clearInterval(qrTimerInterval);
        }

        // Payment option selection - Show bank info when clicked
        const paymentOptions = document.querySelectorAll('.payment-option');
        paymentOptions.forEach(option => {
            option.addEventListener('click', function() {
                const paymentMethod = this.getAttribute('data-payment');
                showBankInfo(paymentMethod);
            });
        });

        // Bank info select button click handler
        document.getElementById('bank-info-select-btn').addEventListener('click', function() {
            const paymentMethod = this.getAttribute('data-payment');
            
            // Remove selected class from all options
            paymentOptions.forEach(opt => {
                opt.classList.remove('selected');
                opt.querySelector('input[type="radio"]').checked = false;
            });
            
            // Add selected class to the selected option
            const selectedOption = document.querySelector(`.payment-option[data-payment="${paymentMethod}"]`);
            selectedOption.classList.add('selected');
            selectedOption.querySelector('input[type="radio"]').checked = true;
            
            // Store selected payment method
            document.getElementById('payment_method').value = paymentMethod;
            
            // Update payment button
            updatePaymentButton();
            
            // Close bank info popup
            closeBankInfo();
            
            // Show success toast
            showToast('success', 'Payment Method Selected', `${bankInfo[paymentMethod].name} has been selected as your payment method.`);
        });

        // Close bank info popup when the close button is clicked
        document.getElementById('bank-info-close').addEventListener('click', closeBankInfo);

        // Close QR code popup when the close button is clicked
        document.getElementById('qr-close-btn').addEventListener('click', closeQrPopup);
        document.getElementById('qr-cancel-btn').addEventListener('click', closeQrPopup);

        // Help button click handler
        document.getElementById('qr-help-btn').addEventListener('click', function() {
            showToast('info', 'Payment Help', 'Please contact customer support at support@example.com for assistance with your payment.');
        });

        // Contact option selection
        const contactOptions = document.querySelectorAll('.contact-option');
        contactOptions.forEach(option => {
            option.addEventListener('click', function() {
                // Remove selected class from all options
                contactOptions.forEach(opt => {
                    opt.classList.remove('selected');
                });
                
                // Add selected class to clicked option
                this.classList.add('selected');
                
                // Store selected contact method
                const contactMethod = this.getAttribute('data-contact');
                document.getElementById('contact_method').value = contactMethod;
            });
        });

        // Form field validation on input
        document.querySelectorAll('.form-control, .form-select').forEach(field => {
            field.addEventListener('input', function() {
                if (this.hasAttribute('required') && this.value.trim()) {
                    this.classList.remove('is-invalid');
                }
            });
        });

        // Handle form submission
        document.getElementById('checkout-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            // Validate payment section
            if (!validateSection('payment-section')) {
                return false;
            }

            const paymentMethod = document.querySelector('.payment-option.selected').getAttribute('data-payment');
            
            // Show loading state
            const submitBtn = document.getElementById('proceed-payment-btn');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
            
            // Simulate form submission (in a real app, you would submit to server)
            setTimeout(() => {
                // Reset button state
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-lock"></i> Proceed to Payment';
                
                // Show QR code popup for payment
                openQrPopup(paymentMethod);
            }, 1000);
        });

        // Set current date and time for the hidden buy_at field
        document.getElementById('buy_at').value = new Date().toISOString().slice(0, 16);
// Handle form submission
document.getElementById('checkout-form').addEventListener('submit', async function (e) {
    e.preventDefault(); // Prevent default form submission

    // Validate payment section
    if (!validateSection('payment-section')) {
        return false;
    }

    
});

        // Initial render
        renderOrderSummary();
        
    </script>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>

</html>