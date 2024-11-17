<div>Read JSON</div>

<?php
$json = file_get_contents("./file/product.json");
$data = json_decode($json, true);
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php
        foreach ($data as $product) { ?>
            <tr>
                <td><?php echo $product["id"]; ?></td>
                <td><?php echo $product["name"]; ?></td>
                <td><?php echo $product["price"]; ?></td>
            </tr>
            
     <?php }?>
    
</table>

<h3>Read JSON with Type</h3>

<?php
$json = file_get_contents("./file/productType.json");
$data = json_decode($json, true);
?>

<table border="1">
    <!-- <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr> -->
    <?php
        foreach ($data['productType'] as $type) { ?>
            <tr>
                <td><?php echo $type["name"]; ?></td>
                <td>
                    <table border="1">
                        <?php
                            foreach ($type['products'] as $product) { ?>
                                <tr>
                                    <td><?php echo $product["name"]; ?></td>
                                </tr>
                            <?php } ?>
                        

                    </table>
                </td>
            </tr>
            
     <?php }?>
    
</table>