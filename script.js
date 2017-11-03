$(document).ready(function() {

    
    
$('input[type=password]').keyup(function() {
  var pswd = $(this).val();
  
  //validate the length
if ( pswd.length < 8 ) {
    $('#length').removeClass('valid').addClass('invalid');
} else {
    $('#length').removeClass('invalid').addClass('valid');
}

//validate letter
if ( pswd.match(/[A-z]/) ) {
    $('#letter').removeClass('invalid').addClass('valid');
} else {
    $('#letter').removeClass('valid').addClass('invalid');
}

//validate capital letter
if ( pswd.match(/[A-Z]/) ) {
    $('#capital').removeClass('invalid').addClass('valid');
} else {
    $('#capital').removeClass('valid').addClass('invalid');
}

//validate number
if ( pswd.match(/\d/) ) {
    $('#number').removeClass('invalid').addClass('valid');
} else {
    $('#number').removeClass('valid').addClass('invalid');
}

});


$('input[type=password]').focus(function() {
    $('#pswd_info').show();
});


$('input[type=password]').blur(function() {
    $('#pswd_info').hide();
});
    
    

});