<template>
    <section class="news">
        <h1>Новости</h1>
        <div v-for="item in models" :key="item.id" class="news-item">
            <h3>
                <router-link :to="{name: 'article', params: {id: item.id}}">
                    {{item.title}}
                </router-link>
            </h3>
            <div v-if="item.image">
                <img :src="item.image" style="max-width: 300px">
            </div>
            <p>{{item.description}}</p>
        </div>
    </section>
</template>

<script>
    import HTTP from "../components/http";

    export default {
        name: "News",
        data() {
            return {
                models: []
            };
        },
        created() {
            HTTP.get('/news')
                .then(response => (this.models = response.data));
        }
    }
</script>