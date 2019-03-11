document.addEventListener("DOMContentLoaded", function (event) {

    const showLogoImgs = () => {
        const partnerLogoImgs = document.querySelectorAll('.partner-logos img')
        for (let i = 0; i < partnerLogoImgs.length; i++) {
            let timerId = setTimeout(function showImg() {
                partnerLogoImgs[i].classList.add('show')
                timerId = setTimeout(showImg, 300);
            }, i * 300);
        }
    }

    // init controller
    const controller = new ScrollMagic.Controller();

    // build scene
    const scene = new ScrollMagic.Scene(
    {
        triggerElement: ".partner-logos", 
        duration: 200
    })
    .addTo(controller)
    .on("enter", function (e) {
        showLogoImgs()
    });

    
   
    // if on scroll position, change opacity of logo img
});