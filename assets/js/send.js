$(document).ready(function() {

    $('#send').click(function(){
      var pathname = window.location.pathname; // Returns path only (/path/example.html)
      var url      = window.location.href;     // Returns full URL (https://example.com/path/example.html)
      var origin   = window.location.origin;
      var url_send = origin+pathname;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var expresionRegular1=/^([0-9]+){9}$/;//<--- con esto vamos a validar el numero
      var expresionRegular2=/\s/;//<--- con esto vamos a validar que no tenga espacios en blanco

      var data = {
        name_email: $("#name_email").val(),
        from_email: $("#from_email").val(),
        message_email: $("#message_email").val(),
        cell_email: $("#cell_email").val(),
      };

      if(data.name_email && data.message_email && data.cell_email && data.from_email){
        $('.name_email').fadeOut(1000);
        $('.message_email').fadeOut(1000);
        $('.cell_email').fadeOut(1000);
        $('.from_email').fadeOut(1000);        
      }else{
        $('.name_email').fadeIn(1000);
        $('.message_email').fadeIn(1000);
        $('.cell_email').fadeIn(1000);
        $('.from_email').fadeIn(1000);        
        return false;
      }

      if(!emailReg.test(data.from_email)){
        $('.from_email_format').fadeIn(1000);
        return false;
      }else{
        $('.from_email_format').fadeOut(1000);
      }

      if(!expresionRegular1.test(data.cell_email)){
        $('.cell_email_format').fadeIn(1000);
        return false;
      }else{
        $('.cell_email_format').fadeOut(1000);
      }

      $.ajax({
          type: "POST",
          url: baseUrl,
          data: data,
          beforeSend:function(){
              $('.load').fadeIn();
          },
          success: function(res){;
              var obj = jQuery.parseJSON(res);
              
              if(obj.resp){
                
                $('.success').fadeIn(1000);
                $('.load').fadeOut();
                $('.alert').removeClass('error');
                $("#name_email").val('');
                $("#from_email").val('');
                $("#message_email").val('');
                $("#cell_email").val('');

              }else{
                $('.error').fadeIn(1000);
                $('.load').fadeOut();
              }
              
          },
          error: function(error){
            $('.error').fadeOut();
            console.log(error);
          }
      });

    });
   
});