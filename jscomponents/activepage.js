document.addEventListener("DOMContentLoaded", function(){
    const links = document.querySelectorAll('.nav-links a');
    const currentUrl = window.location.pathname;

    links.forEach(link=> { //loop over each a tag till it matches the url
        if (link.href.includes(currentUrl)){
            link.classList.add('active');
        }
    });
});