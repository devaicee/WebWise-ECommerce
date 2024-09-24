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

// Handle update cart action
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_cart'])) {
    foreach ($_POST['quantity'] as $id => $quantity) {
        $_SESSION['cart'][$id]['quantity'] = $quantity;
    }
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
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_SESSION['cart'] as $id => $product): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($product['name']); ?></td>
                                        <td>₱<?php echo htmlspecialchars($product['price']); ?></td>
                                        <td>
                                            <input type="number" name="quantity[<?php echo $id; ?>]" value="<?php echo htmlspecialchars($product['quantity']); ?>" min="1">
                                        </td>
                                        <td>₱<?php echo htmlspecialchars($product['price'] * $product['quantity']); ?></td>
                                        <td><a href="cart.php?action=remove&id=<?php echo $id; ?>" class="btn btn-danger">Remove</a></td>
                                    </tr>
                                    <?php $total_price += $product['price'] * $product['quantity']; ?>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="3"><h5>Subtotal</h5></td>
                                    <td colspan="2"><h5>₱<?php echo htmlspecialchars($total_price); ?></h5></td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <button type="submit" name="update_cart" class="btn btn-primary">Update Cart</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
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
