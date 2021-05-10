<template>
    <section class="banner-wrap three-column-banner">
        <div class="container">
            <div class="row">
                <carousel>
                    <a v-for="(slide) in data.slides" :href="slide.call_to_action_url">
                        <img :src=slide.file.path >
                    </a>
                </carousel>
            </div>
        </div>
    </section>
</template>

<script>

import carousel from 'vue-owl-carousel';
    export default {
        props: ['data'],
        components: { carousel },

    };
</script>
