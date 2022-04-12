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
    
    if(document.querySelector("#btn_voir_plus") != null) {
        document.querySelector("#btn_voir_plus").addEventListener("click", () => {
            document.getElementById("actu_acc").scrollIntoView({
                behavior: "smooth",
            });
        });

        // gestion de la boit modal (fenêtre popup)
        const focusableSelector = "button, a";
        let focusables = [];
        let modal = null;

        const focusInModal = function(e) {
            e.preventDefault();
            let index = focusables.findIndex(f => f  === modal.querySelector(':focus'));
            if(e.shiftKey === true) {
                index--;
            } else {
                index ++;
            }

            if(index >= focusables.length) {
                index = 0;
            }

            if(index < 0) {
                index = focusables.length - 1;
            }

            focusables[index].focus();
        }

        if(document.querySelector('.modal').style.display == "flex") {
            const target = document.querySelector(".modal");
            modal = target;

            document.querySelector("body").style = "overflow-y: hidden";

            focusables = Array.from(modal.querySelectorAll(focusableSelector));
            window.addEventListener('keydown', function(e) {
                console.log(e.key);
                if(e.key == "Escape" || e.key == "Esc") {
                    modal.style.display = "none";
                    modal.setAttribute('arria-hidden', 'true');
                    modal.removeAttribute('aria-modal');
                    modal.removeEventListener("click", closeModal);
                    modal.querySelector('.js-modal-close').removeEventListener('click', closeModal);
                }

                if(e.key == "Tab" && modal !== null) {
                    focusInModal(e);
                }
            });
        }
        
        document.querySelector('.js-modal-close').addEventListener("click", () => {
            const target = document.querySelector(".modal");
            modal = target;

            modal.addEventListener('animationend', function () {
                modal.style.display = "none";
                modal = null;
                document.querySelector("body").style = "overflow-y: scroll;";
            });

            modal.setAttribute('arria-hidden', 'true');
            modal.removeAttribute('aria-modal');
            modal.removeEventListener("click", closeModal);
            modal.querySelector('.js-modal-close').removeEventListener('click', closeModal);
        });


        
        // let modal = null;
        // const closeModal = function(e) {
        //     if(modal === null) return
        //     const target = document.querySelector(e.target.getAttribute("href"));
        //     modal = target;
        //     e.preventDefault();
        //     modal.style.display = "none";
        //     modal.setAttribute('arria-hidden', 'true');
        //     modal.removeAttribute('aria-modal');
        //     modal.removeEventListener("click", closeModal);
        //     modal.querySelector('.js-modal-close').removeEventListener('click', closeModal);
        //     modal = null;
        // }

        // document.querySelector('.js-modal-close').addEventListener("click", () => {
        //     closeModal;
        // });
        
    } else if(document.querySelector("#code_promo") != null) {
        // Partie pour copier le code promo
        let textToCopy = document.querySelector("#code_promo");
        
        textToCopy.addEventListener("click", () => {
            textToCopy.select();
            document.execCommand("copy");
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