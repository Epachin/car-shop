document.addEventListener("DOMContentLoaded", function() {
    const mapContainer = document.getElementById("map");
    const iframe = document.createElement("iframe");
    iframe.src = "https://yandex.ru/map-widget/v1/?um=constructor%3A65dec9a235e9210c050217bb1983facf3b07e29e55e019b6e61feb2b1709ac6c&scroll=false";
    iframe.width = "500";  // Set to desired width
    iframe.height = "350"; // Set to desired height
    iframe.frameBorder = "0";
    iframe.allowFullscreen = true;
    iframe.style.display = "block";
    mapContainer.appendChild(iframe);
});
