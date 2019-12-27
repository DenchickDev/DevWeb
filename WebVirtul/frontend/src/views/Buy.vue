<template>
    <section class="buy">
        <h4 v-if="result !== 'success'">{{result}}</h4>

    <form style="margin: 100px;" v-if="result !== 'success'" @submit.prevent="send"> <!-- class="form-signin">-->
        <div class="text-center mb-4">
            <img  src="../../public/css/image/VRT.png" alt="" width="260">
            <h1 class="h3 mb-3 font-weight-normal">Форма оплаты</h1>
            <!--        <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>-->
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="Name">Имя</label>
                    <input type="text" id="Name" class="form-control" placeholder="Name"  v-model="firstname">
                    <div class="error" v-if="$v.firstname.$anyError && !$v.firstname.required">Заполните имя</div>
                    <div class="error" v-if="$v.firstname.$anyError && !$v.firstname.maxLength">Максимальная длина 64 символа</div>
                </div>
                <div class="col">
                    <label for="inputEmail">Email</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus v-model="email">
                    <div class="error" v-if="$v.email.$anyError && !$v.email.required">Заполните Email</div>
                    <div class="error" v-if="$v.email.$anyError && !$v.email.email">Некорректный Email</div>
                </div>
            </div>
            <div class="row">
                <div class="col" style="margin-top: 10px">
                    <label for="Category">Категория</label>
                    <select class="form-control" id="Category" @change="findService" v-model="categoryId">
                        <option value="">Выбрать...</option>
                        <option v-for="category in categories" v-bind:key="category.id" v-bind:value="category.id">{{category.name}}</option>
                    </select>
                    <div class="error" v-if="$v.categoryId.$anyError && !$v.categoryId.required">Выберите Категорию</div>
                </div>
                <div class="col" style="margin-top: 10px">
                    <label for="Service">Услуга</label>
                    <select class="form-control" id="Service" v-model="serviceId" @change="findPrice">
                        <option value="">Выбрать...</option>
                        <option v-for="service in services" v-bind:key="service.id" v-bind:value="service.id">{{service.name}}</option>
                    </select>
                    <div class="error" v-if="$v.serviceId.$anyError && !$v.serviceId.required">Выберите Услугу</div>
                    <!--<input type="text" id="Service" class="form-control" placeholder="Service" required>-->
                </div>
                <div class="col" style="margin-top: 10px">
                    <label for="Price">Цена</label>
                    <input type="text" readonly id="Price" class="form-control" placeholder="Price" autofocus v-model="price"  >
                </div>
            </div>
        </div>
        <div class="form-group">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Оплатить</button>
        </div>
    </form>
    </section>
</template>

<script>
    import {HTTP} from "../components/http";
    import {required, maxLength, email} from 'vuelidate/src/validators';

    export default {
        name: "BuyForm",
        data(){
            return{
                firstname: '',
                email: '',
                result: '',
                categoryId: '',
                serviceId: '',
                price: '',
                categories: [],
                services: []
            };
        },
        validations:{
            firstname:{
                required,
                maxLength: maxLength(64)
            },
            email:{
                required,
                email: email
            },
            categoryId:{
                required
            },
            serviceId:{
                required
            }
        },
        methods:{
            send: function () {
                this.$v.$touch();
                if(!this.$v.$invalid){
                    HTTP.post('/buy/buy', {
                        name: this.firstname,
                        email: this.email,
                        IdService: this.serviceId
                    }).then(
                         (response) => {
                            this.result = response.data.status;
                         },
                        (error) => {
                             this.result = error.response.data;
                         }
                    );
                }
            },
            findService: function () {
                HTTP.get('/services/' + this.categoryId)
                    .then(response => (this.services = response.data));
                this.price = '';
            },
            findPrice: function () {
                //this.findPriceByService(this.serviceId);
                //var service2 = this.findPriceByService(this.serviceId);
                //this.price = service2;
                for (var i=0; i<this.services.length; i++){
                    if(this.services[i].id == this.serviceId){
                        this.price = this.services[i].price;
                    }
                }
                //this.services.forEach(function (item) {
                 //   if(item.id == serviceId) {
                 //       this.price = item.id;
                //    }
            },
            findPriceByService: function (serviceId) {
                //console.log(serviceId);
                //this.price = this.services[0].price;
                //this.price = serviceId;
                //this.price = this.services[0].id;
                for (var i=0; i<this.services.length; i++){
                    if(this.services[i].id == serviceId){
                        this.price = this.services[i].price;
                    }
                }
                this.services.forEach(function (item) {
                    if(item.id == serviceId) {
                        this.price = item.id;
                    }
                });
            }
        },
        created() {
            HTTP.get('/category')
                .then(response => (this.categories = response.data))
        }
    }
</script>

<style scoped>

</style>