document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("mobile-menu-icon")
    .addEventListener("click", function () {
      document
        .getElementById("mobile-menu")
        .classList.toggle("header__mobile-menu--open");
    });
});
