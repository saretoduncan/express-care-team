const testimonialsTrack = document.querySelector(".testimonials"); //get testimonial track
const parentTrackIndicator = document.getElementById("testimonial-indicators"); //get indicator div
const testimonialSlides = Array.from(testimonialsTrack.children); // get slides
//create indicators
const createIndicators = () => {
    const newDiv = document.createElement("div");
    newDiv.classList.add("bg-orange-200", "rounded-full", "size-3");
    return newDiv;
};
//create multiple indicators
const createIndicatorsFromSlides = () => {
    for (let i = 0; i < testimonialSlides.length; i++) {
        parentTrackIndicator.appendChild(createIndicators());
    }
};
//current slide index
let currentSlideIndex = 0;
//calling create indicator from slides
createIndicatorsFromSlides();
//get track
const trackIndicatorChildren = Array.from(parentTrackIndicator.children);
//update current slide method
const updateCorousel = (i) => {
    testimonialSlides.forEach((item, ind) => {
        if (i === ind) {
            item.classList.remove("scale-0");
        } else {
            item.classList.add("scale-0");
        }
    });
    trackIndicatorChildren.forEach((item, index) => {
        if (i == index) {
            item.classList.remove("bg-orange-200");
            item.classList.add("bg-orange-400");
        } else {
            item.classList.add("bg-orange-200");
            item.classList.remove("bg-orange-400");
        }
    });
};
//next slide method
const nextSlide = () => {
    currentSlideIndex =
        currentSlideIndex === testimonialSlides.length - 1
            ? 0
            : currentSlideIndex + 1;
    updateCorousel(currentSlideIndex);
};
updateCorousel(currentSlideIndex);
let corouselTimer;
//start time interval method
const startCorouselTimer = () => {
    corouselTimer = setInterval(() => {
        nextSlide();
        // console.log(currentSlideIndex);
    }, 5000);
};
startCorouselTimer();
//cancel corousel timer interval method
const cancelTimer = () => {
    clearInterval(corouselTimer);
};
//after click method
const trackIndicatorOnClick = (selectedIndex) => {
    cancelTimer();
    updateCorousel(selectedIndex);
    startCorouselTimer();
};
//add click event listener on track indicators
trackIndicatorChildren.forEach((button, index) =>
    button.addEventListener("click", () => {
        trackIndicatorOnClick(index);
    })
);
