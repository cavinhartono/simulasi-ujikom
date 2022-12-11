var sections = document.querySelectorAll("section[id]");

function scrollLinks() {
    var y = window.pageYOffset;

    sections.forEach((element) => {
        var height = element.offsetHeight,
            top = element.offsetTop - 58,
            id = element.getAttribute("id");

        if (y > top && y <= top + height) {
            document
                .querySelector(`.nav .item .link[href*=${id}]`)
                .classList.add("active");
        } else {
            document
                .querySelector(`.nav .item .link[href*=${id}]`)
                .classList.remove("active");
        }
    });
}

window.addEventListener("scroll", scrollLinks);

var prevScroll = window.pageYOffset;

window.onscroll = function () {
    var currentScroll = window.pageYOffset;

    if (prevScroll > currentScroll) {
        document.querySelector(".header").style.top = "0";
        document.querySelector(".header").classList.add("active");
    } else {
        document.querySelector(".header").style.top = "-50px";
        document.querySelector(".header").classList.remove("active");
    }
    prevScroll = currentScroll;
};

var read = document.querySelector(".isRead");
var add = document.querySelector(".isAdd");

read.onclick = function () {
    document.querySelector("body").style.overflow = "hidden";
    document.querySelector(".read").classList.add("active");
};

var close = document.querySelectorAll(".action #close");

close.forEach((item) => {
    item.onclick = function () {
        document.querySelector("body").style.overflow = "auto";
        document.querySelector(".read").classList.remove("active");
        document.querySelector(".create").classList.remove("active");
        document.querySelector(".update").classList.remove("active");
    };
});

add.onclick = function () {
    document.querySelector("body").style.overflow = "hidden";
    document.querySelector("#close").classList.add("active");
    document.querySelector(".create").classList.add("active");
};
