<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Parking Report top mayor tiempo ocupada</div>
                        <div class="card-body">
                         <!--   <VueRangedatePicker :initRange="dateRanges" :i18n="'ES'" @selected="onDateSelected"
                                                :months="months"
                                                :captions="captions"></VueRangedatePicker>-->
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">CELDA</th>
                                    <th scope="col">VECES OCUPADO</th>
                                    <th scope="col">TIEMPO</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="item in topOneDate">
                                    <td>{{item.cell}}</td>
                                    <td>{{item.ocupped_times}}</td>
                                    <td>{{item.total_seconds}}</td>
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
    import VueRangedatePicker from 'vue-rangedate-picker';

    export default {
        name: "Report",
        components: {
            VueRangedatePicker
        },
        data() {
            return {
                date: moment().format(),
                dateRanges: {
                    start: '',
                    end: ''
                },
                captions: {
                    'title': 'Elige la fecha',
                    'ok_button': 'Aplicar'
                },
                topOneDate:[],
                topTwoDate: []
            }
        },
        mounted(){
            this.today()
        },
        methods: {
            today(){
                const n = new Date();
                this.dateRanges.start = new Date(n.getFullYear(), n.getMonth(), n.getDate() + 1, 0, 0);
                this.dateRanges.end  = new Date(n.getFullYear(), n.getMonth(), n.getDate() + 1, 23, 59);
                this.reportOne();
            },

            onDateSelected: function (daterange) {
                this.dateRanges = daterange;
                this.reportOne();
            },
            reportOne() {
                var _this = this;
                var dateRange = _this.dateRanges;
                _this.axios.get('/auth/vehicles-report', {
                    'Authorization': _this.$auth.token(),
                    start: moment(dateRange.start).format('YYYY-MM-DD'),
                    end:  moment(dateRange.end).format('YYYY-MM-DD'),
                    params: {
                        start: moment(dateRange.start).format('YYYY-MM-DD'),
                        end:  moment(dateRange.end).format('YYYY-MM-DD'),
                    }
                })
                    .then(function (response) {
                        _this.topOneDate = response.data.top;

                    })
                    .catch(function (error) {
                    });
            }
        }
    }
</script>

<style scoped>

</style>
