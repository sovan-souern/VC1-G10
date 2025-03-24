<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
    overflow-x: hidden;
  }

  .serch-group {
    display: flex;
    justify-content: space-between;
    padding: 10px 10px;
  }
  
  .label {
    margin-right: 10px;
  }

  select {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    cursor: pointer;
    outline: none;
    font-size: 16px;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
  }

  .card-page {
    background-color: #ffffff;
    border-radius: 15px;
    padding: 20px;
    margin: 20px 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .card-page h4 {
    margin: 0 0 20px 0;
    color: #333;
    font-size: 1.5em;
  }

  .page {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
    padding: 10px;
    max-width: 100%;
  }

  @media (min-width: 1024px) {
    .page {
      grid-template-columns: repeat(4, 1fr);
    }
  }

  .product-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    position: relative;
    border: 2px solid transparent;
    transition: all 0.3s ease;
    padding: 15px;
    min-width: 200px;
  }

  .product-card:hover {
    border-color: #6c63ff;
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
  }

  .product-image {
    width: 100%;
    height: auto;
    max-height: 150px;
    object-fit: cover;
    border-radius: 8px 8px 0 0;
    margin-bottom: 12px;
  }

  .product-image-fallback {
    width: 100%;
    height: 150px;
    background-color: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #999;
    font-size: 0.9em;
    border-radius: 8px 8px 0 0;
    margin-bottom: 12px;
  }

  .discount-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background: linear-gradient(135deg, #ff6b6b, #ff3f3f);
    color: white;
    padding: 5px 10px;
    border-radius: 12px;
    font-weight: bold;
    font-size: 0.85em;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    transform: rotate(5deg);
  }

  .product-title {
    font-size: 1.2em;
    margin: 0 0 8px 0;
    color: #333;
    text-align: left;
    font-weight: 600;
    padding: 0 15px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .price-container {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 10px;
    margin: 10px 0;
    padding: 0 15px;
  }

  .price {
    font-size: 1.2em;
    color: #333;
    font-weight: bold;
  }

  .discount-price {
    font-size: 1em;
    color: #ff3f3f;
    text-decoration: line-through;
    opacity: 0.8;
  }

  .action-buttons {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
  }

  .action-btn {
    background: #fff;
    border-radius: 5px;
    padding: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 35px;
    height: 35px;
    transition: all 0.3s ease;
    box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
  }

  .action-btn img {
    width: 24px;
    height: 24px;
  }

  .action-btn:hover {
    border-color: rgb(255, 255, 255);
    background: rgba(108, 99, 255, 0.1);
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
  }

  .like-btn {
    background: #fff;
    border: 2px solid #ddd;
    border-radius: 50%;
    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
  }

  .like-btn img {
    width: 24px;
    height: 24px;
  }

  .like-btn:hover {
    background: #ffebee;
    border-color: #ff3f3f;
  }

  .like-btn.liked {
    background: #ffebee;
    border-color: #ff3f3f;
  }

  .like-btn.liked img {
    filter: drop-shadow(0 0 5px #ff3f3f);
  }

  /* Pagination and Show Remaining Goods Button */
  .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    margin-top: 20px;
  }

  .pagination button {
    padding: 8px 16px;
    border: 1px solid #ddd;
    background: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .pagination button:hover {
    background: #6c63ff;
    color: white;
    border-color: #6c63ff;
  }

  .pagination button:disabled {
    background: #f0f0f0;
    cursor: not-allowed;
    color: #999;
  }

  .show-remaining-btn {
    padding: 10px 20px;
    background: #ff6b6b;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease;
    margin-top: 20px;
    display: none;
    margin-left: auto;
    margin-right: auto;
    display: block;
  }

  .show-remaining-btn:hover {
    background: #ff3f3f;
  }

  /* Responsive Adjustments */
  @media (max-width: 1023px) {
    .page {
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
  }

  @media (max-width: 480px) {
    .page {
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
      padding: 5px;
    }

    .product-card {
      padding: 8px;
      min-width: 0;
      width: 100%;
      box-sizing: border-box;
    }

    .product-image {
      max-height: 75px;
      width: 75px;
      height: auto;
    }

    .product-title {
      font-size: 0.9em;
      padding: 0 5px;
      white-space: normal;
      overflow: visible;
      text-overflow: unset;
      line-height: 1.2;
    }

    .price-container {
      gap: 5px;
      padding: 0 5px;
      flex-wrap: wrap;
    }

    .price {
      font-size: 0.9em;
    }

    .discount-price {
      font-size: 0.8em;
    }

    .discount-badge {
      font-size: 0.75em;
      padding: 4px 8px;
      top: 5px;
      right: 5px;
    }

    .action-buttons {
      gap: 8px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .action-btn {
      width: 32px;
      height: 32px;
      padding: 6px;
    }

    .action-btn img {
      width: 20px;
      height: 20px;
    }

    .like-btn {
      width: 32px;
      height: 32px;
    }

    .like-btn img {
      width: 20px;
      height: 20px;
    }
  }
</style>