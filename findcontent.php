    <div class="ig-title world-view" data-aos="fade-right">
        <h6>Click on a Marker to explore</h6>
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
        {latLng: [41, 28.98], name: "Istanbul", weburl : "london.php?city=Istanbul&timezone=7", status : "mrk"}
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
  </script>