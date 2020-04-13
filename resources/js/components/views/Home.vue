<template>
    <div>
        <div class="container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert" v-show="error">
                <strong>{{message}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-success alert-dismissible fade show" role="alert" v-show="success">
                <strong>{{message}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Parking Places</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <a href="javascript:void(0)" class="col-1" v-for="lineOne in placesData"
                                           v-if="lineOne.number <= (places/2)"
                                           v-on:click="lineOne.available === 0 ? placeInfo(lineOne.id):''">
                                            <img class="img-parking"
                                                 :src="lineOne.available === 1 ? imgGreen:imgRed">
                                            <p class="places-name">C{{lineOne.number}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <a href="javascript:void(0)" class="col-1" v-for="lineTwo in placesData"
                                           v-if="lineTwo.number > (places/2)"
                                           v-on:click="lineTwo.available === 0 ? placeInfo(lineTwo.id):''">
                                            <img class="img-parking"
                                                 :src="lineTwo.available === 1 ? imgGreen:imgRed">
                                            <p class="places-name">C{{lineTwo.number}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Parking ingreso</div>
                        <div class="card-body">
                            <form autocomplete="off" @submit.prevent="ingress">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="license_plate" placeholder="Placa"
                                           aria-label="" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button v-on:click="vehicleLicensePlate" class="btn btn-outline-secondary"
                                                type="button" id="button-addon2">Buscar
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Marca</label>
                                    <v-select :options="vehicle_brands" label="name" v-model="vehicle_brand"></v-select>
                                </div>
                                <button type="submit" class="btn btn-success">Ingreso</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Parking Places</div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center" v-if="loader">
                                <div class="spinner-border" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="row">

                                <table class="table" v-if="Object.keys(vehicle_parking_info).length > 0">
                                    <thead>
                                    <tr>
                                        <th scope="col">PLACA</th>
                                        <th scope="col">MARCA</th>
                                        <th scope="col">INGRESO</th>
                                        <th scope="col">SALIDA</th>
                                        <th scope="col">TIEMPO</th>
                                        <th scope="col">COSTO</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">{{vehicle_parking_info.vehicle.license_plate}}</th>
                                        <td>{{vehicle_parking_info.vehicle.brands_car.name}}</td>
                                        <td>{{vehicle_parking_info.ingress_time}}</td>
                                        <td>{{vehicle_parking_info.out_time}}</td>
                                        <td>
                                            Segundos: {{price_time.time}}<br>
                                            Minutos: {{(price_time.time / 60).toFixed(0)}}
                                        </td>
                                        <td>{{price_time.price}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Parking Salida</div>
                        <div class="card-body">
                            <form autocomplete="off" @submit.prevent="out">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="license_plate_out"
                                           placeholder="Placa"
                                           aria-label="" aria-describedby="button-addon3">
                                    <div class="input-group-append">
                                        <button v-on:click="vehicleLicensePlateOut(license_plate_out)"
                                                class="btn btn-outline-secondary"
                                                type="button" id="button-addon3">Buscar
                                        </button>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Salida</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Parking Report</div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">CELDA</th>
                                    <th scope="col">CELDA HISTORIA</th>
                                    <th scope="col">PLACA</th>
                                    <th scope="col">MARCA</th>
                                    <th scope="col">INGRESO</th>
                                    <th scope="col">TIEMPO</th>
                                    <th scope="col">COSTO</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="item in vehiclesReportData">
                                    <td>C{{item.place.number}}</td>
                                    <td>
                                        <ul>
                                            <li v-for="history in item.parking_histories_order">
                                                C{{history.place.number}}
                                            </li>
                                        </ul>
                                    </td>
                                    <td>{{item.vehicle.license_plate}}</td>
                                    <td>{{item.vehicle.brands_car.name}}</td>
                                    <td>{{item.ingress_time}}</td>
                                    <td>
                                        Segundos: {{timeTotal(item.ingress_time)}}<br>
                                        Minutos: {{(timeTotal(item.ingress_time) / 60).toFixed(0)}}
                                    </td>
                                    <td>
                                        {{cost(timeTotal(item.ingress_time))}}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

    const moment = require('moment');
    const accounting = require('accounting');
    export default {
        name: "Home",
        data() {
            return {
                places: 0,
                placesData: [],
                lineOne: 0,
                lineTwo: 0,
                imgGreen: 'http://parking.brogramador.com/img/parked-car-green.png',
                imgRed: 'http://parking.brogramador.com/img/parked-car-red.png',
                license_plate: '',
                vehicle_brand: '',
                vehicle_brands: [],
                vehicle: [],
                vehicleAvailable: false,
                message: '',
                error: false,
                success: false,
                license_plate_out: '',
                vehicle_parking_info: [],
                parking_price: 0,
                loader: false,
                price_time: {
                    price: '',
                    time: ''
                },
                vehiclesReportData: []

            }
        },
        mounted() {
            this.parkingPlaces();
            this.vehicleBrands();
            this.vehiclesReport();
        },
        methods: {
            parkingPlaces() {
                this.vehiclesReport();
                var _this = this;
                _this.axios.get('/auth/places', {
                    'Authorization': _this.$auth.token()
                })
                    .then(function (response) {

                        _this.placesData = response.data.places;
                        _this.parking_price = response.data.parking_price;
                        _this.places = response.data.places.length;
                    })
                    .catch(function (error) {
                    });

            },
            vehicleLicensePlate() {
                var _this = this;
                _this.success = false;
                _this.error = false;
                _this.axios.get('/auth/vehicle-license-plate', {
                    'Authorization': _this.$auth.token(),
                    params: {
                        'license_plate': _this.license_plate
                    }
                })
                    .then(function (response) {
                        _this.vehicle = response.data.vehicle;
                        _this.vehicle_brand = response.data.vehicle.brands_car;
                        _this.vehicleAvailable = true;
                        _this.message = response.data.message;
                        _this.success = true;
                        _this.error = false;
                    })
                    .catch(function (error) {
                        _this.vehicleAvailable = false;
                        _this.message = error.response.data.message;
                        _this.error = true;
                        _this.success = false;
                    });
            },
            vehicleLicensePlateOut(license_plate) {
                var _this = this;
                _this.vehicle_parking_info = [];
                _this.success = false;
                _this.error = false;
                _this.loader = true;
                _this.axios.get('/auth/vehicle-license-plate-outs/' + license_plate, {
                    'Authorization': _this.$auth.token()
                })
                    .then(function (response) {
                        _this.vehicle_parking_info = response.data.vehicle;
                        _this.price();
                        _this.loader = false;
                        _this.message = response.data.message;
                        _this.success = true;
                        _this.error = false;
                    })
                    .catch(function (error) {
                        _this.vehicleAvailable = false;
                        _this.message = error.response.data.message;
                        _this.error = true;
                        _this.success = false;
                        _this.loader = false;
                    });
            },
            vehicleBrands() {
                var _this = this;
                _this.axios.get('/auth/vehicle-brands', {
                    'Authorization': _this.$auth.token()
                })
                    .then(function (response) {
                        _this.vehicle_brands = response.data.brands;
                    })
                    .catch(function (error) {
                    });
            },
            ingress() {
                var _this = this;
                _this.success = false;
                _this.error = false;
                _this.axios.post('/auth/vehicle-ingress', {
                    'Authorization': _this.$auth.token(),
                    license_plate: _this.license_plate,
                    vehicle_brand: _this.vehicle_brand.id,
                    vehicle_available: _this.vehicleAvailable
                })
                    .then(function (response) {
                        _this.parkingPlaces();
                        _this.message = response.data.message;
                        _this.success = true;
                        _this.error = false;
                        _this.license_plate = '';
                    })
                    .catch(function (error) {
                        _this.message = error.response.data.message;
                        _this.error = true;
                        _this.success = false;
                    });
            },
            out() {
                var _this = this;
                alert(_this.license_plate_out);
                _this.vehicleLicensePlateOut(_this.license_plate_out);
                _this.success = false;
                _this.error = false;
                _this.axios.post('/auth/vehicle-out', {
                    'Authorization': _this.$auth.token(),
                    license_plate: _this.license_plate_out
                })
                    .then(function (response) {
                        _this.message = response.data.message;
                        _this.success = true;
                        _this.error = false;
                        _this.parkingPlaces();
                        _this.bill();
                        _this.license_plate_out = '';
                    })
                    .catch(function (error) {
                        _this.message = error.response.data.message;
                        _this.error = true;
                        _this.success = false;
                    });
            },
            placeInfo(place_id) {
                var _this = this;
                _this.success = false;
                _this.error = false;
                _this.vehicle_parking_info = [];
                _this.loader = true;
                _this.axios.get('/auth/place-info/' + place_id, {
                    'Authorization': _this.$auth.token(),
                })
                    .then(function (response) {
                        _this.message = response.data.message;
                        _this.success = true;
                        _this.error = false;
                        _this.vehicleLicensePlateOut(response.data.vehicle.vehicle.license_plate);
                        _this.loader = false;
                    })
                    .catch(function (error) {
                        _this.vehicleAvailable = false;
                        _this.message = error.response.data.message;
                        _this.error = true;
                        _this.success = false;
                        _this.loader = false;
                    });
            },
            price() {
                const vehicle = this.vehicle_parking_info;
                var time = this.timeTotal(vehicle.ingress_time);
                this.price_time.time = time;
                this.price_time.price = this.cost(time);
            },
            cost(seconds) {
                var price_parking = this.parking_price;
                var cost = seconds * price_parking;
                return accounting.formatMoney(cost);
            },
            timeTotal(ingress_time) {
                var now = moment();
                var ingress = moment(ingress_time);
                return now.diff(ingress, 'seconds');
            },
            vehiclesReport() {
                var _this = this;
                _this.axios.get('/auth/places-vehicles-report', {
                    'Authorization': _this.$auth.token()
                })
                    .then(function (response) {
                        console.log(response.data.vehicles);
                        _this.vehiclesReportData = response.data.vehicles;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            bill() {
                var _this = this;
                _this.axios.get('/auth/bill-create', {
                    'Authorization': _this.$auth.token(),
                    params: {
                        license_plate: _this.license_plate_out,
                        seconds: _this.price_time.time
                    }
                })
                    .then(function (response) {
                        _this.invoice(response.data.billing.id);
                    })
                    .catch(function (error) {
                    });
            },
            invoice(id) {
                var route = this.$router.resolve({path: '/invoice/' + id});
                window.open(route.href, '_blank');
            }


        }
    }
</script>

<style scoped>
    .img-parking {
        width: 50px;
    }

    .places-name {
        font-weight: bold;
    }
</style>
