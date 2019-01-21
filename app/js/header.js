Vue.component('yyy', {
    template: `
                <div class="headerPrimary" style="padding: 18px 10px">
                    <div class="leftHeaderPrimary">
                        <div class="icon" style="margin-right: 10px">
                            <
                        </div>
                        <div class="contentLeftHeaderPrimary">
                            <div style="display: flex; color: #2ad4c6; font-weight: 700">
                                <div>*</div>
                                <div> En Vivo</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        (30 Ofertas)
                    </div>
                </div>`
})
Vue.component('xxx', {
    props: [
        'date',
        'hour',
        'customer',
        'offers',
        'calification',
        'nameCalification',
        'classStar',
        'opinions',
        'menu'
    ],
    template: `
                <div>                    
                    <div class="content-sbs" v-if="menu=='menuCustomer' || menu=='menuTomorrow' || menu=='menuLive' || menu=='menuNext'">
                        <div class="header">
                            <div class="date_sbs" v-if="menu=='menuCustomer'">
                                {{date}} <span class="from_sbs">Desde</span> {{hour}}
                            </div>
                            <div class="info_sbs">
                                <div class="title">
                                    {{customer}}
                                </div>
                                <div class="count-sbs" v-if="menu=='menuCustomer'">
                                    <span class="offerts_sbs">({{offers}} Ofertas)</span>
                                </div>
                            </div>
                            <div class="rate_sbs">
                                <div style="display: flex">
                                    <span class="mr-2">{{calification}} {{nameCalification}}</span>
                                    <ul class="ul_sbs mr-2" :class="classStar">
                                        <li>★</li>
                                        <li>★</li>
                                        <li>★</li>
                                        <li>★</li>
                                        <li>★</li>
                                    </ul>
                                </div>
                                <span class="rate_calf mr-2">Opiniones: {{opinions}}</span>
                            </div>
                        </div>
                    </div>
                </div>`
});
// crear la instancia principal
new Vue({
    el: '#header'
});