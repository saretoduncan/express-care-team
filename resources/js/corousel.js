const corouselItems = document.querySelectorAll(".corousel-img"); //get all corousel items
const rightArrowButton = document.getElementById("rightArrowBtn"); //get right arrow button
const leftArrowButton = document.getElementById("leftArrowBtn"); //get left arrow button
//current index
let currentIndex = 0;
//forwarding slide method
const forwardSlide = () => {
    let prevIndex = currentIndex;
    currentIndex = (prevIndex + 1) % corouselItems.length;
    let nextIndex = (currentIndex + 1) % corouselItems.length;

    corouselItems.forEach((item, index) => {
        if (index === prevIndex) {
            item.classList.remove("translate-x-0]", "hidden", "z-[-1]");
            item.classList.add("translate-x-[100%]");
        } else if (index === currentIndex) {
            item.classList.remove("translate-x-[-100%]", "z-[-1]");
            item.classList.add("translate-x-0", "z-5");
        } else if (index === nextIndex) {
            item.classList.remove("hidden", "translate-x-[100%]", "z-5");
            item.classList.add("translate-x-[-100%]", "z-[-1]");
        } else {
            item.classList.add("hidden");
        }
    });
};
//reverse slide method
const reverseSlide = () => {
    let prevIndex = currentIndex;
    currentIndex =
        (prevIndex - 1 + corouselItems.length) % corouselItems.length;
    let nextIndex =
        (currentIndex - 1 + corouselItems.length) % corouselItems.length;

    corouselItems.forEach((item, index) => {
        if (index == prevIndex) {
            item.classList.remove("translate-x-0", "hidden", "z-[-1]");
            item.classList.add("translate-x-[-100%]");
        } else if (index === currentIndex) {
            item.classList.remove("translate-x-[100%]", "z-[-1]");
            item.classList.add("translate-x-0", "z-5");
        } else if (index === nextIndex) {
            item.classList.remove(
                "hidden",
                "translate-x-[-100%]",
                "z-5",
                "hidden"
            );
            item.classList.add("translate-x-[100%]", "z-[-1]");
        } else {
            item.classList.add("hidden");
        }
    });
};
//
let forwardSlideTimer;
forwardSlide();
const setForwardSlideTimer = () => {
    forwardSlideTimer = setInterval(function () {
        forwardSlide();
    }, 5000);
};
setForwardSlideTimer();
const cancelForwardTimer = () => {
    clearInterval(forwardSlideTimer);
};

leftArrowButton.addEventListener("click", () => {
    cancelForwardTimer();
    reverseSlide();
    setForwardSlideTimer();
});

rightArrowButton.addEventListener("click", () => {
    cancelForwardTimer();
    forwardSlide();
    setForwardSlideTimer();
});
