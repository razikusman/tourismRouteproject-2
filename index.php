<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tourism Web Site</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    
    <body style="background-color: silver;">
        <div class="col-md-12 d-flex justify-content-around">
            <?php
                include("courosal.php");
            ?>
        </div>
        <div id="navbar">
            <?php
                include("sidebar.php");
            ?>
        </div>
        <div class="col-md-12  d-flex justify-content-around" >
            <div style="height: 100%; width: 75%">
                <?php
                    include("add.php");
                ?>
            </div>
        </div>
    </body>
<!-- 
    <script>
        // When the user scrolls down 20px from the top of the document, slide down the navbar
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() 
        {
            if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) 
            {
                document.getElementById("navbar").style.top = "0";
            } 
            else
            {
                document.getElementById("navbar").style.top = "400px";
            }
        }
    </script>

    <style>

        #navbar {
        background-color: #333;
        top: 600px;
        width: 100%;
        display: block;
        transition: top 0.3s;
        }
    </style> -->
</html>
