$(document).ready(function(){

$('h2').fadeOut(2000);        
    
$('#password').keyup(function(){
    
    var len=$('#password').val().length;
     
     if(len==0){
          $('.first').text(''); 
          $('.first').removeClass('red');
           $('.first').removeClass('orange');
            $('.first').removeClass('green');
     }
     else{
     if(len<=4)
     {
           $('.first').text('Weak');    
       $('.first').addClass('red');  
        $('.first').removeClass('orange');
         $('.first').removeClass('green');
         
     }else if(len<=8){
         
         $('.first').text('medium');  
             $('.first').addClass('orange');
              $('.first').removeClass('red');
               $('.first').removeClass('green');
             
         
     } else{
            $('.first').text('strong');  
            $('.first').addClass('green');
            $('.first').removeClass('red');
            $('.first').removeClass('orange');
         
     } 
     
    }
}) ;     
    //here mouserover event start
    
    $('#about').mouseover(function(){
        $('#about').val('put your mouse back');
        $('.box').show(2000);
    });
    
     $('#about').mouseout(function(){  //id=about
        $('#about').val('AboutUs');
        $('.box').hide(2000);  //class=box
    });
    
    $('#submit').click(function(){
      
       $('p.para').append("<h4>Thanks For Cliking</h4> ") ;  
    });
           
    
});