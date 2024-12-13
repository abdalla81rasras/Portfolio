const navLinks = document.querySelectorAll('.nav-item');
const menuToggle = document.getElementById('navbarSupportedContent');
const bsCollapse = new bootstrap.Collapse(menuToggle);

navLinks.forEach((l) => {
    
    l.addEventListener('click', () => {

        bsCollapse.toggle() 
    
    });
});

/*  */

const navbar = document.querySelector(".main_menu");
const scrollLinks = document.querySelectorAll(".nav-link");
const div_links = document.querySelector(".div-links");
const links = document.querySelector(".ul-links");

scrollLinks.forEach((link) => {
  
  link.addEventListener("click", (e) => {

    e.preventDefault();

    const id = e.currentTarget.getAttribute("href").slice(1);
    const element = document.getElementById(id);

    const navHeight = navbar.getBoundingClientRect().height;
    const div_linksheight = div_links.getBoundingClientRect().height;

    let position = element.offsetTop - navHeight;

    if (!navbar) {
        position = position - navHeight;
    }

    if (navHeight > 82) {
        position = position + div_linksheight;
    }

    window.scrollTo({
      left: 0,
      top: position,
    });
  });
});