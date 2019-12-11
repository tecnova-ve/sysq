$(document).ready(function () {
    const url = "http://localhost/sysq/public/";

    function search(){

      var ci = $('inputext').val();

        $.ajax({
          url: url,
          type: 'POST',
          dataType: 'json',
          data: {ci:ci},
         beforeSend:function(){
            console.log("Sending data...");
           },

           success:function(data){

           if(data){

            swal({
                title: "Cliente Registrado",
                text: "Bienvenido Nuevamente",
                icon: "success",
                button: "Seguir!"
                
            }).then(function(value){
                window.location(url + index)
            });
 
           }
        },
           error:function(err){
               console.log(err);
           }
                });
        }
    });
        