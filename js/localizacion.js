/* 
 * localizacion.js por pronet21
 * cambia algunos valores en la pagina
 * de acuerdo al pais de origen del visitante
 */
    
jQuery("form#demo").validate({
    rules: {
        // simple rule, converted to {required:true}
        email: {
            required: true,
            email: true
        }
    },
    messages: {
        email: "Introduzca un email válido."
    },
    errorPlacement : function(error, element) {
        error.insertBefore(element.parent());
    },
    submitHandler: function(form) {
        //consultarPrecioProducto(form);
        $("form#demo").ajaxSubmit({
            target: "#dialog-demo-resultado",
            method: "post",
            url: "assets/includes/json.php",
            resetForm: true,
            beforeSubmit: function() {
                $("form#demo").hide();
                $("#solicitud-contacto").find("div.contacto").show();
            },
            success: function() {
                ga('send', 'event', 'button', 'click', 'DEMO',1);
                $("#dialog-demo-resultado").removeClass("alert-danger").addClass("alert-success");
                $("#dialog-demo-resultado").fadeIn();
                $("form#demo").prev('p').html('');
                $("#solicitud-contacto").find("div.contacto").hide();
            },
            error: function() {
                $("#dialog-demo-resultado").removeClass(" alert-success").addClass("alert-danger");
                $("#dialog-demo-resultado").fadeIn();
                $("#form#demo").prev('p').html('');
                $("#solicitud-contacto").find("div.contacto").hide();
            }
        });

    }
});
jQuery("#btn-llamada").click(function(){
    $("form#llamada").submit();
});
jQuery("form#llamada").validate({
   rules: {
       nombre : {required:true},
       telefono : {
           required:true,
           number:true,
           minlength:11}
   } ,
   messages: {
       nombre : "Ingrese su nombre y apellido",
       telefono : {
           required: "Ingrese un número telefónico",
           number : "Ingrese solo números",
           minlength: "Ingrese mínimo 11 dígitos"
       }
   },
   submitHandler: function(form) {
       $("form#llamada").ajaxSubmit({
            target: "#llamada-resultado",
            method: "post",
            url: "assets/includes/json.php",
            resetForm: true,
            beforeSubmit: function() {
                $("form#llamada").hide();
                $("#btn-llamada").attr("disabled","disabled");
                $("#llamar").find("div.loader").show();
            },
            success: function() {
                $("#llamada-resultado").removeClass("alert-danger").addClass("alert-success");
                $("#llamada-resultado").fadeIn();
                $("form#llamada").prev('p').html('');
                $("#btn-llamada").removeAttr("disabled");
                $("#llamar").find("div.loader").hide();
            },
            error: function() {
                $("#llamada-resultado").removeClass(" alert-success").addClass("alert-danger");
                $("#llamada-resultado").fadeIn();
                $("#form#llamada").prev('p').html('');
                $("#btn-llamada").removeAttr("disabled");
                $("#llamar").find("div.loader").hide();
            }

        });
   }
});
Number.prototype.formatCurrency = function(decimales=2) {
    var number = new String(this);
    var splitStr = number.split('.');
    var splitLef = splitStr[0];
    if (splitStr.length > 1 ) {
        if (splitStr[1].length > 2) {
            var decimale = parseInt(splitStr[1].substring(0,3) / 10);
            splitStr[1] = decimale.toString();
        }
        if (splitStr[1].length == 1) splitStr[1] += '0';
    }
    var splitRig = splitStr.length > 1 ? ',' + splitStr[1] :',00';
    var regx = /(\d+)(\d{3})/;
    
    while (regx.test(splitLef)) {
        splitLef = splitLef.replace(regx, '$1' + '.' + '$2');
    }
    if (decimales==0) {
        return splitLef;
    } else {
        return splitLef + splitRig;
    }
};
$.getJSON('https://s3.amazonaws.com/dolartoday/data.json', function(data) {
  let tasa = data.USD.dolartoday;
  let soporte = Math.round(tasa * 30);
  let emprendedor = Math.round(tasa * 300);
  let empresarial = Math.round(tasa * 500);
  let ppu = Math.round(tasa * 30);
  
  $("#precio").html(soporte.formatCurrency(0));
  $("#alquiler").html(soporte.formatCurrency(0));
  $("#setup-emprendedor").html(emprendedor.formatCurrency(0));
  $("#setup-empresarial").html(empresarial.formatCurrency(0));
  $("#setup-ppu").html(ppu.formatCurrency(0));
  $(".tasa_del_dia").html(tasa.formatCurrency());
});
//$.getJSON('http://api.wipmania.com/jsonp?callback=?', function (data) {
//    console.log(data.address.country_code);
//if (data.address.country_code != 'VE'){
//    $("form#demo").append("<input type='hidden' name='token' value='p80n3721' />");
//    $("a.icon-facebook").attr("href","https://www.facebook.com/ValorizaPanama");
//    $("a.icon-twitter").attr("href","https://twitter.com/valoriza_PA");
//    $("#precio").html("$40/month");
//    $("#alquiler").html("$20/month");
//    $("#setup-emprendedor").html("$150 Setup");
//    $("#setup-empresarial").html("$300 Setup");
//    $("li.web").hide();
//    console.log('Internacional');
//} 
//});
