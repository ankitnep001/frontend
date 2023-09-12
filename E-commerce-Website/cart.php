<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css
" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon"   href="img/icon.png">

    <title>Cart</title>
</head>

<body>
    <div class="container-product">
        <div class="navbar">
            <div class="logo">
                <h2>Sports Nepal</h2>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="product.html">Products</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="account.html">Account</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img src="img/cart.png" width="30px" height="30px" alt=""></a>
            <img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>

    </div>

    <!-- ----------- cart item details-------- -->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>

            <tr>
                <td>Product Name</td>
                <td><input type="number" name="" id="" value="1"></td>
                <td>Rs.1000</td>
            </tr>
        </table>
    </div>
    <div class="paydiv">
        <a href="esewa.html" class="payment">Pay with eSewa</a>

    </div>

    <!-- --------footer-------- -->
    <footer>
        <div class="foot">
            <div class="about">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum totam molestiae, quibusdam,
                    molestias optio provident aliquid veritatis quos facere, vitae eos. Architecto rerum dolorum eum!
                </p>
                <ul class="icon">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>


            <div class="quicklinks">
                <h2>QuickLinks</h2>
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">Terms & Consitions</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="contact">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <span>Ganeshthan<br> Chabahil, kathmandu <br>Nepal</span>
                    </li>
                    <li>
                        <span><i class="fa-solid fa-phone"></i></span>
                        <p><a href="tel:123456789">+9779862727272</a><br>
                            <a href="tel:123456789">+9779862727272</a>
                        </p>
                    </li>
                    <li>
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <p><a href="mailto:me@gmail.com">me@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>Copyright &#169; Sports Nepal. All Rights reserved</p>
    </div>

    <!-- ------js for toggle menu------ -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            }
            else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>


</body>

</html>