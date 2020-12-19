// Initializing partners casousel
let partnersSplide = new Splide( '.splide', {
    perPage: 5,
    perMove: 1,
    type: 'loop',
    width: '80%',
    focus: 0,
    pagination: false,
    autoplay: true,
    interval: 3000,
    speed: 3000,
    pauseOnHover: false,
    padding: {
      left : 0,
      right: '4rem',
    },
    breakpoints: {
      992: {
        perPage: 3,
      },
      768: {
        perPage: 2,
        padding: {
          left : '2rem',
          right: '2rem',
        },
      },
      420: {
        perPage: 1,
        padding: {
          left : '4rem',
          right: '2rem',
        },
      },
    }, 
  } ).mount();

  