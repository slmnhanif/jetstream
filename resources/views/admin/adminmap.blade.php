<!DOCTYPE html>
<html lang="en">
  <head>
   
   @include("admin.admincss")
   
  </head>
  <body>
    
   <div class="container-scroller">
     
  	@include("admin.navbar")
    @include("nav-menu-new")
    
      <div class="content">
        <form action="{{ url('/store') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="mapform" >
                <div class="row">
                    <div class="col-5">
                        <label>Latitude</label>
                        <input type="text" class="form-control" placeholder="lat" name="lat" id="lat" required>
                    </div>
                    <div class="col-5">
                        <label>Longitude</label>
                        <input type="text" class="form-control" placeholder="lng" name="lng" id="lng" required>
                    </div>
                    <div class="col-5">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Title" name="title" id="title" required>
                    </div>
                    <div class="col-5">
                        <label>Description</label>
                        <input type="text" class="form-control" placeholder="Description" name="des" id="des" required>
                    </div>
                    <div class="col-5">
                        <label>Image</label>
                        <input type="file" class="form-control"  name="image"  >
                    </div>
                </div>

                <div id="map" style="height:600px; width: 900px;" class="my-3"></div>

                <script>
                    let map;
                    function initMap() {
                        
                        map = new google.maps.Map(document.getElementById("map"), {
                            center: { lat: -3.809417721071455, lng: 102.27161015150737 },
                            zoom: 8,
                            scrollwheel: true,
                        });

                        const uluru = { lat: -3.809417721071455, lng: 102.27161015150737 };
                        let marker = new google.maps.Marker({
                            position: uluru,
                            map: map,
                            draggable: true
                        });

                        google.maps.event.addListener(marker,'position_changed',
                            function (){
                                let lat = marker.position.lat()
                                let lng = marker.position.lng()
                                $('#lat').val(lat)
                                $('#lng').val(lng)
                            })

                        google.maps.event.addListener(map,'click',
                        function (event){
                            pos = event.latLng
                            marker.setPosition(pos)
                        })
                    }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7GFfKDp6zdLl71lqdaKMeQ5cFiDsDJ10&callback=initMap"
                        type="text/javascript"></script>
            </div>

            <input type="submit" class="btn btn-primary">
        </form>


    </div>

  
  </div>

   @include("admin.adminscript")


  </body>
</html>




