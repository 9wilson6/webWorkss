$(function() {

    $('#left').click(function() {

        $('#box').animate({
            left: '-=40px',
            fontSize:"+=2px"
    
        }, function() {

//animation complete

        });
    });
    $('#right').click(function() {

        $('#box').animate({
           left: '+=40px',
            fontSize:"-=2px"
    
        }, function() {

//animation complete

        });
    });
    $('#up').click(function() {

        $('#box').animate({
            top: '-=40px',
            opacity:"-=0.1"
    
        }, function() {

//animation complete

        });
    });
    $('#down').click(function() {

        $('#box').animate({
            top: '+=40px',
            opacity:"+=0.1"
    
        }, function() {

//animation complete

        });
    });
});