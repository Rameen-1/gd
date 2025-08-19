<?php include 'header.php'; ?>
<main>
    <h2>Checkout</h2>
    <?php if (empty($_SESSION['cart'])): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <p>You're about to register these domains:</p>
        <ul>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="thankyou.php"><button>Confirm</button></a>
    <?php endif; ?>
</main>
</body>
</html>
