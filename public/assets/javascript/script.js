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


jQuery(document).ready(function($){
    jQuery('.menu_lists ul').clone().appendTo('#subMenu');
    jQuery('#menu_mobile').on('click', function(e) {
        jQuery('#subMenu').toggleClass('show')
      })

      if (window.innerWidth > 768) {
        $('.autoplay').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots : true
          });
      }
      else {
        $('.autoplay').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots : true
          });
      }
      

      function getActive() {
        var activeLink = window.location.pathname;
        $('.menu_lists li').each(function(i){
            var attr = $(this).find('a').attr('data-page');
            var link = activeLink.replace('/','')

            if ( attr == link ) {
                $(this).find('a').addClass('active');
            }
        })
      }

      getActive();

})
