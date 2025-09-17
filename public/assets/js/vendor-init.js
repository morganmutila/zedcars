// Ready-to-use initialization for vendor JS components

document.addEventListener("livewire:navigated", () => {
    // Choices.js
    document.querySelectorAll(".form-control").forEach((el) => {
        if (window.Choices) new Choices(el);
    });

    // Cleave.js
    document.querySelectorAll(".cleave-input").forEach((el) => {
        if (window.Cleave)
            new Cleave(el, { phone: true, phoneRegionCode: "ZM" });
    });

    // Flatpickr
    document.querySelectorAll(".flatpickr-input").forEach((el) => {
        if (window.flatpickr) flatpickr(el);
    });

    // GLightbox
    if (window.GLightbox) GLightbox({ selector: ".glightbox" });

    // Img Comparison Slider
    document.querySelectorAll(".img-comparison-slider").forEach((el) => {
        if (window.ImgComparisonSlider) new ImgComparisonSlider(el);
    });

    // Leaflet
    document.querySelectorAll(".leaflet-map").forEach((el) => {
        if (window.L) {
            const map = L.map(el).setView([51.505, -0.09], 13);
            L.tileLayer(
                "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
            ).addTo(map);
        }
    });

    // List.js
    document.querySelectorAll(".listjs-container").forEach((el) => {
        if (window.List) new List(el);
    });

    // noUiSlider
    document.querySelectorAll(".nouislider").forEach((el) => {
        if (window.noUiSlider)
            noUiSlider.create(el, {
                start: [20, 80],
                range: { min: 0, max: 100 },
            });
    });

    // SimpleBar
    document.querySelectorAll(".simplebar").forEach((el) => {
        if (window.SimpleBar) new SimpleBar(el);
    });

    // Swiper
    document.querySelectorAll(".swiper-container").forEach((el) => {
        if (window.Swiper) new Swiper(el, {});
    });
});
