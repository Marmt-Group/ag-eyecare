mapboxgl.accessToken =
    'pk.eyJ1Ijoic29yZW5zZW5qZyIsImEiOiJjajF2OGVqM2wwMDBkMnhtanVlZ282ZTNrIn0.dr-glSik3AgTr16baBKy_w';
const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/sorensenjg/cjs8gk0zq4ck11fmxiiq8x1v4',
    center: [-96.841156, 33.153954],
    zoom: 13,
});

// disable map zoom when using scroll
map.scrollZoom.disable();

var geojson = {
    type: 'FeatureCollection',
    features: [
        {
            type: 'Feature',
            geometry: {
                type: 'Point',
                coordinates: [-96.841156, 33.153954],
            },
            properties: {
                title: 'Avant-Garde Optometry',
                description: '9255 Dallas Pkwy #140<br /> Frisco, Texas 75034',
            },
        },
    ],
};

// add markers to map
geojson.features.forEach(function (marker) {
    // create a HTML element for each feature
    var el = document.createElement('div');
    el.className = 'marker';

    // make a marker for each feature and add to the map
    new mapboxgl.Marker(el)
        .setLngLat(marker.geometry.coordinates)
        .setPopup(
            new mapboxgl.Popup({ offset: 25 }) // add popups
                .setHTML(
                    '<h3>' +
                    marker.properties.title +
                    '</h3><p>' +
                    marker.properties.description +
                    '</p>'
                )
        )
        .addTo(map);
});