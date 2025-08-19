<?php include 'header.php';
 
if (isset($_GET['add'])) {
    $item = $_GET['add'];
    if (!in_array($item, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $item;
    }
}
 
if (isset($_GET['remove'])) {
    $item = $_GET['remove'];
    $_SESSION['cart'] = array_filter($_SESSION['cart'], fn($i) => $i !== $item);
}
?>
<main>
    <h2>Your Cart</h2>
    <?php if (empty($_SESSION['cart'])): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <li>
                    <?= $item ?>
                    <a href="cart.php?remove=<?= $item ?>">[Remove]</a>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="checkout.php"><button>Proceed to Checkout</button></a>
    <?php endif; ?>
</main>
</body>
</html>
 
