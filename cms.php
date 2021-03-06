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
            <h1> Practice CMS </h1>
        </div>
        <div class="menu">Menu
            <li><a href="addpost.php">Add post</a></li> 
            <li><a href="authorpost.php">Author Post</a></li> 
            <li><a href="blogpost.php">Blog view</a></li> 
        </div>

        <div class="content">
            <div class="main-content">
             <!--
               <script>
                   var a = 0;
                   size = data.length;
                   while (a < size) {
                    document.write(` <div class="post">
                    <h1>${data[a]['title']['rendered']}</h1>
                    <img src="${data[a]['jetpack_featured_media_url']}">
                </div>`);  
                    a++;
                   }
               </script>
             -->
               

                
            </div>
        </div>
        <div class="footer">Humaira Saida @2022</div>
    </div>
    
</body>
</html>