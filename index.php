<!DOCTYPE html>

<!--
    Original Author: Ayden McCall
    Image Credit: Alexas_Fotos; 
    Change Log
    8/26: File Creation and initialization
    8/27: Header, Main, and footer content added, newsletter sign-up added, javascript and css edited. Credit for coffee header photo goes to PublicDomainPictures
    8/29: reworked navbar; added hover animation to navlinks; added social links in footer
    9/2: Fixed bugged newsletter
    9/8: Added Carousel
    9/9: jQuery Carousel support
    9/10: Carousel Content Changed, mobile support added; bugfixing
    9/17: email Validation added; carousel movement smoothed; image removed from carousel
    2/14/22: changed to php file, nav and footer changed to view folder
-->

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <meta name="author" content="Ayden McCall">
        <meta name="description" content="Sale of delicious and affordable coffee.">
        <meta name="keywords" content="Coffee, Java, Dark Roast, Light Roast, Affordable, Homepage">
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <title>The Java House Home</title>

        <link rel="stylesheet" href="css/coffee.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body class="bg-darkblue">
        
            <?php include 'view/nav.php'; ?>



        <header>
            <div class="coffee-bg">
                <!-- Carousel or Main Image-->
                <div class="text-wrap welcome">
                    <h3>Welcome to The Java House! Dedicated to getting you your coffee fix.</h3>
                </div>
            </div>
        </header>

        <main>
            <!-- Trending Pages and Items -->
            <h3>Store Sections</h3>
            <div class="carousel flexBox">   
                <div id="leftButton" class="flexChild align-self-center"><i class="fa fa-arrow-left"></i></div>
                <div id="carouselLinks" class="flexChild">
                        <ul class="noDisplay carouselImage"><a href="store.php" class="nav-color"><p>Coffee Beans</p><img src="img/coffee-tin-640.jpg" alt="Image of Coffee Tin"></a></ul>
                        <ul class="noDisplay carouselImage"><a href="store.php" class="nav-color"><p>Appliances</p><img src="img/coffee-scoop-640.jpg" alt="Image of Espresso Press"></a></ul>
                        <!--<ul class="noDisplay carouselImage"><a href="#" class="nav-color"><p >Locations</p><img src="img/coffee-shop-640.jpg" alt="Image of Coffee Shop"></a></ul>-->
                </div>
                <div id="rightButton" class="flexChild align-self-center"><i class="fa fa-arrow-right"></i></div>
            </div>
            <!--Newslettter Sign Up-->
            <form>
                <label for="newsletterEmail">Sign up for our newsletter!</label>
                <input type="text" id="newsletterEmail" name="newsletterEmail" autocomplete="off" placeholder="anyone@anywhere.com">
                <input type="button" id="submitNewsletterEmail" name="submitNewsletterEmail" value="Submit"> <br>
                <label for="submitNewsletterEmail" id="newsletterError"></label>
            </form>
            <p id="newsletterCompletion" class="successful noDisplay">Thank you for subscribing to our newsletter! Check your email for great offers 
                and exclusive deals!
            </p>
        </main>

        <?php include 'view/footer.php' ?>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
        <script src="js/coffee.js"></script>
    </body>
</html>