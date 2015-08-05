String.prototype.titleize = function() {
    var words = this.split(' ')
    var array = []
    for (var i = 0; i < words.length; ++i) array.push(words[i].charAt(0).toUpperCase() + words[i].toLowerCase().slice(1))
    return array.join(' ');
}
// (function() {
var map, image = '../wp-content/themes/template/assets/img/red.png';
var cities = [],
    relations = [],
    states = [],
    // markers = new Object();
    markers = [];

function initialize() {
    map = new google.maps.Map(
        document.getElementById('map-canvas'), {
            center: new google.maps.LatLng(places[0].lat, places[0].lon),
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
    for (var i = 0; i < places.length; i++) addMarker(places[i], i);
    appendCities();
    appendStates();
    $("#buscar-tiendas").on("click", function() {
        var state = $("#available-states").val();
        var city = $("#available-cities").val();
        setAllMap(null);
        map.setZoom(13);
        console.log(state);
        if(state && !city){
            map.panTo(markers[state][0].getPosition());
            setMarkers(markers[state]);
        } else if(state && city){
        //     map.panTo(markers[state][0].getPosition());
        //     setMarkers(markers[state]);
        }
    });
}

function addMarker(place, i) {
    if (states.indexOf(place.state.titleize()) < 0) {
        markers[place.state.titleize().replace(/\s/g, '')] = [];
        states.push(place.state.titleize());
    }
    if (cities.indexOf(place.city.titleize()) < 0) {
        cities.push(place.city.titleize());
        relations.push({
            city: place.city.titleize(),
            state: place.state.titleize()
        });
    }
    // markers[place.state.titleize()].push(place);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(place.lat, place.lon),
        map: map,
        icon: image,
        title: place.title,
        clickable: true
    });
    markers.push(marker);
    markers[place.state.titleize().replace(/\s/g, '')].push(marker);
    // google.maps.event.addListener(marker, 'click', function(marker) {
    //     console.log(marker);
    // });
}


function setMarkers(state) {
    for (var i = 0; i < state.length; i++) {
        markers[i].setMap(map);
    }
}

function setAllMap(map) {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}

function appendCities() {
    cities.sort();
    relations.sort(function compare(a, b) {
        return (a.city < b.city) ? -1 : 1;
        region: "OBELA"
    }, {
        lat: 19.32145,
        lon: -99.13129,
        title: "Miramontes",
        city: "Valle de México",
        state: "DISTRITO FEDERAL",
        region: "OBELA"
    }, {
        lat: 19.402406,
        lon: -99.15498,
        title: "Parque Delta",
        city: "Valle de México",
        state: "DISTRITO FEDERAL",
        region: "OBELA"
    }, {
        lat: 19.3922329,
        lon: -99.179928,
        title: "Tacubaya",
        city: "Valle de México",
        state: "DISTRITO FEDERAL",
        region: "OBELA"
    }, {
        lat: 19.4071375,
        lon: -99.1375101,
        title: "La Viga",
    });
    for (var i = 0; i < relations.length; i++) {
        $("#available-cities").append("<option value='" + relations[i].city + "' class='" + relations[i].state.replace(/\s/g, '') + "'>" + relations[i].city + "</option>");
    };
}

function appendStates() {
    states.sort();
    for (var i = 0; i < states.length; i++) {
        $("#available-states").append("<option value='" + states[i].replace(/\s/g, '') + "'>" + states[i] + "</option>");
    };
    $("#available-states").on("change", function() {
        var value = $(this).val();
        $("#available-cities option").not("." + value).hide();
        $("#available-cities option." + value).show();
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
// })();