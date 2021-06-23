$(document).ready(function(){
    $('#tabla').empty();
        $.ajax({
            type: "POST",
            url: "display.php",
            success: function(data){
              console.log(data);
              var holder=jQuery.parseJSON(data);
              $.each(holder,function(index,value){
                $("#tabla").append("<tr role=\"row\">" 
                  +"<td class=\"col-md-2\">"+value.purok+"</td>"
                  +"<td class=\"col-md-2\">"+value.first+"</td>"
                  +"<td class=\"col-md-2\">"+value.middle+"</td>"
                  +"<td class=\"col-md-2\">"+value.last+"</td>"
                  +"<td class=\"col-md-2\">"+value.age+"</td>"
                  +"<td class=\"col-md-2\">"+value.status+"</td>"
                  +"<td class=\"col-md-2\">"+value.bstatus+"</td>"+
                  "</tr>");
              });
            }                    
            });

    });
