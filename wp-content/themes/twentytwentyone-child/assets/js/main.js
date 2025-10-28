document.addEventListener("DOMContentLoaded", function () {
  // Rating slider
  const ratingSwiper = new Swiper(".RatingSwiper", {
    spaceBetween: 16,
    grabCursor: true,
    loop: false,
    slidesPerView: 1,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
      640: { slidesPerView: 2, spaceBetween: 20 },
      1024: { slidesPerView: 3, spaceBetween: 20 },
      1200: { slidesPerView: 5, spaceBetween: 30 },
    },
  });

  // Technical expertise slider
  const technicalExpertSwiper = new Swiper(".TechnicalExpertSwiper", {
    grabCursor: false,
    loop: true,
    slidesPerView: 1,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
      640: { slidesPerView: 2, spaceBetween: 20 },
      1024: { slidesPerView: 3, spaceBetween: 20 },
      1200: { slidesPerView: 4, spaceBetween: 36 },
    },
  });

  // Health flip slider
  const flipSwiper = new Swiper(".healthSld", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    breakpoints: {
      640: { slidesPerView: 2, spaceBetween: 20 },
      1200: { slidesPerView: 3.2, spaceBetween: 20 },
    },
  });

  // Glass effect card slider
  const glassSwiper = new Swiper(".industry-slider", {
    spaceBetween: 25,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    breakpoints: {
      576: { slidesPerView: 1 },
      768: { slidesPerView: 3 },
    },
    coverflowEffect: {
      rotate: 40,
      stretch: 30,
      depth: 10,
      scale: 0.8,
      modifier: 1,
      slideShadows: false,
    },
    speed: 600,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // Our Expertise Work slider
  const ourExpertiseWorkSwiper = new Swiper(".OurWork_sld", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true,
    breakpoints: {
      640: { slidesPerView: 2, spaceBetween: 20 },
      1200: { slidesPerView: 3.3, spaceBetween: 20 },
    },
  });

  // Our Works Swiper (coverflow effect)
  const ourWorkSwiper = new Swiper(".ourWorkSwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    coverflowEffect: {
      rotate: 30,
      stretch: 0,
      depth: 60,
      modifier: 1.29,
      scale: 0.88,
      slideShadows: false,
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      576: { slidesPerView: 2 },
      768: { slidesPerView: 3 },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // Testimonials + Client logo interaction
  const testimonialSwiper = new Swiper(".Testimonials_Swiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true,
    on: {
      slideChange: function () {
        const realIndex = this.realIndex;
        document.querySelectorAll(".logo-grid").forEach((item, i) => {
          item.classList.toggle("active", i === realIndex);
        });
      },
    },
  });

  const logoItems = document.querySelectorAll(".logo-grid");
  logoItems.forEach((logo, index) => {
    logo.addEventListener("click", () => {
      testimonialSwiper.slideToLoop(index);
      logoItems.forEach((l) => l.classList.remove("active"));
      logo.classList.add("active");
    });
  });
  if (logoItems.length > 0) logoItems[0].classList.add("active");

  // Card hover long-text toggle
  const cards = document.querySelectorAll(".card");
  cards.forEach((card) => {
    const longText = card.querySelector(".long-text");
    if (longText) {
      card.addEventListener("mouseenter", () =>
        longText.classList.add("show-long-text")
      );
      card.addEventListener("mouseleave", () =>
        longText.classList.remove("show-long-text")
      );
    }
  });

  // Techno Row Centering
  function updateTechnoRows() {
    const technoRows = document.querySelectorAll(".techno-row");
    technoRows.forEach((row) => {
      const childDivs = row.querySelectorAll(":scope > div").length;
      if (childDivs <= 4 && window.innerWidth > 576) {
        row.style.justifyContent = "center";
      } else {
        row.style.justifyContent = "flex-start";
      }
    });
  }
  updateTechnoRows();
  window.addEventListener("resize", updateTechnoRows);

  // Portfolio Tab Functionality
  const tabs = document.querySelectorAll("#portfolio-tabs a");
  const portfolioCards = document.querySelectorAll(
    "#portfolio-cards .portfolio-card"
  );

  tabs.forEach((tab) => {
    tab.addEventListener("click", function (e) {
      e.preventDefault();
      tabs.forEach((t) => t.classList.remove("active"));
      this.classList.add("active");
      const filter = this.getAttribute("data-filter");
      portfolioCards.forEach((card) => {
        if (filter === "all") {
          card.style.display = "";
        } else {
          card.style.display = card.classList.contains(filter) ? "" : "none";
        }
      });
    });
  });
});


document.addEventListener("DOMContentLoaded", function () {
  let started = false,
    intervals = [];
  const counters = document.querySelectorAll(".counter");
  const section = document.getElementById("growth-statistics");

  if(section){
    function animateCounters() {
      if (started) return;
      started = true;
      counters.forEach((counter) => {
        let target = +counter.dataset.target,
          val = 0;
        counter.textContent = "0+";
        let interval = setInterval(() => {
          val += Math.ceil(target / 60);
          if (val >= target) {
            counter.textContent = target + "+";
            clearInterval(interval);
          } else {
            counter.textContent = val + "+";
          }
        }, 20);
        intervals.push(interval);
      });
    }

    function resetCounters() {
      started = false;
      intervals.forEach(clearInterval);
      intervals = [];
      counters.forEach((c) => (c.textContent = "0+"));
    }

    function inView() {
      const r = section.getBoundingClientRect();
      return r.top < window.innerHeight && r.bottom > 0;
    }

    function onScroll() {
      inView() ? animateCounters() : resetCounters();
    }

    window.addEventListener("scroll", onScroll);
    onScroll();
  }
});