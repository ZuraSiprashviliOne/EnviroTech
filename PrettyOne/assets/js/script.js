
$(document).ready(() => {
    AOS.init({
        duration: 1000
    });

    let line = document.createElement('div');
    // line.css({
    //     height: '50px',
    //     backgroundColor: 'white'
    // });
    line.css('height', '50px');
    for(let i = 0; i < 10; i++){
        $('#body').append(line);
    }

});
