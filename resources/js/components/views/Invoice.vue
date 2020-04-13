<template>
    <div class="container">
        <div class=" d-flex justify-content-center" v-if="loader">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <br>
           <center>
                Cargando Factura
           </center>
        </div>
        <center>
            <h1 v-if="error">Error al cargar la factura</h1>
        </center>
        <div v-if="Object.keys(invoice_info).length > 0">
            <div class="row">
                <div class="col-md-12">
                    <div class="invoice-title">
                        <h2></h2>
                        <h3 class="pull-right">Factura # {{invoice_info.id}}</h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <strong>Cliente:</strong><br>
                                {{invoice_info.client.name}}
                            </address>
                        </div>
                        <div class="col-md-6 text-right">
                            <address>
                                <strong>Empresa:</strong><br>
                                {{company_info.name}}<br>
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6 text-right">
                            <address>
                                <strong>Fecha:</strong><br>
                                {{invoice_info.date}}<br><br>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Producto</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <thead>
                                    <tr>
                                        <td><strong>Producto</strong></td>
                                        <td class="text-center"><strong>Precio</strong></td>
                                        <td class="text-center"><strong>Cantidad</strong></td>
                                        <td class="text-right"><strong>Total</strong></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="item in invoice_info.items">
                                        <td>{{item.name}}<br>
                                            {{invoice_info.anotation}}

                                        </td>
                                        <td class="text-center">${{item.price}} * segundo</td>
                                        <td class="text-center">{{item.quantity}}</td>
                                        <td class="text-right">${{item.total}}</td>
                                    </tr>
                                    <tr>
                                        <td class="thick-line"></td>
                                        <td class="thick-line"></td>
                                        <td class="no-line text-center"><strong>Total</strong></td>
                                        <td class="no-line text-right">${{invoice_info.total}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "Invoice",
        data() {
            return {
                invoice_id: this.$route.params.id,
                invoice_info: [],
                company_info: [],
                loader: false,
                error: false
            }
        },
        mounted() {
            this.bill();
        },
        methods: {
            bill() {
                var _this = this;
                _this.loader = true;
                _this.axios.get('/auth/bill-show', {
                    'Authorization': _this.$auth.token(),
                    params: {
                        bill_id: _this.invoice_id
                    }
                })
                    .then(function (response) {
                        _this.invoice_info = response.data.invoice;
                        _this.company_info = response.data.company;
                        _this.loader = false;
                        _this.error = false;


                    })
                    .catch(function (error) {
                        _this.loader = false;
                        _this.error = true;
                    });
            }
        }
    }
</script>

<style scoped>
    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }

    .table > tbody > tr > .no-line {
        border-top: none;
    }

    .table > thead > tr > .no-line {
        border-bottom: none;
    }

    .table > tbody > tr > .thick-line {
        border-top: 2px solid;
    }
</style>
