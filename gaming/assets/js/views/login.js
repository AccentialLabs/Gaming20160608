/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function(){
   
   $("#btnlogin").click(function(){
       var email = $("#email").val();
       var senha = $("#password").val();
      
      $.ajax({
        type:"POST",
        data:{
            emailKey:email,
            passwordKey:senha
        },
        url:"../Telalogin/validaLogin",
        success: function(result){
          // alert(result); 
           var objReturn = JSON.parse(result);
           console.log(objReturn);
           
           if(objReturn.requisition_status == 'sucesso'){
               
               window.location.assign("../Dashboard/index");
               
           }else{
               
               alert("erro no login");
               
           }
           
        },
        
        error: function (XMLHTTRequest, texStatus,errorThrown ){
            alert('erro');
        },
        
      })
   });
   
});
