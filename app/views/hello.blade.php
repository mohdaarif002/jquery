<!doctype html>
<html>
<head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
          
<script>
$(document).ready(function(){
    $(":input").keydown(function(){
        $(":input").css("background-color", "yellow");
    });
    $(":input").keyup(function(){
        $(":input").css("background-color", "pink");
    });
});
</script>  

<style type="text/css">
    
    .red{
        color:royalblue;
        background:red;
        
    } 
    
    .orange{
         color:white;
       background-color:orange;
        
    }  
    
    .green{
         color:white;
        background-color:green;
        
    }  
    
    .box{
        height: 150px;
        width: 300px;
        color:white;
        background: grey;
        display: none; 
    }

</style>    
   
</head>
<body>
    
    <center>
        <h2>Welcome to Drone World</h2>
        <h3> Login Here</h3>
            
            <input type="text" id="text"  /> <br />
            <input type="password" id="password"  /> <span class="first">    </span><br />
            <input type="submit" id="submit"><br />
            <p class="para"></p>
            
            <input type="button" value="AboutUs" id="about"/>
            
            <div class="box">
                <p>
                    This is mainly jquery and bootstrap based mobile website.
                </p>
                
            </div>
    </center>   

 
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="newJavaScript.js"></script>
</body>
</html>
