<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta</title>
    <link rel="stylesheet" href="app/css/style.css">
    <link rel="stylesheet" href="app/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>
    <div id="header">
        <!--
            menu = "menuCustomer"
                date
                hour
                customer
                offers
                calification
                name-calification
                class-star
                opinions
            menu = "menuTomorrow"
            menu = "menuLive"
            menu = "menuNext"
        -->
        
        <yyy></yyy>
        <xxx menu="menuNext" date="mañana" hour="02:00 PM" customer="Operaciones y Servicios Logisticos JR" offers="30" calification="3.9" name-calification="Muy Bueno" class-star="star" opinions="160"></xxx>
    </div>
    
    <div>
        <!---
        <div class="headerVMC" v-if="menu!='menuCustomer' || menu=='menuTomorrow' || menu=='menuLive' || menu=='menuNext'">
                        <div class="leftHeader" v-if="menu=='menuLive'">
                            <div>*</div>
                            <div class="liveHeaderVMC">En Vivo</div>
                        </div>
                        <div v-if="menu!='menuLive'">{{date}} <span class="from_sbs">Desde</span> {{hour}}</div>
                        <div>({{offers}} Ofertas)</div>
                    </div>-->
        <!-- <div class="headerVMC">
            <div class="leftHeader">
                <div>*</div>
                <div class="liveHeaderVMC">En Vivo</div>
            </div>
            <div>(30 Ofertas)</div>
        </div>
        <div class="headerVMC">
            <div>Miércoles, 14 de Diciembre <span class="from_sbs">Desde</span> 02:00 PM</div>
            <div>(30 Ofertas)</div>
        </div> -->
        <!-- <div class="headerVMC">
            <div>Mañana <span class="from_sbs">Desde</span> 02:00 PM</div>
            <div>(30 Ofertas)</div>
        </div>
        <div class="content-sbs">
            <div class="header">
                <div class="date_sbs">
                    Miércoles, 14 de Enero <span class="from_sbs">Desde</span> 02:00 PM
                </div>
                <div class="info_sbs">
                    <div class="title">
                        Operaciones y Servicios Logisticos JR
                    </div>
                    <div class="count-sbs">
                        <span class="offerts_sbs">(30 Ofertas)</span>
                    </div>
                </div>
                <div class="rate_sbs">
                    <span class="mr-2">3.9 Bueno</span>
                    <ul class="ul_sbs mr-2">
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                        <li>★</li>
                    </ul>
                    <span class="rate_calf mr-2">Opiniones: 160</span>
                </div>
            </div>
        </div> -->
    </div>
    <script src="app/js/header.js"></script>
</body>
</html>