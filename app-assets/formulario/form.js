    

/*=============================================
Validación desde Bootstrap 4
=============================================*/
/* Una función de autoinvocación. Es una función que se llama a sí misma. */
( function () {
    'use strict';
    window.addEventListener( 'load', function () {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName( 'needs-validation' );
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call( forms, function ( form ) {
            form.addEventListener( 'submit', function ( event ) {
                if ( form.checkValidity() === false ) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add( 'was-validated' );
            }, false );
        } );
    }, false );
} )();


/*=============================================
Función para validar formulario
=============================================*/
function validateJS( event, type ) {
    var pattern;
    if ( type == "text" ) pattern = /^[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}$/;
    if ( type == "text&number" ) pattern = /^[0-9A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,50}$/;
    if ( type == "numbers" ) pattern = /^[.\\,\\0-9]{1,}$/;
    if ( type == "t&n" ) pattern = /^[A-Za-z0-9]{1,}$/;
    if ( type == "email" ) pattern = /^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/;
    if ( type == "pass" ) pattern = /^[#\\=\\$\\;\\*\\_\\?\\¿\\!\\¡\\:\\.\\,\\0-9a-zA-Z]{1,}$/;
    if ( type == "regex" ) pattern = /^[-\\(\\)\\=\\%\\&\\$\\;\\_\\*\\"\\#\\?\\¿\\!\\¡\\:\\,\\.\\0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]{1,}$/;
    if ( type == "icon" ) {
        pattern = /^[-\\(\\)\\=\\%\\&\\$\\;\\_\\*\\"\\#\\?\\¿\\!\\¡\\:\\,\\.\\0-9a-zA-ZñÑáéíóúÁÉÍÓÚ ]{1,}$/;
        $( ".viewIcon" ).html( '<i class="' + event.target.value + '"></i>' )
    }
    if ( type == "phone" ) pattern = /^[-\\(\\)\\0-9 ]{1,}$/;
    if ( !pattern.test( event.target.value ) ) {
        $( event.target ).parent().addClass( "was-validated" );
        $( event.target ).parent().children( ".invalid-feedback" ).html( "error de sintaxis de los campos" );
    }
}