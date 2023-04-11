<!DOCTYPE html>
<html>
    <head>
        <title>Online Literacy</title>
        <link rel="stylesheet" href="style_halamanutama.css">
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
                background-image: url(img/hehe.webp);
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
                    <li><a href="#">Home</a></li>
                    <li><a href="link/booklist.php">Book List</a></li>
                    <li><a href="link/contact.php">Contact</a></li>
                    <li><a href="link/about.php">About</a></li>
                    <li><a style="margin-left:560px; font-weight: bold; background-color: red; color: black;" href="logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="hero"></div>
            <div class="content cf">
                <div class="main">
                    <h2>Online Literacy</h2>
                    <p class="penulis">Oleh <a href="#">rifqizidani</a>. 24 Mei 2022</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi, eum nobis. Cum nihil amet nam ea, libero ad eius cupiditate. Delectus culpa voluptas inventore ipsa non vero? Quos, mollitia. Accusantium.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et iste corrupti in, ipsum consequuntur nostrum vel hic ex a esse nulla veritatis autem cupiditate, at totam beatae accusantium obcaecati? Consequuntur numquam odit optio provident hic modi tempora voluptatum ut dolore voluptatibus quas ipsum minima recusandae ullam nostrum labore obcaecati delectus libero, quam excepturi incidunt iure soluta. Perferendis optio at doloremque sint sequi quaerat odit possimus architecto, sunt accusantium necessitatibus veniam expedita in quis? Nisi, repellat. Nesciunt, repudiandae nostrum vero tempore veniam culpa mollitia? A, laboriosam, numquam doloremque esse nulla quas alias facilis nisi, modi ipsam aliquid debitis provident maxime culpa.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati ipsam, doloribus, dolorem saepe tenetur cum ratione dignissimos ducimus incidunt alias, eum tempore vel voluptatum! Ullam molestiae veritatis, harum sit voluptates alias velit tempora illum. Tenetur placeat eius, incidunt natus, voluptate corporis impedit esse quis vitae ullam et vero adipisci! Doloremque quaerat beatae laudantium exercitationem, laboriosam libero distinctio aliquid a, vero veniam tempora ad labore praesentium odio! Delectus explicabo maxime quo, reiciendis deleniti beatae veritatis voluptatibus temporibus nobis deserunt a totam?</p>
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