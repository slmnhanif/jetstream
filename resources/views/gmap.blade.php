 <!-- ***** Chefs Area Starts ***** -->
 <section class="section" id="chefs">
    <div class="container">
        <div class="row">
               <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Penyewaan</h6>
                        <h2>Kami menyediakan Fasilitas Hiburan</h2>
                    </div>
                </div>
            <div class="map" id="app">
                <gmap-map
                    :center="{lat:-3.811619118732149,lng:102.27597210323718}"
                    :zoom="13"
                    style="width: 1150px; height:440px; "
                >
                <gmap-info-window
                            :options="infoWindowOptions"
                            :position="infoWindowPosition"
                            :opened="infoWindowOpened"
                            @closeclick="handleInfoWindowClose"
                        >
                            <div class="info-window">
                                <h2 v-text="activeLocation.title"></h2>
                                <p v-text="activeLocation.description"></p>
                            </div>
                        </gmap-info-window>

                <gmap-marker
                v-for="(r, index) in location"
                :key="r.id"
                :position="getPosition(r)"
                :clickable="true"
                :draggable="false"
                @click="handleMarkerClicked(r)"
                ></gmap-marker>

            </gmap-map>
            </div>
            <script src="{{mix('js/app.js')}}"></script>

        </div>
    </div>
</section>

<!-- ***** Chefs Area Ends ***** -->