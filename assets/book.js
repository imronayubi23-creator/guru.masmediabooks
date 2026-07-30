const cover = document.getElementById("cover");

let opened = false;

cover.addEventListener("click", function () {

    if (!opened) {

        gsap.to(".cover", {

            duration: 1.8,
            rotateY: -160,
            ease: "power4.inOut"

        });

        gsap.fromTo(".right-page",

            {
                opacity: 0,
                x: 80
            },

            {
                opacity: 1,
                x: 0,
                duration: 1,
                delay: .9
            }

        );

        gsap.fromTo(".left-page",

            {
                opacity: 0,
                x: -80
            },

            {
                opacity: 1,
                x: 0,
                duration: 1,
                delay: .8
            }

        );

        opened = true;

    } else {

        gsap.to(".cover", {

            duration: 1.6,
            rotateY: 0,
            ease: "power4.inOut"

        });

        opened = false;

    }

});