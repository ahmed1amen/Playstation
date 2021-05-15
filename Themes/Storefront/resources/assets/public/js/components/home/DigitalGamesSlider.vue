<template>
    <section class="digital-games-slider-wrap">

    <div class="container">
        <splide :options="options" >
            <splide-slide v-for="(slide) in data.slides" :key="slide.file.path">
                <a :target="(slide.open_in_new_window===true) ? '_blank' : '_self'" :href="(slide.call_to_action_url != null || '') ? slide.call_to_action_url : 'javascript:'">
                    <img class="game-slider-img img-fluid" :src="slide.file.path"  alt="slide.alt" >
                </a>
            </splide-slide>

        </splide>
    </div>
    </section>

</template>
<script>
import { Splide, SplideSlide } from '@splidejs/vue-splide';
import '@splidejs/splide/dist/css/themes/splide-skyblue.min.css';


export default {

    props: ['data'],
    components: {
        Splide,
        SplideSlide,
    },
    data() {
        return {
            options: {
                perPage: 4,
                perMove: 2,
                rewind : true,
                autoHeight : true,
                autoWidth :true,
            },
        };
    },
};
</script>
