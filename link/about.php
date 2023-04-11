<!DOCTYPE html>
<html>
    <head>
        <title>About</title>
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
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="hero"></div>
            <div class="content cf">
                <div class="main">
                    <h2>About</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates eos mollitia repellendus neque, fuga repellat debitis sit delectus hic architecto?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, voluptatum!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam provident alias cumque magni facilis consequuntur laudantium placeat architecto voluptates animi mollitia dolore sit vitae inventore, veritatis pariatur debitis sapiente cupiditate officiis soluta expedita sint tenetur! Ea laboriosam ullam doloremque nihil cupiditate. Unde, incidunt. Tenetur aspernatur, et soluta numquam repudiandae libero.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga eligendi qui rerum fugit laboriosam modi officiis. Eveniet, inventore? Voluptas qui placeat excepturi perspiciatis aspernatur, numquam suscipit impedit atque eos dolorem, repellat soluta odio quam eligendi, esse debitis necessitatibus unde. Deserunt, consequuntur harum officia earum aliquid voluptate, omnis neque vitae, eaque eum in ad totam inventore possimus dolores explicabo minima recusandae autem dolore! Nobis aut iste nam blanditiis deserunt. Necessitatibus ad ipsam in quibusdam, eius ut vitae odio accusantium quis ipsum sapiente magnam dolorum dicta expedita aliquam harum nobis aliquid ea minus nisi quas incidunt reiciendis, obcaecati quo. Quia, porro minus.</p>
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