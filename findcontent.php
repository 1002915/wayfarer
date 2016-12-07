    <div class="ig-title world-view" data-aos="fade-right">
        <h6>Click on a Marker to explore</h6>
    </div>
    <div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Help:</strong> Use the map to find a marker and explore that city.
</div>
    <div class="world-map-container">
        <div id="world-map" style="width: 100%; height: 100%"></div>
    </div>

 <script>
$(function(){

    // ADD CITY NAMES/MARKERS HERE:
    var markers = [
        {latLng: [53, 0.5], name: "London", weburl : "london.php?city=London&timezone=10", status : "mrk"},
        {latLng: [-27.5, 153], name: "Brisbane", weburl : "london.php?city=Brisbane&timezone=0", status : "mrk"},
        {latLng: [41.00, 28.97], name: "Istanbul", weburl : "london.php?city=Istanbul&timezone=7", status : "mrk"},
        {latLng: [31.62, -7.98], name: "Marrakech", weburl : "london.php?city=Marrakech&timezone=7", status : "mrk"},
        {latLng: [48.85, 2.35], name: "Paris", weburl : "london.php?city=Paris&timezone=9", status : "mrk"},
        {latLng: [13.36, 103.84], name: "Siem Reap", weburl : "london.php?city=Siem Reap&timezone=7", status : "mrk"},
        {latLng: [50.07, 14.43], name: "Prague", weburl : "london.php?city=Prague&timezone=7", status : "mrk"},
        {latLng: [41.90, 12.49], name: "Rome", weburl : "london.php?city=Rome&timezone=7", status : "mrk"},
        {latLng: [21.02, 105.83], name: "Hanoi", weburl : "london.php?city=Hanoi&timezone=7", status : "mrk"},
        {latLng: [40.71, -74.00], name: "New York City", weburl : "london.php?city=New York City&timezone=7", status : "mrk"},
        {latLng: [35.68, 139.69], name: "Tokyo", weburl : "london.php?city=Tokyo&timezone=7", status : "mrk"},
        {latLng: [38.72, -9.13], name: "Lisbon", weburl : "london.php?city=Lisbon&timezone=7", status : "mrk"},
        {latLng: [25.20, 55.27], name: "Dubai", weburl : "london.php?city=Dubai&timezone=7", status : "mrk"},
        {latLng: [59.93, 30.33], name: "St. Petersburg", weburl : "london.php?city=StPetersburg&timezone=7", status : "mrk"},
        {latLng: [13.75, 100.50], name: "Bangkok", weburl : "london.php?city=Bangkok&timezone=7", status : "mrk"},
        {latLng: [52.37, 4.89], name: "Amsterdam", weburl : "london.php?city=Amsterdam&timezone=7", status : "mrk"},
        {latLng: [-34.5, 150], name: "Sydney", weburl : "london.php?city=Sydney&timezone=7", status : "mrk"},
        {latLng: [-22.90, -43.17], name: "Rio De Janeiro", weburl : "london.php?city=Rio De Janeiro&timezone=7", status : "mrk"},
        {latLng: [37.77, -122.41], name: "San Francisco", weburl : "london.php?city=San Francisco&timezone=7", status : "mrk"},
        {latLng: [-44.90, 168.5], name: "Queenstown", weburl : "london.php?city=Queenstown&timezone=7", status : "mrk"},
        {latLng: [55.95, -3.18], name: "Edinburgh", weburl : "london.php?city=Edinburgh&timezone=7", status : "mrk"}

    ];

    $('#world-map').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'none',
        markers: markers,
            onMarkerClick: function(even, index) {
                window.location.href = markers[index].weburl;
            },
        regionStyle: 
        {
            initial: { fill: '#fcf5d0'},
            hover: {fill: '#fcf5d0'},
        },
        markerStyle: 
        {
            initial: { fill: '#d4595d', stroke: '#383f47'}
        },
        series: {
            markers: [{ 
                attribute: 'image', 
                scale: { 
                    'mrk': 'images/pin2.png'
                },
                values: markers.reduce(function(p, c, i){ p[i] = c.status; return p }, {}), 
                
                }]
            }
  });
});

var offset = (new Date().getTimezoneOffset() / 60);
console.log(offset);
  </script>