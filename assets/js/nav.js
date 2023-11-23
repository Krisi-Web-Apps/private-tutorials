function openMenu() {
  const navItems = document.getElementById("nav-items");
  navItems.classList.toggle("translate-x-full");
}

function expandItem(event) {
  const children = event.parentElement.parentElement.querySelector("[data-children]");
  children.classList.toggle("hidden");
  children.classList.toggle("flex");
}