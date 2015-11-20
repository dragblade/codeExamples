<?php

?>
<script type="text/javascript">

    function validarEmail(field){

        var exp = /^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i;

        usuario = field.value.substring(0, field.value.indexOf("@"));
        dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
        if(exp.test(field.value)){

            if ((usuario.length >=1) &&
                (dominio.length >=3) &&
                (usuario.search("@")==-1) &&
                (dominio.search("@")==-1) &&
                (usuario.search(" ")==-1) &&
                (dominio.search(" ")==-1) &&
                (dominio.search(".")!=-1) &&
                (dominio.indexOf(".") >=1) &&
                (dominio.lastIndexOf(".") < dominio.length - 1)) {

                return true;
            } else {
                alert("E-mail invalido");
                field.focus();
                return false;
            }
        } else {

            alert("E-mail invalido");
            field.focus();
            return false;
        }
    }
</script>
