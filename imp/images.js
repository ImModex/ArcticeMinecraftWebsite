let featureIndexMap = [];

window.onload = () => {
    showSlides('ranks', 1);
    showSlides('silkSpawners', 1);
    showSlides('betterCreepers', 1);
    showSlides('deathCoords', 1);
    showSlides('factionScythe', 1);
    showSlides('bowMendingInfinity', 1);
    showSlides('beaconRange', 1);
    showSlides('villagerTweaks', 1);
    showSlides('betterEnchanter', 1);
    showSlides('itemRepairTweaks', 1);
    showSlides('endermanFix', 1);
    showSlides('nick', 1);
    showSlides('spawnable', 1);
    showSlides('afk', 1);
}

// Next/previous controls
function plusSlides(feature, n) {
    assertEntryExists(feature);
    showSlides(feature, featureIndexMap[feature] += n);
}

// Thumbnail image controls
function currentSlide(feature, n) {
    assertEntryExists(feature);
    showSlides(feature, featureIndexMap[feature] = n);
}

function showSlides(feature, n) {
    assertEntryExists(feature);
    let i;
    let slides = document.getElementById(feature).getElementsByClassName("feature-image-slides");
    let dots = document.getElementById(feature).getElementsByClassName("feature-image-dot");
    if (n > slides.length) { featureIndexMap[feature] = 1 }
    if (n < 1) { featureIndexMap[feature] = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[featureIndexMap[feature] - 1].style.display = "block";
    if (dots !== undefined && dots.length !== 0)
        dots[featureIndexMap[feature] - 1].className += " active";
}

function assertEntryExists(feature) {
    if (featureIndexMap[feature] === undefined) {
        featureIndexMap[feature] = 1;
    }
}