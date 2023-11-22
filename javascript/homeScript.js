
// Sections navbar
$("#sectionsNavbar button").click(() => {
    $("#sectionsNavbar").toggleClass("-translate-x-full");
    $("#sectionsNavbar button svg").toggleClass("rotate-90");
    $(".scrollDownToSection").click(() => {
        $("#sectionsNavbar button svg").toggleClass("rotate-90");
        $('#sectionsNavbar').addClass('-translate-x-full');
    });
})

/*** Hero section ***/
let slides = Array.from(document.querySelectorAll(".slide"));
let slidesBtns = Array.from(document.querySelectorAll(".slideBtn"));
let searchBtn = document.querySelector(".searchBtn");
let searchInput = document.querySelector(".search-input");
let title = document.querySelector(".title-font");
let slidesColors = ["custom-green-", "amber-400", "fuchsia-700", "violet-900", "red-800"];

// auto Slide
let slide = () => {
    let nextSlideIndex;
    setInterval(() => {
        for (let i = 0; i < slides.length; i++) {
            if (slides[i].classList.contains("active-slide")) {
                slides[i].classList.replace('active-slide', 'hidden');
                slidesBtns[i].classList.replace(`bg-${slidesColors[i]}`, 'bg-gray-300');
                i === slides.length - 1 ? nextSlideIndex = 0 : nextSlideIndex = i + 1;
                slides[nextSlideIndex].classList.replace('hidden', 'active-slide');
                slidesBtns[nextSlideIndex].classList.replace("bg-gray-300", `bg-${slidesColors[nextSlideIndex]}`);
                title.classList.replace(`text-${slidesColors[i]}`, `text-${slidesColors[nextSlideIndex]}`);
                searchBtn.classList.replace(`bg-${slidesColors[i]}`, `bg-${slidesColors[nextSlideIndex]}`);
                searchInput.classList.replace(`border-${slidesColors[i]}`, `border-${slidesColors[nextSlideIndex]}`);
                break;
            }
        }
    }, 3000);
}
slide();

/*** Categories section ***/
let categoriesInfos = [
    {
        id: 1,
        imgURL: "../images/categories/cat1.webp",
        text: "Engage your community",
        catName: "Content Writing"
    },

    {
        id: 2,
        imgURL: "../images/categories/cat2.webp",
        text: "Boost your traffic",
        catName: "SEO"
    },


    {
        id: 3,
        imgURL: "../images/categories/cat3.webp",
        text: "Build your site",
        catName: "Website Development"
    },

    {
        id: 4,
        imgURL: "../images/categories/cat4.webp",
        text: "Elevate your brnad",
        catName: "Logo Design"
    },

    {
        id: 5,
        imgURL: "../images/categories/cat5.webp",
        text: "Tell your story",
        catName: "Voice-over"
    },

    {
        id: 6,
        imgURL: "../images/categories/cat6.webp",
        text: "Picture your idea",
        catName: "Illustration & Drawing"
    },

    {
        id: 7,
        imgURL: "../images/categories/cat7.webp",
        text: "Amplify your network",
        catName: "Social Media Startegy"
    },

    {
        id: 8,
        imgURL: "../images/categories/cat8.webp",
        text: "get more customers",
        catName: "SEM, Adwords & PPC"
    },

    {
        id: 9,
        imgURL: "../images/categories/cat9.webp",
        text: "Convert more leads",
        catName: "Sales & Calls"
    },

    {
        id: 10,
        imgURL: "../images/categories/cat10.webp",
        text: "Ease your workload",
        catName: "Admin Assistance"
    },

    {
        id: 11,
        imgURL: "../images/categories/cat11.webp",
        text: "Visualise your story",
        catName: "Videography"
    },

    {
        id: 12,
        imgURL: "../images/categories/cat12.webp",
        text: "Reach new audiences",
        catName: "Translation"
    },

    {
        id: 13,
        imgURL: "../images/categories/cat13.webp",
        text: "Bring it to life",
        catName: "Graphic Design"
    }
]
let categoriesCards = document.querySelectorAll('.categories-section .category-card');

let makeCategoriesCards = (infos) => {
    let i = 0;
    categoriesCards.forEach(card => {
        card.style.backgroundImage = `url("${infos[i].imgURL}")`;
        card.querySelector('p').textContent = infos[i].text;
        card.querySelector('h3').textContent = infos[i].catName;
        i++;
    })
}
makeCategoriesCards(categoriesInfos);


/*** Freelancers section ***/
let freelancersInfos = [
    {
        id: 1,
        imgURL: "../images/freelancers/ayman.jpg",
        title: "Hero SEO",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 2,
        imgURL: "../images/freelancers/smail.jpg",
        title: "Zindihi",
        job: "Graphic Designer, Illustrator and he is an amazing man to work with",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 3,
        imgURL: "../images/sliders/slide4/cardAbdelghani.jpg",
        title: "ⵄⴱⴷⵉⵎⵖⴰⵏⵉ",
        job: "Travel Software Developer / Web Developer / Linux Admin / Python & Tcl/Tk for Mac/Windows &Linux",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 2973,
        specialities: ["Figma design", "laravel dev", "React developement"],
        projectsNumber: 1574,
        price: 75
    },
    {
        id: 4,
        imgURL: "../images/sliders/slide3/cardYassine.jpg",
        title: "Reg Exp",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed.",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 5,
        imgURL: "../images/sliders/slide2/cardMiessal.jpg",
        title: "Meissal",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed.",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 6,
        imgURL: "../images/sliders/slide1/cardNada.jpg",
        title: "Nada M.",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 7,
        imgURL: "../images/sliders/slide5/cardtergui.jpg",
        title: "tergui Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 8,
        imgURL: "../images/freelancers/zehra.jpg",
        title: "zehra Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 9,
        imgURL: "../images/freelancers/bolbola.jpg",
        title: "meryam Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 10,
        imgURL: "../images/freelancers/elaarab.jpg",
        title: "elaarab Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 11,
        imgURL: "../images/freelancers/elkhaili.jpg",
        title: "elkhaili Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 12,
        imgURL: "../images/freelancers/elmorjani.jpg",
        title: "elmorjani Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 13,
        imgURL: "../images/freelancers/ghofran.jpg",
        title: "ghofran Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 14,
        imgURL: "../images/freelancers/lhcen.jpg",
        title: "lahcen Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 15,
        imgURL: "../images/freelancers/li9ama.jpg",
        title: "li9ama Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 16,
        imgURL: "../images/freelancers/ossama.jpg",
        title: "ossama Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 17,
        imgURL: "../images/freelancers/soulaiman.jpg",
        title: "soulaiman Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 18,
        imgURL: "../images/freelancers/waheli.jpg",
        title: "waheli Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 19,
        imgURL: "../images/freelancers/wissal.jpg",
        title: "wissal Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 20,
        imgURL: "../images/freelancers/yassin.jpg",
        title: "yassin Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 21,
        imgURL: "../images/freelancers/yassirAit.jpg",
        title: "yassir Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 22,
        imgURL: "../images/freelancers/zaid.jpg",
        title: "zaid Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 23,
        imgURL: "../images/freelancers/bilal.jpg",
        title: "bilal Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
    {
        id: 24,
        imgURL: "../images/freelancers/adnan.jpg",
        title: "adnan Namek",
        job: "SEO and digital marketing Expert. Google Certified PPC Consultant - Over 1400 projects completed",
        countryFlag: "../images/moroccoFlag.png",
        country: "Morocco",
        rating: 4.9,
        reviews: 1142,
        specialities: ["link building", "google ranking", "google search"],
        projectsNumber: 1774,
        price: 75
    },
]
let freelancersCards = document.querySelectorAll('.freelancers-section .freelancer-card');

let makeFreelancersCards = (infos) => {
    let i = 0;
    freelancersCards.forEach((card) => {
        card.querySelector('.photo').setAttribute("src", infos[i].imgURL);
        card.querySelector('.title').textContent = infos[i].title;
        card.querySelector('.job').textContent = infos[i].job;
        card.querySelector('.country-flag').setAttribute("src", infos[i].countryFlag);
        card.querySelector('.country').textContent = infos[i].country;
        card.querySelector('.rating').textContent = infos[i].rating;
        card.querySelector('.reviews').textContent = infos[i].reviews;
        infos[i].specialities.forEach(speciality => {
            let link = document.createElement('a');
            link.setAttribute("class", "px-1.5 py-1 m-0.5 text-sm bg-gray-100 rounded-md");
            link.setAttribute('href', "#");
            link.textContent = speciality;
            card.querySelector('.specialities').insertBefore(link, card.querySelector(".specialities").firstChild);
        })
        card.querySelector('.projects').textContent = infos[i].projectsNumber + " projects";
        card.querySelector('.price').textContent = "$" + infos[i].price;
        i++
    })
}
makeFreelancersCards(freelancersInfos);


/*** Offers section ***/
let offersInfos = [
    {
        id: 1,
        imgURL: "../images/offers/offer1.png",
        title: "Design Responsive, SEO friendly & Fast Loading WordPress website",
        specialities: ["web developement", "logo design", "design"],
        freelancerPhoto: "../images/freelancers/ayman.jpg",
        freelancerName: "Ayman B.",
        rating: 4.9,
        reviews: 2723,
        price: 205,
        dileveredDays: 5
    },
    {
        id: 2,
        imgURL: "../images/offers/offer2.png",
        title: "Design Responsive, SEO friendly & Fast Loading WordPress website",
        specialities: ["web developement", "logo design", "design"],
        freelancerPhoto: "../images/sliders/slide4/cardAbdelghani.jpg",
        freelancerName: "Abdelghani A.",
        rating: 4.9,
        reviews: 1723,
        price: 500,
        dileveredDays: 4
    },
    {
        id: 3,
        imgURL: "../images/offers/offer3.jpg",
        title: "Design Responsive, SEO friendly & Fast Loading WordPress website",
        specialities: ["web developement", "logo design", "design"],
        freelancerPhoto: "../images/freelancers/lhcen.jpg",
        freelancerName: "Lahcen B.",
        rating: 4.9,
        reviews: 1723,
        price: 105,
        dileveredDays: 5
    },
    {
        id: 4,
        imgURL: "../images/offers/offer4.jpg",
        title: "Design Responsive, SEO friendly & Fast Loading WordPress website",
        specialities: ["web developement", "logo design", "design"],
        freelancerPhoto: "../images/freelancers/waheli.jpg",
        freelancerName: "Waheli B.",
        rating: 4.9,
        reviews: 1723,
        price: 105,
        dileveredDays: 5
    },
    {
        id: 5,
        imgURL: "../images/offers/offer5.jpg",
        title: "Design Responsive, SEO friendly & Fast Loading WordPress website",
        specialities: ["web developement", "logo design", "design"],
        freelancerPhoto: "../images/freelancers/zehra.jpg",
        freelancerName: "Zehra El.",
        rating: 4.9,
        reviews: 1723,
        price: 105,
        dileveredDays: 5
    },
    {
        id: 6,
        imgURL: "../images/offers/offer6.jpg",
        title: "Design Responsive, SEO friendly & Fast Loading WordPress website",
        specialities: ["web developement", "logo design", "design"],
        freelancerPhoto: "../images/freelancers/zaid.jpg",
        freelancerName: "Zaid B.",
        rating: 4.9,
        reviews: 1723,
        price: 105,
        dileveredDays: 5
    },
    {
        id: 7,
        imgURL: "../images/offers/offer7.jpg",
        title: "Design Responsive, SEO friendly & Fast Loading WordPress website",
        specialities: ["web developement", "logo design", "design"],
        freelancerPhoto: "../images/freelancers/yassin.jpg",
        freelancerName: "Yassin B.",
        rating: 4.9,
        reviews: 1723,
        price: 105,
        dileveredDays: 5
    },
    {
        id: 8,
        imgURL: "../images/offers/offer8.jpg",
        title: "Design Responsive, SEO friendly & Fast Loading WordPress website",
        specialities: ["web developement", "logo design", "design"],
        freelancerPhoto: "../images/freelancers/wissal.jpg",
        freelancerName: "Wissal B.",
        rating: 4.9,
        reviews: 1723,
        price: 105,
        dileveredDays: 5
    },
    {
        id: 9,
        imgURL: "../images/offers/offer9.jpg",
        title: "Design Responsive, SEO friendly & Fast Loading WordPress website",
        specialities: ["web developement", "logo design", "design"],
        freelancerPhoto: "../images/freelancers/zindihi.jpg",
        freelancerName: "Zindihi B.",
        rating: 4.9,
        reviews: 1723,
        price: 105,
        dileveredDays: 5
    },
    {
        id: 10,
        imgURL: "../images/offers/offer10.jpg",
        title: "Design Responsive, SEO friendly & Fast Loading WordPress website",
        specialities: ["web developement", "logo design", "design"],
        freelancerPhoto: "../images/freelancers/ghofran.jpg",
        freelancerName: "Mohamed G.",
        rating: 4.9,
        reviews: 1723,
        price: 105,
        dileveredDays: 5
    },
]
let offersCards = document.querySelectorAll(".offers-section .offer-card");

let makeOffersCards = (infos) => {
    let i=0;
    offersCards.forEach(card => {
        card.querySelector(".title").textContent = infos[i].title;
        card.querySelector(".photo").style.backgroundImage = `url("${infos[i].imgURL}")`;
        infos[i].specialities.forEach(speciality => {
            let link = document.createElement('a');
            link.setAttribute("class", "px-1.5 py-1 m-0.5 text-sm bg-gray-100 rounded-md");
            link.setAttribute('href', "#");
            link.textContent = speciality;
            card.querySelector('.specialities').insertBefore(link, card.querySelector(".specialities").firstChild);
        })
        card.querySelector(".freelancer-photo").setAttribute("src", infos[i].freelancerPhoto);
        card.querySelector(".freelancer-name").textContent = infos[i].freelancerName;
        card.querySelector(".rating").textContent = infos[i].rating;
        card.querySelector(".reviews").textContent = infos[i].reviews;
        card.querySelector(".price").textContent = `$${infos[i].price}`;
        card.querySelector(".dilevered-days").textContent = `dilevered in ${infos[i].dileveredDays} days`;
        i++;
    })
}
makeOffersCards(offersInfos);


$(document).ready(() => {
    // Categories section

    let categoriesScrollStep;
    if (window.innerWidth > 1023) {
        categoriesScrollStep = ($(".categories-section .carousal ul")[0].offsetWidth / 6) * 5 + 60;
    } else if (window.innerWidth > 767) {
        categoriesScrollStep = ($(".categories-section .carousal ul")[0].offsetWidth / 5) * 4 + 24;
    } else {
        categoriesScrollStep = ($(".categories-section .carousal ul")[0].offsetWidth / 4) * 3 + 12;
    }

    $(".categories-btns .scroll-left").click(() => {
        $(".categories-section .carousal ul").animate({
            scrollLeft: `+=${categoriesScrollStep}`
        }, 700, () => {
            let maxScrollLeft = $(".categories-section .carousal ul")[0].scrollWidth - $(".categories-section .carousal ul").width();
            $(".categories-section .carousal ul").scrollLeft() >= maxScrollLeft - 5 ? $(".categories-btns .scroll-left").prop("disabled", true) : $(".categories-btns .scroll-right").prop("disabled", false)
        });
    });

    $(".categories-btns .scroll-right").click(() => {
        $(".categories-section .carousal ul").animate({
            scrollLeft: `-=${categoriesScrollStep}`
        }, 700, () => {
            $(".categories-section .carousal ul").scrollLeft() <= 5 ? $(".categories-btns .scroll-right").prop("disabled", true) : $(".categories-btns .scroll-left").prop("disabled", false)
        });
    });

    // Freelancers section
    var maxHeight = 0;
    $('.freelancer-card').each(function () {
        var cardHeight = $(this).height();
        maxHeight = Math.max(maxHeight, cardHeight);
    });

    // Set all cards to the maximum height
    $('.freelancer-card').css('height', maxHeight + 'px');

    let freelancersScrollStep;
    if (window.innerWidth > 1023) {
        freelancersScrollStep = ($(".freelancers-section .carousal ul")[0].offsetWidth / 5) * 4 + 32;
    } else if (window.innerWidth > 767) {
        freelancersScrollStep = ($(".freelancers-section .carousal ul")[0].offsetWidth / 5) * 4 + 16;
    } else {
        freelancersScrollStep = ($(".freelancers-section .carousal ul")[0].offsetWidth / 4) * 3 + 8;
    }

    $(".freelancers-btns .scroll-left").click(() => {
        $(".freelancers-section .carousal ul").animate({
            scrollLeft: `+=${freelancersScrollStep}`
        }, 700, () => {
            let maxScrollLeft = $(".freelancers-section .carousal ul")[0].scrollWidth - $(".freelancers-section .carousal ul").width();
            $(".freelancers-section .carousal ul").scrollLeft() >= maxScrollLeft - 5 ? $(".freelancers-btns .scroll-left").prop("disabled", true) : $(".freelancers-btns .scroll-right").prop("disabled", false)
        });
    });

    $(".freelancers-btns .scroll-right").click(() => {
        $(".freelancers-section .carousal ul").animate({
            scrollLeft: `-=${freelancersScrollStep}`
        }, 700, () => {
            $(".freelancers-section .carousal ul").scrollLeft() <= 5 ? $(".freelancers-btns .scroll-right").prop("disabled", true) : $(".freelancers-btns .scroll-left").prop("disabled", false)
        });
    });

    // Offers section
    let offersScrollStep;
    if (window.innerWidth > 1023) {
        offersScrollStep = 912;
    } else if (window.innerWidth > 767) {
        offersScrollStep = ($(".offers-section .carousal ul")[0].offsetWidth / 5) * 4 + 32;
    } else {
        offersScrollStep = ($(".offers-section .carousal ul")[0].offsetWidth / 5) * 4 + 16;
    }

    $(".offers-btns .scroll-left").click(() => {
        $(".offers-section .carousal ul").animate({
            scrollLeft: `+=${offersScrollStep}`
        }, 700, () => {
            let maxScrollLeft = $(".offers-section .carousal ul")[0].scrollWidth - $(".offers-section .carousal ul").width();
            $(".offers-section .carousal ul").scrollLeft() >= maxScrollLeft - 5 ? $(".offers-btns .scroll-left").prop("disabled", true) : $(".offers-btns .scroll-right").prop("disabled", false)
        });
    });

    $(".offers-btns .scroll-right").click(() => {
        $(".offers-section .carousal ul").animate({
            scrollLeft: `-=${offersScrollStep}`
        }, 700, () => {
            $(".offers-section .carousal ul").scrollLeft() <= 5 ? $(".offers-btns .scroll-right").prop("disabled", true) : $(".offers-btns .scroll-left").prop("disabled", false)
        });
    });
})

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 40,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
    }
});