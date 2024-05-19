const corouselItems = document.querySelectorAll(".corousel-img");
const rightAngleButton = document.getElementById("rightAngleButton");
const leftAngleButton = document.getElementById("leftAngleButton");

const nextImg = () => {
    corouselItems.forEach((item, index) => {
        if (item.classList.contains("translate-x-0")) {
            item.classList.remove("z-[10]");
            item.classList.remove("hidden");
            item.classList.add("z-[-1]");
            item.classList.remove("translate-x-0");
            item.classList.add("translate-x-[100%]");
        } else if (item.classList.contains("translate-x-[100%]")) {
            item.classList.remove("translate-x-[100%]");
            item.classList.remove("hidden");
            item.classList.add("translate-x-[-100%]");
        } else if (item.classList.contains("translate-x-[-100%]")) {
            item.classList.remove("z-[-1]");
            item.classList.remove("hidden");
            item.classList.remove("translate-x-[-100%]");
            item.classList.add("translate-x-0");
            item.classList.add("z-[10]");
        }
    });
};

const previousImg = () => {
    corouselItems.forEach((item, index) => {
        corouselItems.forEach((item, index) => {
            if (item.classList.contains("translate-x-0")) {
                item.classList.remove("z-[10]");
                item.classList.remove("hidden");
                item.classList.add("z-[-1]");
                item.classList.remove("translate-x-0");
                item.classList.add("translate-x-[-100%]");
            } else if (item.classList.contains("translate-x-[100%]")) {
                item.classList.remove("translate-x-[100%]");
                item.classList.remove("hidden");
                item.classList.add("z-[10]");
                item.classList.add("translate-x-0");
            } else if (item.classList.contains("translate-x-[-100%]")) {
                item.classList.remove("z-[-1]");
                item.classList.remove("hidden");
                item.classList.remove("translate-x-[-100%]");
                item.classList.add("translate-x-[100%]");
                item.classList.add("z-[-1]");
            }
        });
    });
};

setInterval(function () {
    nextImg();
}, 5000);

leftAngleButton.addEventListener("click", (ev) => {
    previousImg()
});

rightAngleButton.addEventListener("click", (ev) => {
    nextImg();
});
