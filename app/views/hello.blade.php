<!doctype html>
<html>
<head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
            <link href="{{ url() }}/jquery-ui.css" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
            <script src="{{ url() }}/jquery-ui.js">
          
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
    
    #slider.ui-slider {
	width:200px!important;
       
}

</style>    
   
</head>
<body>
    
    <center>
        <h2>Welcome to Drone World</h2>
        <h3> Login Here</h3>
            
        <input type="text" id="text"  width="200px"  height="100px"/> <br />
            <input type="password" id="password" width="200px" height="100px" /><br /> <span class="first"></span><br />
            <br />
            <input type="submit" id="submit"><br />
            <p class="para"></p>
            
            <input type="button" value="AboutUs" id="about"/>
            
            <div class="box">
                <p>
                    This is mainly jquery and bootstrap based mobile website.
                </p>
                
            </div> 
            <div id="slider">
            </div><br />
            <input type="text" id="price" />
            
            <input type="text" id="price2" /> 
    </center> 
<br />
<center><img src="aarifDroom.jpg" class="img-circle"  width="80" height="80"></center>


 
<script type="text/javascript">

 $('#slider').slider({
     
     range:true,
     min:10,
     max:1000,
     
  
     stop:function(event,ui){
         
         $('#price').val(ui.values[0]);
           $('#price2').val(ui.values[1]);
         
         
    }
     
 });
    
   
</script>


    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="newJavaScript.js"></script>
</body>
</html>
