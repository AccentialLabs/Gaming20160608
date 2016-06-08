/*<script>*/
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
/*</script>*/



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