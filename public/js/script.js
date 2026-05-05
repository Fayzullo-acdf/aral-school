
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("mobile-menu");
    const navbar = document.getElementById("navbar");
    const faqItems = document.querySelectorAll(".faq-item");
    const modals = document.querySelectorAll(".modal");
    const languageLinks = document.querySelectorAll(
        ".lang-togglebox a, .mobile-lang-togglebox a",
    );

    if (hamburger && menu) {
        const setPageScrollLock = (isLocked) => {
            document.documentElement.classList.toggle("mobile-menu-lock", isLocked);
            document.body.classList.toggle("mobile-menu-lock", isLocked);
        };

        const closeMobileMenu = () => {
            hamburger.classList.remove("active");
            menu.classList.remove("active");
            navbar?.classList.remove("mobile-menu-open");
            hamburger.setAttribute("aria-expanded", "false");
            setPageScrollLock(false);
        };

        const toggleMobileMenu = () => {
            const isOpen = hamburger.classList.toggle("active");
            menu.classList.toggle("active", isOpen);
            navbar?.classList.toggle("mobile-menu-open", isOpen);
            hamburger.setAttribute("aria-expanded", String(isOpen));
            setPageScrollLock(isOpen);
        };

        hamburger.addEventListener("click", toggleMobileMenu);
        hamburger.addEventListener("keydown", (event) => {
            if (event.key === "Enter" || event.key === " ") {
                event.preventDefault();
                toggleMobileMenu();
            }
        });

        menu.querySelectorAll("ul a").forEach((link) => {
            link.addEventListener("click", closeMobileMenu);
        });

        const mobileMenuMedia = window.matchMedia("(max-width: 992px)");
        const closeMobileMenuOnDesktop = (event) => {
            if (!event.matches) closeMobileMenu();
        };

        if (mobileMenuMedia.addEventListener) {
            mobileMenuMedia.addEventListener("change", closeMobileMenuOnDesktop);
        } else {
            mobileMenuMedia.addListener(closeMobileMenuOnDesktop);
        }
    }

    languageLinks.forEach((link) => {
        link.addEventListener("click", (event) => {
            event.preventDefault();

            const selectedLanguage = link.textContent.trim();

            languageLinks.forEach((item) => {
                item.classList.toggle(
                    "selected",
                    item.textContent.trim() === selectedLanguage,
                );
            });
        });
    });

    modals.forEach((modal) => {
        const trigger = modal.querySelector(".modal-text");

        trigger.addEventListener("click", () => {
            modals.forEach((item) => {
                if (item !== modal) item.classList.remove("active");
            });

            modal.classList.toggle("active");
        });
    });

    faqItems.forEach((item) => {
        const question = item.querySelector(".faq-question");
        question.addEventListener("click", () => {
            faqItems.forEach((i) => {
                if (i !== item) i.classList.remove("active");
            });

            item.classList.toggle("active");
        });
    });