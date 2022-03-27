
<?php
require "database/db.php";
$post_id = $_GET['p_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main-layout{
            display: grid;
            grid-template-columns: repeat(12,1fr);
            grid-template-rows: 100px auto 100px ;
            grid-template-areas:
            "h h h h h h h h h h h h"
            "m c c c c c c c c c c c"
            "f f f f f f f f f f f f"
            ;
        }
        .header{
            grid-column: h;
            background-color: #999;
        }
        .content{
            grid-column: c;
            background-color: #7777;
            padding: 10px;
        }
        .menu{
            grid-column: m;
            background-color: burlywood;
        }
        .footer{
            grid-column: f;
            background-color: #999;
            height:200px;
        }
        
            .main-content{
	        display: flex;
	        justify-content: space-around;
	        flex-wrap: wrap;
            align-items: center;
            align-content: center;
            }
    

            
.post{
    width: auto;
    max-width: 200px;
	overflow: hidden;
	border-radius: 15px;
	padding: 10px;
	background-color: #FFFFFF;
	box-shadow: 4px 6px 20px 4px black;
	margin-bottom: 40px;
	

}

.post h1{
	text-align: center;
	color: green;
	font-size: 20px;
	font-weight: bold;
	font-family: arial;
}


.post img{
	border-radius: 15px;
    max-width: 150px;
    height: 100px;
}

.post p {
	font-size: 12px;
	text-align: center;
	font-weight: bold;
	font-family: arial;
}


    </style>
   <script src="data.js"></script> 
</head>
<body>

    <div class="main-layout">

        <!--This div is for header-->
        <div class="header">
            
        </div>
        <div class="menu">Menu
            <li><a href="addpost.php">Add post</a></li> 
            <li><a href="authorpost.php">Author post</a></li> 
            <li><a href="blogpost.php">Blog view</a></li> 
        </div>
        <div class="content">
            <div class="main-content">

            <?php
    $query = "SELECT * FROM cms WHERE post_id = $post_id";
    $mydb = new database();
    $result = $mydb->fetch_query($query);
    $output = mysqli_fetch_assoc($result);
    ?>
    <article>
    <h1><?php echo $output['post_title']; ?></h1>
        <img src='images/.<?php echo $output['post_image']; ?>'>
        <p><?php echo $output['post_content'] ?></p>
    </article>       
            </div>
        </div>
        <div class="footer">footer</div>
    </div>
    
</body>
</html>