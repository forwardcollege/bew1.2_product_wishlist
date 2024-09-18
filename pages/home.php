<?php 
    //link to db
    $database = connectToDB();
    //chooses table
    $sql = "SELECT * FROM products";
    //prep
    $query = $database -> prepare($sql); 
    //exec
    $query->execute();
    //grabs data
    $products = $query -> fetchAll();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Products Wishlist</title>
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous"
        />
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        />
        <style type="text/css">
        body {
            background: #f1f1f1;
        }
        </style>
    </head>
    <body>
        
            <div class="container mt-5 mb-2 mx-auto" style="max-width: 900px;">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach($products as $index => $product) : ?>
                        <div class="col">

                            <!--item-->
                                <div class="card h-100">

                                    <form method="POST" action="wishlist/submit">
                                        <input type="hidden" name="id" value="<?= $product['id']; ?>">
                                        <input type="hidden" name="is_wishlist" value="<?= $product['is_wishlist']; ?>">
                                        
                                        <?php if ($product["is_wishlist"] == 1) : ?>
                                            <button class="btn btn-link p-0 m-0">
                                                <i class="bi bi-heart-fill" style="position: absolute; top: 10px; right: 10px; font-size: 1.5rem; color: #f00;"></i>
                                            </button>
                                        <?php else : ?>
                                            <button class="btn btn-link p-0 m-0">
                                                <i class="bi bi-heart" style="position: absolute; top: 10px; right: 10px; font-size: 1.5rem; color: #f00;"></i>
                                            </button>
                                        <?php endif; ?>
                                        
                                    </form>

                                    <img
                                        src="<?= $product['image_url'];?>"
                                        class="card-img-top"
                                        alt="<?= $product['name'];?>"
                                    />
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><?=$product['name'];?></h5>
                                        <p class="card-text">
                                            $<?=$product['price'];?>
                                        </p>
                                    </div>

                                </div><!--end of card-->
                                
                        </div><!--end of column-->

                    <?php endforeach; ?>

                </div><!-- row -->

            </div><!-- .container -->

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"
        ></script>
    </body>
</html>