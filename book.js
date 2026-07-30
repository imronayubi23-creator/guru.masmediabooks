// =============================
// MASMEDIA LOGIN BOOK 3D
// =============================

const book = document.getElementById("book");
const cover = document.querySelector(".front-cover");

let isOpen = false;

// =============================
// HOVER EFFECT
// =============================

book.addEventListener("mouseenter", () => {

    if(isOpen) return;

    gsap.to(book,{
        duration:0.4,
        y:-12,
        rotateX:5,
        rotateY:-8,
        ease:"power2.out"
    });

});

book.addEventListener("mouseleave", () => {

    if(isOpen) return;

    gsap.to(book,{
        duration:0.4,
        y:0,
        rotateX:0,
        rotateY:0,
        ease:"power2.out"
    });

});

// =============================
// CLICK BOOK
// =============================

book.addEventListener("click",()=>{

    if(!isOpen){

        openBook();

    }else{

        closeBook();

    }

});


// =============================
// OPEN
// =============================

function openBook(){

    isOpen = true;

    gsap.to(".front-cover",{

        duration:1.2,

        rotateY:-170,

        ease:"power3.inOut"

    });

    gsap.to(".inside",{

        duration:.8,

        opacity:1,

        delay:.35

    });

}

// =============================
// CLOSE
// =============================

function closeBook(){

    isOpen = false;

    gsap.to(".front-cover",{

        duration:1.1,

        rotateY:0,

        ease:"power3.inOut"

    });

    gsap.to(".inside",{

        duration:.2,

        opacity:1

    });

}