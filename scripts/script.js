window.addEventListener("load", () => {
    // window.addEventListener("scroll", () => {
    //     if (window.scrollY > 50) {
    //         document.querySelector(".header").classList.add("scroll");
    //     } else {
    //         document.querySelector(".header").classList.remove("scroll");
    //     }
    // });

    window.addEventListener('scroll', () => {
        if(window.scrollY > 100) {
            document.querySelector(".footer_fleche").classList.add('scroll_fleche');
        }
        else
        {
            document.querySelector(".footer_fleche").classList.remove('scroll_fleche');
        }
    });


    // Lien voir plus
    var path = window.location.pathname;
    var page = path.split("/").pop();
    
    if(page == "index.php") {
        document.querySelector("#btn_voir_plus").addEventListener("click", () => {
            document.getElementById("actu_acc").scrollIntoView({
                behavior: "smooth",
            });
        });
    } else {
        // Lien vers le haut
        document.querySelector(".footer_fleche").addEventListener("click", () => {
            document.querySelector(".header").scrollIntoView({
                behavior: "smooth",
            });
        });
    }
});