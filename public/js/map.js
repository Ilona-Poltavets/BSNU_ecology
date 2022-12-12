var map = L.map('map', {
    center: [46.97164, 32.01590],
    zoom: 19
});

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

L.marker([46.97164, 32.01590]).addTo(map)
    .bindPopup('Petro Mohyla Black Sea National University')
    .openPopup();
