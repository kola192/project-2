// Initializing partners casousel
let partnersSplide = new Splide( '.splide', {
    perPage: 2,
    perMove: 1,
    type: 'loop',
    width: '100%',
    pagination: false,
    autoplay: true,
    interval: 12000,
    speed: 3000,
    pauseOnHover: false,
    // focus: 'center',
    direction: 'ttb',
    heightRatio: .8,
    gap: '2rem',
    start: 1,
    breakpoints: {
      992: {
        perPage: 2,
      },
      768: {
        perPage: 2,
      },
      420: {
        perPage: 1,
      },
    }, 
  } ).mount();

  