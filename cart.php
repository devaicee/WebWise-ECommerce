<?php
session_start();
define('TITLE', "Cart");
include 'assets/layouts/header.php';

// Handle add to cart action
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['qty'];

    // Initialize the cart if it's not set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add the product to the cart
    $_SESSION['cart'][] = [
        'product_id' => $product_id,
        'name' => $product_name,
        'price' => $price,
        'quantity' => $quantity
    ];

    header('Location: cart.php');
    exit();
}

// Handle remove from cart action
if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['id'])) {
    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);
    $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex the array
    header('Location: cart.php');
    exit();
}

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $total_price = 0;
    ?>
    <section class="banner-area organic-breadcrumb">
        <!-- Your banner area HTML code -->
    </section>
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <form action="cart.php" method="post">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_SESSION['cart'] as $id => $product): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($product['name']); ?></td>
                                        <td>₱<?php echo htmlspecialchars($product['price']); ?></td>
                                        <td>
                                            <?php echo htmlspecialchars($product['quantity']); ?>
                                        </td>
                                        <td>₱<?php echo htmlspecialchars($product['price'] * $product['quantity']); ?></td>
                                    </tr>
                                    <?php $total_price += $product['price'] * $product['quantity']; ?>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="3"><h5>Subtotal</h5></td>
                                    <td colspan="2"><h5>₱<?php echo htmlspecialchars($total_price); ?></h5></td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </form>
                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="index.php">Continue Shopping</a	>
                                        <a class="primary-btn" href="checkout.php">Proceed to checkout</a>
                                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
} else {
    ?>
    <div class="container">
        <p>Your cart is empty.</p>
    </div>
    <?php
}

include 'assets/layouts/footer.php';
?>
