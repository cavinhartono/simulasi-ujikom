var sections = document.querySelectorAll("section[id]");

function scrollHeader() {
  const header = document.querySelector(".header");
  if (this.scrollY >= 650) header.classList.add("active");
  else header.classList.remove("active");
}

function scrollSections() {
  const y = window.pageYOffset;

  sections.forEach((element) => {
    const height = element.offsetHeight,
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

window.addEventListener("scroll", scrollSections);
window.addEventListener("scroll", scrollHeader);
