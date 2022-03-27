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
            height: auto;
        }
        .menu{
            grid-column: m;
            background-color: #fff;
        }
        .footer{
            grid-column: f;
            background-color: #999;
            
        }
        
            .main-content{
	        display: flex;
	        justify-content: space-around;
	        flex-wrap: wrap;
            align-items: center;
            align-content: center;
            
            }
    .main-content img{
        height: 200px;
        width: 200px;
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
            <li><a href="authorpost.php">Author list</a></li> 
            <li><a href="blogpost.php">Blog view</a></li> 
        </div>
        <?php
    $query = "SELECT * FROM post";
    $mydb = new database();
    $result = $mydb->fetch_query($query);
    if(mysqli_num_rows($result)){
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="content">
            <div class="main-content">

              
    <h1><?php echo $row['post_title']; ?></h1>
    <img src='images/.<?php echo $row['post_image']; ?>'>
    <p><?php echo $row['post_content'] ?></p>
    <a href="blogpost.php?p_id=<?php echo $row['post_id'];?>">
    <button>
        Read More
    </button>
    </a>
</div>
</div>
<?php }  } ?>

</div>   
        </div>
        <div class="footer">footer</div>
    </div>
    
</body>
</html>