
require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

import * as VueGoogleMaps from 'vue2-google-maps';


Vue.use(VueGoogleMaps, {
    load: {
      key: 'AIzaSyArgHhrtm6qJPfBSTgYSjp6Gf4iuNdXOSc'
    }
  });
const app = new Vue({
    el: '#app',
    data() {
        return{
            location:[],
            infoWindowOptions: {
                pixelOffset: {
                    width: 0,
                    height: -35
                }
            },
            activeLocation: {},
            infoWindowOpened: false
        }
    },
    created() {
        axios.get('/api/location')
        .then((response) => this.location = response.data)
        .catch((error) => console.error(error));
    },
    methods: {
        getPosition(r) {
            return {
                lat: parseFloat(r.latitude),
                lng: parseFloat(r.longitude)
            }
        },
        handleMarkerClicked(r) {
            this.activeLocation = r;
            this.infoWindowOpened = true;
        },
        handleInfoWindowClose() {
            this.activeLocation = {};
            this.infoWindowOpened = false;
        },
    },

    computed: {
        mapCenter() {
            if (!this.location.length) {
                return {
                    lat: 10,
                    lng: 10
                }
            }

            return {
                lat: parseFloat(this.location[0].latitude),
                lng: parseFloat(this.location[0].longitude)
            }
        },
        infoWindowPosition() {
            return {
                lat: parseFloat(this.activeLocation.latitude),
                lng: parseFloat(this.activeLocation.longitude)
            };
        },
    }

});
