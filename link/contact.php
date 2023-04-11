<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <link rel="stylesheet" href="style2.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <style>  
            .mode { 
                float:right; 
                margin-top: 20px;
                margin-right: 20px;
            } 
            .change { 
                cursor: pointer; 
                border: 1px solid #555; 
                border-radius: 10%; 
                width: 20px; 
                text-align: center; 
                padding: 8px; 
                margin-left: 8px; 
            } 
            .dark{ 
                background-color: grey; 
                background-image: url(../img/hehe.webp);
                color: #e6e6e6; 
            } 
            .container2 {
                background-color: purple; 
            }
        </style> 
    </head>
    <body>
        <div class="container" class="container2">
            <div class="header">
                <div class="mode"> 
                    <b>Nigth Mode: </b><span class="change">OFF</span> 
                </div>
                <script> 
                    $( ".change" ).on("click", function() { 
                        if( $( "body" ).hasClass( "dark" )) { 
                            $( "body" ).removeClass( "dark" );
                            $( ".container" ).removeClass( "container2" ); 
                            $( ".change" ).text( "OFF" ); 
                        } else { 
                            $( "body" ).addClass( "dark" ); 
                            $( ".container" ).addClass( "container2" );
                            $( ".change" ).text( "ON" ); 
                        } 
                    }); 
                </script> 
                <br>
                <h1 class="judul">Online Literacy</h1>
                <ul>
                    <li><a href="../halamanutama.php">Home</a></li>
                    <li><a href="booklist.php">Book List</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>
            <div class="hero"></div>
            <div class="content cf">
                <div class="main">
                    <h2>Contact</h2>
                    <p>Email        : rifqizidani10@gmail.com</p>
                    <p>Facebook     : Rifqi Zidani</p>
                    <p>Instagram    : ahmadrifqizidani</p>
                    <p>Whatsapp     : 081259767759</p>
                </div>
                <div class="sidebar">
                    <h3>Lastes Post</h3>
                    <ul>
                        <li><a href="">Mei 2022.</a></li>
                        <li><a href="">April 2022.</a></li>
                        <li><a href="">Maret 2022.</a></li>
                        <li><a href="">Other.</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <p class="copy">Copyright 2022. rifqizidani.</p>
            </div>
        </div>
    </body>
</html>