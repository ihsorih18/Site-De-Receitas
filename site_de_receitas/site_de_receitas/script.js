const hamburger = document.querySelector(".hamburger");
const mobileNav = document.querySelector(".mobile-nav--reveal");
const home = document.querySelector("#home");
const about = document.querySelector("#about");


let navClosed = true;
hamburger.addEventListener("click", () => {
    console.log("clicked");
    if (navClosed) {
        mobileNav.style.display = "block";
        mobileNav.style.animation = "slideInDown 1s";
        navClosed = false;
    } else {
        mobileNav.style.animation = "slideOutUp 1s";
        setTimeout(() => {
            mobileNav.style.display = "none";
            navClosed = true;
        }, 1000);

    }
});