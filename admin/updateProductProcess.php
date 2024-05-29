<?php
// Include the database connection script
include '../connection.php'; // Ensure this path is correct based on your directory structure

// Check if the database connection is established
if (!isset($conn)) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the POST data
    $id = $_POST['id'];
    $title = $_POST['ti'];
    $stitle = $_POST['st'];
    $price = $_POST['pr'];
    $discount = $_POST['di'];
    $desc = $_POST['de'];
    $qty = $_POST['qt'];
    $category = $_POST['ca'];
    $brand = $_POST['br'];
    $model = $_POST['mo'];
    $display = $_POST['dis'];
    $cpu = $_POST['cp'];
    $ram = $_POST['ra'];
    $gpu = $_POST['gp'];
    $storage = $_POST['str'];
    $size = $_POST['si'];
    $pmkeyword = $_POST['pm'];
    $delivery = $_POST['del'];
    $dprice = $_POST['dprice'];
    $warranty = $_POST['war'];

    // Handle file uploads
    $images = [];
    for ($i = 0; $i < count($_FILES); $i++) {
        if (isset($_FILES['image' . $i]) && $_FILES['image' . $i]['error'] == 0) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES['image' . $i]['name']);
            if (move_uploaded_file($_FILES['image' . $i]['tmp_name'], $target_file)) {
                $images[] = $target_file;
            }
        }
    }

    // Prepare the SQL query to update product details
    $query = "UPDATE products SET 
                title = ?, 
                short_title = ?, 
                price = ?, 
                discount = ?, 
                description = ?, 
                quantity = ?, 
                category = ?, 
                brand = ?, 
                model = ?, 
                display = ?, 
                cpu = ?, 
                ram = ?, 
                gpu = ?, 
                storage = ?, 
                size = ?, 
                meta_keywords = ?, 
                delivery = ?, 
                discount_price = ?, 
                warranty = ? 
              WHERE id = ?";

    // Prepare the statement
    if ($stmt = mysqli_prepare($conn, $query)) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, 'ssddsisissssssssssdsi', $title, $stitle, $price, $discount, $desc, $qty, $category, $brand, $model, $display, $cpu, $ram, $gpu, $storage, $size, $pmkeyword, $delivery, $dprice, $warranty, $id);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Success";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing the query: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Invalid request";
}
?>
