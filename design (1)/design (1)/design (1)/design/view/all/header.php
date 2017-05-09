<html>
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
    p1{
        float: right;
        padding: 1px 500px;
    }
table {
    border-collapse: collapse;
    width: 100%;
    text-align: center;
}

th1, td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 15px;
}

tr:nth-child(even){background-color: #f2f2f2}

th1 {
    background-color: #FA6B01;
    color: black;
}
th2, td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 15px;
}

th2 {
    background-color: #9E99AD;
    color: black;
}

th3, td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 15px;
}

th3 {
    background-color: #F15304;
    color: black;
}
th3, td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 15px;
}

th3 {
    background-color: #9E99AD;
    color: black;
}

select {
    width: 15%;
    padding: 16px 20px;
    border: none;
    border-radius: 6px;
    background-color:#17B7DF;
}

div1{
    float: right;
    padding: 5px 200px;
}
    input[type=text], select {
    width: 100%;
    padding: 8px 16px;
    margin: 6px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}
input[type=submit] {
    width: 80%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 14px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 200px;
}
input[type=password], select{
    width: 100%;
    padding: 8px 16px;
    margin: 6px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    height: 
</style>
<script type="text/javascript">
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var l in especiales){
          if(key == especiales[l]){
          tecla_especial = true;
          break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
function Entrar(){
  var CONTRASEÑA = document.getElementById('CONTRASEÑA').value; 
  var USUARIO = document.getElementById('USUARIO').value;
 if (CONTRASEÑA == ""){
  alert(" Falta llenar el campo contraseña");
 }
 
 if (USUARIO == ""){
  alert(" Falta llenar el campo usuario");
 }
 
}


</script>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    </head>
    <body style="background-color:#CEC8C5;">
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        


