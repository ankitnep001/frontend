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
    <title>Sports Nepal</title>
</head>

<body>
    <div class="container">
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
            <img src="img/menu.png"  class="menu-icon" onclick="menutoggle()">
        </div>
        <hr>

        <div class="row">
            <div class="col-1">
                <h1>Provides the best quality<br>Sport Clothes and Equipments</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Quis, nostrum.</p>
                <a href="" class="btn">Explore &#8594;</a>
            </div>

            <div class="col-2">
                <img src="img/formt.png" alt="">
            </div>
        </div>
    </div>

    <!-- featured categories -->

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="img/messi.webp" alt="">
                </div>
                <div class="col-3">
                    <img src="img/lebron.webp" alt="">
                </div>
                <div class="col-3">
                    <img src="img/f1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products -->

    <div class="small-container">
        <h2 class="product-title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="img/jersy-1.png" alt="">
                <h4>Barcelona Jersey</h4>
                <div class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>Rs.1000</p>
            </div>

            <div class="col-4">
                <img src="img/gold.png" alt="">
                <h4>Gloden State Warrior Jersey</h4>
                <div class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>Rs.1200</p>
            </div>

            <div class="col-4">
                <img src="img/futsal.png" alt="">
                <h4>Futsal Shoes</h4>
                <div class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>Rs.3500<br><del>Rs.4000</del> 12.5%</p>
            </div>
        </div>

        <h2 class="product-title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="img/football.webp" alt="">
                <h4>Football</h4>
                <div class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>Rs.1000</p>
            </div>

            <div class="col-4">
                <img src="img/shinpad.png" alt="">
                <h4>Shin Pad</h4>
                <div class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>Rs.500</p>
            </div>

            <div class="col-4">
                <img src="img/basket.webp" alt="">
                <h4>Basketball</h4>
                <div class="rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>Rs.1200</p>
            </div>
        </div>
    </div>

    <!-- Offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col2">
                    <img src="img/snookercue.png" alt="" class="offer-img">
                </div>
                <div class="col2">
                    <p>Exclusively Available on Sports Nepal</p>
                    <h1>Snooker Cue</h1>
                    <small>This snooker cue is used by the famous snooker player <b>Ronnie O'Sullivan</b></small>
                    <br>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    

    <!-- --------Testimonial------ -->
    <!-- <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat officiis, nemo in recusandae
                        soluta ab dicta ratione nobis autem minus!</p>
                        <div class="rate">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- --------brands------- -->
    <div class="brands">
        <h2>Our Brands</h2>
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="img/nike.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/adidas.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/underarmour.png" alt="">
                </div>
                
            </div>
        </div>
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
                            <a href="tel:123456789">+9779862727272</a></p>
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
        var MenuItems=document.getElementById("MenuItems");
        MenuItems.style.maxHeight="0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight=="0px"){
                MenuItems.style.maxHeight="200px"
            }
            else{
                MenuItems.style.maxHeight="0px"
            }
        }
    </script>
</body>

</html>