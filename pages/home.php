<?php

    if ( class_exists( 'Products' ) ) 
        $products = new Products();

    // Only change code below this line 

        // instructions: get all products from the database and store them in the $products variable


        // instructions: if the form was submitted, add the product to the wishlist or remove it from the wishlist (if it's already in the wishlist)



    // Only change code above this line

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
            <!-- Only change code below this line -->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <form 
                            action="/wishlist/submit" 
                            method="post">
                            <button type="submit" class="btn btn-link p-0 m-0">
                                <i class="bi bi-heart-fill" style="position: absolute; top: 10px; right: 10px; font-size: 1.5rem; color: #f00;"></i>
                            </button>
                        </form>
                        <img
                            src="https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-product-1_large.png?format=webp&v=1530129292"
                            class="card-img-top"
                            alt="Product 1"
                        />
                        <div class="card-body text-center">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">
                                $10
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <form 
                            action="/wishlist/submit" 
                            method="post">
                            <button type="submit" class="btn btn-link p-0 m-0">
                                <i class="bi bi-heart" style="position: absolute; top: 10px; right: 10px; font-size: 1.5rem; color: #f00;"></i>
                            </button>
                        </form>
                        <img
                            src="https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-product-2_large.png?format=webp&v=1530129318"
                            class="card-img-top"
                            alt="Product 2"
                        />
                        <div class="card-body text-center">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">
                                $15
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <form 
                            action="/wishlist/submit" 
                            method="post">
                            <button type="submit" class="btn btn-link p-0 m-0">
                                <i class="bi bi-heart" style="position: absolute; top: 10px; right: 10px; font-size: 1.5rem; color: #f00;"></i>
                            </button>
                        </form>
                        <img
                            src="https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-product-3_large.png?format=webp&v=1530129341"
                            class="card-img-top"
                            alt="Product 3"
                        />
                        <div class="card-body text-center">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">
                                $20
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
            <!-- Only change code above this line -->

        </div><!-- .container -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"
        ></script>
    </body>
</html>
