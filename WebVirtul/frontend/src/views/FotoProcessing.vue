<template>
    <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
        <h1 class="bd-title" id="content">Обработка фотографий</h1>
        <span>Не всё так прекрасно на наших лицах, фигурах, как нам того хочется. Иногда и света бывает недостаточно,</span>
        <span>чтобы подчеркнуть выгодные для нас детали. Это нормально! Это жизнь. Но как же иногда до боли хочется поправить вот тут контур,</span>
        <span>убрать лишний вес, заставить сиять кожу лица… Это мечты. Мечты?</span>
        <p class="bd-lead">Неправда! В цифровом мире возможно Всё! Фото-обработка, услуги фотошопа или обработка фото нашими дизайнерами творит настоящую Сказку — это коррекция или корректирование.</p>
        <p class="bd-lead">Пришлите ваши снимки в наш магазин возможностей, и мы сотворим из них эту Сказку-мечту!</p>
        <p class="bd-lead">Обработка фото — воплощение в жизнь ваших грёз.</p>

        <h1 class="bd-title" id="content2">Примеры</h1>
        <div>
            <img src="../../public/css/image/Fotoprocessin1.jpg" alt="Responsive image" style="width: 800px">
        </div>
        <div>
            <img src="../../public/css/image/Fotoprocessin2.jpg" alt="Responsive image" style="width: 800px">
        </div>
        <br>
        <router-link to="/buy">
            <p><a class="btn btn-lg btn-primary" role="button" style="color: white">Заказать</a></p>
        </router-link>
    </main>
</template>

<script>
    export default {
        name: "FotoProcessing"
    }
</script>

<style scoped>

</style>