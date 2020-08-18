import Glide from '@glidejs/glide/';

window.addEventListener('load', function () {

     var glides = document.querySelectorAll('.glide');
     glides.length !== 0 ?
          glides.forEach((glide) => {
               // console.log('f', glide.className);
               new Glide('.glide', {
                    type: 'carousel',
                    startAt: 0,
                    focusAt: 'center',
                    perView: 3,
                    breakpoints: {
                         920: {
                              perView: 2
                         },
                         580: {
                              perView: 1
                         }
                    }
               }).mount()
          })
          : null;
});
