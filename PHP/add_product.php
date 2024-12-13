<?php
// Include database connection file
require_once 'db.php';

// Form to add product
?>
<h1>Add Product</h1>
<form action="add_product.php" method="post">
  <label for="product_name">Product Name:</label>
  <input type="text" id="product_name" name="product_name"><br><br>
  <label for="quantity">Quantity:</label>
  <input type="number" id="quantity" name="quantity"><br><br>
  <label for="description">Description:</label>
  <textarea id="description" name="description"></textarea><br><br>
  <label for="type">Type:</label>
  <select id="type" name="type">
    <option value="PERFUME">Perfume</option>
    <option value="TROUSERS">Trousers</option>
    <option value="BAGS">Bags</option>
    <option value="LAWN">Lawn</option>
  </select><br><br>
  <input type="submit" value="Add Product">
</form>

<?php
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $product_name = $_POST["product_name"];
  $quantity = $_POST["quantity"];
  $description = $_POST["description"];
  $type = $_POST["type"];

  // Insert data into database
  $query = "INSERT INTO products (product_name, quantity, description, type) VALUES ('$product_name', '$quantity', '$description', '$type')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "Product added successfully!";
  } else {
    echo "Error adding product: ". mysqli_error($conn);
  }
}
?>