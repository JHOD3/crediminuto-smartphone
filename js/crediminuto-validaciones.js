
$(document).ready(function(){
    
    var iconos_error = '<svg class="svg-errors" style="fill: #c22645;margin-top: -4px;margin-right: 5px;margin-left: 20px;" width="24" height="24" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M 500 0C 224 0 0 224 0 500C 0 776 224 1000 500 1000C 776 1000 1000 776 1000 500C 1000 224 776 0 500 0C 500 0 500 0 500 0M 253 677C 242 666 242 652 253 641C 253 641 394 500 394 500C 394 500 253 359 253 359C 242 348 242 334 253 323C 253 323 323 253 323 253C 334 242 348 242 359 253C 359 253 500 394 500 394C 500 394 641 253 641 253C 652 242 666 242 677 253C 677 253 747 323 747 323C 758 334 758 348 747 359C 747 359 606 500 606 500C 606 500 747 641 747 641C 758 652 758 666 747 677C 747 677 677 747 677 747C 666 758 652 758 641 747C 641 747 500 606 500 606C 500 606 359 747 359 747C 348 758 334 758 323 747C 323 747 253 677 253 677"/></svg>';
    $('.mdb-select').materialSelect();
    
    // INIT activacion-nuevo-2.html 
        $('#imei-bienvenido').validate({
            rules:{
                imei:'required'
            },
            messages:{
                imei:iconos_error+'El campo IMEI es requerido'
            },
            errorElement: "small",
            errorPlacement: function ( error, element ) {
                error.addClass( "invalid-feedback" );
                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.next( "label" ) );
                } else {
                    error.insertAfter( element.next( "label" ) );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
            },
            submitHandler: function () {
                btnProgres();
            }
        });
        $('#imei-bienvenido').on('keyup blur keypress', function () { 
            $('#imei-bienvenido').validate().checkForm();
        });
    // END activacion-nuevo-2.html
    
    
    // INIT editar-datos-personales.html
        $('#form-datos-personales').validate({
            rules:{
                nombre:'required',
                apellido:'required',
                cedula:'required'
            },
            messages:{
                nombre:iconos_error+'El campo nombre es requerido',
                apellido:iconos_error+'El campo apellido es requerido',
                cedula:iconos_error+'El campo cedula es requerido'
            },
            errorElement: "small",
            errorPlacement: function ( error, element ) {
                error.addClass( "invalid-feedback" );
                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.next( "label" ) );
                } else {
                    error.insertAfter( element.next( "label" ) );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
            },
            submitHandler: function () {
                btnProgres();
            }
        });
        $('#form-datos-personales').on('keyup blur keypress', function () { 
            $('#form-datos-personales').validate().checkForm();
        });
    //END editar-datos-personales.html
    
    // INIT  descargar-payjoy.html
        $('#form-payjoy-code').validate({
            rules:{
                payjoy:'required',
            },
            messages:{
                payjoy:iconos_error+'El campo codigo payjoy es requerido'
            },
            errorElement: "small",
            errorPlacement: function ( error, element ) {
                error.addClass( "invalid-feedback" );
                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.next( "label" ) );
                } else {
                    error.insertAfter( element.next( "label" ) );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
            },
            submitHandler: function () {
                btnProgres();
            }
        });
        $('#form-payjoy-code').on('keyup blur keypress', function () { 
            $('#form-payjoy-code').validate().checkForm();
        });
    // END descargar-payjoy.html
    
    // INIT donde-vives-2.html
        $('#form-donde-vives').validate({
            rules:{
                piso:'required',
                departamento:'required',
                comentario:'required'
            },
            messages:{
                piso:iconos_error+'El campo piso es requerido',
                departamento:iconos_error+'El campo departamento es requerido',
                comentario:iconos_error+'El campo comentario es requerido'
            },
            errorElement: "small",
            errorPlacement: function ( error, element ) {
                error.addClass( "invalid-feedback" );
                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.next( "label" ) );
                } else {
                    error.insertAfter( element.next( "label" ) );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
            },
            submitHandler: function () {
                btnProgres();
            }
        });
        $('#form-donde-vives').on('keyup blur keypress', function () { 
            $('#form-donde-vives').validate().checkForm();
        });
    // END donde-vives-2.html



    //INICIO.Hmtl

    // Mostrar seccion de formulario de inicio
        $('#btn-comencemos').on('click',function (event) {
            event.preventDefault();
            $('#inicio-content').removeClass('d-none');
            $('#inicio-form').addClass('d-none');
        });
        
        $('#form-inicio').validate({
            rules:{
                email:{
                    required:true,
                    email:true
                },
                password:{
                    required:true,
                    minlength: 6
                }
            },
            messages: {
                email: {
                    required: iconos_error+ "El email es un campo requerido",
                    email: iconos_error+"Formato de mail inválido."
                },
                password: {
                    required: iconos_error+"La contraseña es un campo requerido",
                    minlength: jQuery.validator.format(iconos_error+"Tiene que tener más de {0} carctéres.")
                }
            },
        
            errorElement: "small",
            errorPlacement: function ( error, element ) {
                error.addClass( "invalid-feedback" );
                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.next( "label" ) );
                } else {
                    error.insertAfter( element.next( "label" ) );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
            },
            submitHandler: function () {
                btnProgres();
            }

        });

        $('#form-inicio').on('keyup blur keypress', function () { 
            if ($('#form-inicio').validate().checkForm()) { 
                $('#btn-continuar').prop('disabled', false); 
                $('#btn-continuar').addClass('btn-danger').removeClass('btn-light');
            } else {
                $('#btn-continuar').prop('disabled', 'disabled');
                $('#btn-continuar').addClass('btn-light').removeClass('btn-danger');
            }
        });

    // Capturar-img.html

        $('#frameModalBottomSuccessDemo').modal('show');
        
       
        
        $('#consejos-btn').on('click', function(event) {
            event.preventDefault();
            $('#owl-carousel-1').trigger('next.owl.carousel');
        });
        $('#owl-carousel-1').on('changed.owl.carousel', function(event) {
            var item      = event.item.index;
            if(item == 0 || item == 3 ){
                $('.owl-dots').css({'display':'none'});
            }else{
                $('.owl-dots').css({'display':'block','margin-top': '-100px'});
            }
        });

        $('.captura-permiso-btn').on('click',function (event) {
            event.preventDefault();
            $('#captura-section-2').removeClass('d-none');
            $('#captura-section-1').addClass('d-none');
        });

        
        
        function format (option) {
            if (!state.id) return state.text; 
             return "<i class='fa fa-check'></i>" + state.text;
        };
});