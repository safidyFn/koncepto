window.addEventListener('scroll', function() {
    var header = document.getElementById('header_pages');
    var offsetPage = this.pageYOffset;
    var offsetEl = document.getElementById('header_pages').offsetTop;
    if (offsetPage > (offsetEl + 180)) {
        header.classList.add('scrolled')
    } else {
        header.classList.remove('scrolled')
    }
});



function scrollTop() {
    var customTop = document.getElementById('scrollTop');
    customTop.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'smooth'
        });
    });
}
//scrollTop();


  