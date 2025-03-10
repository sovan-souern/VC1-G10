<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 20px;
}
/* .container{
    background-color:gray;
} */
.notification-container {
    margin-left: 5%;
    max-width: 90%;
    /* margin: 0 auto; */
}

.notification {
    display: flex;
    align-items: flex-start;
    background-color: #fff;
    padding: 15px;
    margin-bottom: 10px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.notification-icon {
    font-size: 24px;
    margin-right: 15px;
}

.notification-content {
    flex: 1;
}

.notification-content h3 {
    margin: 0;
    font-size: 16px;
    color: #333;
}

.notification-content p {
    margin: 5px 0;
    font-size: 14px;
    color: #666;
}

.notification-time {
    font-size: 12px;
    color: #999;
}

/* Responsive Design */
@media (max-width: 600px) {
    .notification {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .notification-icon {
        margin-bottom: 10px;
    }
}
</style>

<div class="container">
    <hr>
    <!-- <h3>Your Notication</h3> -->
</div>
<div class="notification-container">
        <div class="notification">
            <div class="notification-icon">✅</div>
            <div class="notification-content">
                <h3>Buy Success</h3>
                <p>Buy already this product skincare #id-003 have been processed</p>
                <span class="notification-time">1 hour ago</span>
            </div>
        </div>
        <div class="notification">
            <div class="notification-icon">💳</div>
            <div class="notification-content">
                <h3>Pay money success</h3>
                <p>You have already paid and sent the invoice by email</p>
                <span class="notification-time">2 minutes ago</span>
            </div>
        </div>
        <div class="notification">
            <div class="notification-icon">❤️</div>
            <div class="notification-content">
                <h3>Favorite my product</h3>
                <p>My favorite products so that I can buy them before they run out.</p>
                <span class="notification-time">5 minutes ago</span>
            </div>
        </div>
        <div class="notification">
            <div class="notification-icon">🎉</div>
            <div class="notification-content">
                <h3>Discount my product</h3>
                <p>You receive an exclusive discount notification.</p>
                <span class="notification-time">50 minutes ago</span>
            </div>
        </div>
        <div class="notification">
            <div class="notification-icon">⏰</div>
            <div class="notification-content">
                <h3>Reminders</h3>
                <p>You received a reminder for the items left in your cart to complete my purchase.</p>
                <span class="notification-time">44 minutes ago</span>
            </div>
        </div>
        <div class="notification">
            <div class="notification-icon">📦</div>
            <div class="notification-content">
                <h3>Know about stock</h3>
                <p>You get a re-stock notification for out-of-stock products that can be purchased when other products</p>
                <span class="notification-time">14 minutes ago</span>
            </div>
        </div>
    </div>