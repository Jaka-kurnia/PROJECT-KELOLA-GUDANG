<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>

    <!-- Paper CSS -->
    <link rel="stylesheet" href="../../../assets/paper/paper.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @media print {
            body {
                background: none;
            }

            table {
                font-size: 11px;
            }
        }
    </style>
</head>

<?php
include '../../../config/koneksi.php';

$sql = "SELECT * 
        FROM products
        INNER JOIN categories 
        ON products.category_id = categories.category_id";

$execute = mysqli_query($koneksi, $sql);

if (!$execute) {
    die("Query error: " . mysqli_error($koneksi));
}
?>


<body class="A5 landscape">

    <section class="sheet padding-10mm">

        <div class="container-fluid">

            <h4 class="text-center mb-4 fw-bold">List Products</h4>

            <table class="table table-bordered table-striped table-sm">
                <thead class="table-primary text-center text-white">
                    <tr>
                        <th width="5%">No</th>
                        <th>Code</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($product = mysqli_fetch_array($execute)) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $no; ?></td>
                            <td><?php echo $product['product_code']; ?></td>
                            <td><?php echo $product['product_name']; ?></td>
                            <td><?php echo $product['category_name']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                            <td><?php echo $product['stock']; ?></td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </section>

</body>

</html>