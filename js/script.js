(function () {
  const desktopMenuBtn = document.querySelectorAll(".toggle-menu");
  const desktopMenu = document.querySelector("#menu");

  desktopMenuBtn.forEach((item) => {
    item.addEventListener("click", (e) => {
      e.preventDefault();

      if (desktopMenu.classList.contains("is-active")) {
        desktopMenu.classList.remove("is-active");
      } else {
        desktopMenu.classList.add("is-active");
      }
    });
  });
})();
