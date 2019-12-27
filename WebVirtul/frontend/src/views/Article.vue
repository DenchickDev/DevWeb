<template>
    <article class="article">
        <h1>{{model.title}}</h1>
        <div v-html="model.text"></div>
    </article>
</template>

<script>
    import HTTP from "../components/http";

    export default {
        name: "Article",
        data() {
            return {
                model: {
                    title: 'Title',
                    text: 'Text ...'
                }
            };
        },
        created() {
            const id = this.$route.params.id;
            HTTP.get('/news/' + id)
                .then(response => (this.model = response.data));
        }
    }
</script>
