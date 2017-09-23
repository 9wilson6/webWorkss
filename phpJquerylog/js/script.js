$(document).ready(function(){
$('#submit').click(function(){

$('#result').hide();
var name=$('#name').val();
var pass=$('#password').val();

$.post("php/login.php", {namep:name, passp:pass}, function(data){

var result=data;
$('#result').css({
    'color':'red',
    // 'text-align':'center',
    'margin':'40px 0px 10px 30%',
    'font-style':'italic',
   
});
$("#result").fadeIn(2000).text(result);

});
});

$('input#name').blur(function() {
var name=$('#name').val();
var password=$('#password').val();
if(name==""){

    $(this).css('border',' solid 1px red');
    $('#well').css('background-color','red').text('you forgot to fill in name?');
}
 

});
$('input#name').keydown(function() {
    $(this).css('border',' solid 1px #777');
$('#well').text("thanks buddy").css('background-color','blue');

});

$('input#password').blur(function() {
    var name=$('#name').val();
    var password=$('#password').val();
    if(password==""){
    
        $(this).css('border',' solid 1px red');
        $('#well').css('background-color','red').text('  you forgot to fill in password?');
    }
     
    
    });

    $('input#password').keydown(function() {
        $(this).css('border',' solid 1px #777');
$('#well').text("thanks buddy").css('background-color','blue');

    });
});