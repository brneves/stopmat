$('#menu').on('show.bs.collapse', function(){
    $('.stopMat-banner').css('transform', 'translate(-50%, 10%)');
});

$('#menu').on('hide.bs.collapse', function(){
    $('.stopMat-banner').css('transform', 'translate(-50%, -50%)');
});