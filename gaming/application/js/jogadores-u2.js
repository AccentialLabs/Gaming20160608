/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*!
 * Chart.js
 * http://chartjs.org/
 * Version: 1.0.2
 *
 * Copyright 2015 Nick Downie
 * Released under the MIT license
 * https://github.com/nnnick/Chart.js/blob/master/LICENSE.md
 */




$(document).ready(function(){
    $('#minhaTabela').dataTable();
});





function takeValue() {
var x = document.getElementById("form1");
var texto = "";
var i;
for (i = 0; i < x.length ;i++) {
    texto += x.elements[i].value + "<br>";
}

document.getElementById("teste").innerHTML = texto;
if(texto == "Nome<br>Sobrenome<br>"){
alert("quero exibir alerta de SUCESSO feito com html e css");
}
else{
    alert("quero exibir alerta de ERRO feito com html e csss");
    }
}


BootstrapDialog.show({
            title: 'Default Title',
            message: 'Click buttons below.',
            buttons: [{
                label: 'Message 1', 
                action: function(dialog) {
                    dialog.setMessage('Message 1');
                }
            }, {
                label: 'Message 2',
                action: function(dialog) {
                    dialog.setMessage('Message 2');
                }
            }]
        });
		
	
		//BoostraprapDialogshow ({}
		 BootstrapDialog.show({
            title: 'Sign In',
            message: 'Your sign-in form goes here.',
            cssClass: 'login-dialog',
            buttons: [{
                label: 'Sign In Now!',
                cssClass: 'btn-primary',
                action: function(dialog){
                    dialog.close();
                }
            }]
        });
