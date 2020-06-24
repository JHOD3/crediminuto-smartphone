$(document).ready(function(){
    // $("#ip-de").AnyPicker({
    //     mode: "datetime",
    //     layout:"relative",
    //     inputDateTimeFormat: "dd/MM/yyyy",
    //     dateTimeFormat: "dd MM, yyyy",
    //     visibleRows:3,
    //     showComponentLabel: true,
    //     rowsNavigation: "scroller+buttons",
    //     minValue: new Date(1960, 01, 01),
    //     maxValue: new Date(2002, 12, 31),
        
    //     onChange: function(iRow, iComp, oSelectedValues)
    //     {    
    //         $('#fecha-nac').val(oSelectedValues.values[0].label+'/'+oSelectedValues.values[1].label +'/'+ oSelectedValues.values[2].label);
    //     }
    // });     
    // SmartWizard initialize
   $('#smartwizard').smartWizard({
       toolbarSettings: {
           showNextButton: false, // show/hide a Next button
           showPreviousButton: false, // show/hide a Previous button
           toolbarExtraButtons: [] // Extra buttons to show on toolbar, array of jQuery input/buttons elements
       },
       goToStep: function (stepNum) {
           this._showStep(stepNum);
       },
   });
  
   // Initialize the leaveStep event
//    $("#smartwizard").on("leaveStep", function(e, anchorObject, stepIndex, stepDirection) {
//        if(stepIndex == 1){
//            var sub_step = $('#sub-step');
//            // Variables para pruebas de estatus
//            var status = 'exito';

//            /* Esta es una funcion de ejemplo (posible funcion ajax para enviar datos al backend)
//                ** del formulario uno y dos 
//                */
//            if (sub_step.val() == 0) {
//                // funcion para efecto de carga en botones 
//                btnProgres();

//                sub_step.val(1);
               
//                setTimeout(
//                    function(){ 
//                        $('#tag-header').addClass('d-none');
//                        $('#tab-content').addClass('d-none');
//                         // Contenedor de pagina de error o exito ( #content-exito , #content-error)
//                        $('#content-'+status).removeClass('d-none');
//                        $('#btn-continuar').addClass('btn-success').removeClass('btn-danger');
//                    }, 
//                    2000
//                );
               
//                return false;
//            }else{
//                $('#tag-header').removeClass('d-none');
//                $('#tab-content').removeClass('d-none');
//                 // Contenedor de pagina de error o exito ( #content-exito , #content-error)
//                $('#content-'+status).addClass('d-none');
//                $('#btn-continuar').addClass('btn-danger').removeClass('btn-success');
//               return true;
//            }
          
//        }
//    });



//    $('#form-step-0 input').on('keyup blur', function () { // fires on every keyup & blur
//        if ($('#form-step-0').validate().checkForm()) {                   // checks form for validity
//            $('#btn-continuar').prop('disabled', false);        // enables button
//            $('#btn-continuar').addClass('btn-danger').removeClass('btn-light');
//        } else {
//            $('#btn-continuar').prop('disabled', 'disabled');   // disables button
//            $('#btn-continuar').addClass('btn-light').removeClass('btn-danger');
//        }
//    });
   
   $('#form-unico-0 input').on('keyup blur', function () { // fires on every keyup & blur
       if ($('#form-unico-0').validate().checkForm()) {                   // checks form for validity
           $('#btn-continuar').prop('disabled', false);        // enables button
           $('#btn-continuar').addClass('btn-danger').removeClass('btn-light');
       } else {
           $('#btn-continuar').prop('disabled', 'disabled');   // disables button
           $('#btn-continuar').addClass('btn-light').removeClass('btn-danger');
       }
   });
   $('#actividad_economicas').change(function() {
       if ($(this).val() != 1 && $(this).val() != 2 ) {
           $('#form-1-seccion-2').addClass('d-block').removeClass('d-none');
           $('#form-1-seccion-1').addClass('d-none').removeClass('d-block');
       }else{
           $('#form-1-seccion-1').addClass('d-block').removeClass('d-none');
           $('#form-1-seccion-2').addClass('d-none').removeClass('d-block');
       }
   });
});