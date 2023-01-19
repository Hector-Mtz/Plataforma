<script>
import { Navigation, Pagination, Scrollbar, A11y, Autoplay, EffectFade  } from 'swiper'; 
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import 'swiper/css/autoplay';
import 'swiper/css/effect-fade';

  export default {
    components: {
      Swiper,
      SwiperSlide,
    },
    setup() {
      const onSwiper = (swiper) => {
        //console.log(swiper);
      };
      const onSlideChange = () => {
       // console.log('slide change');
      };
      return {
        onSwiper,
        onSlideChange,
        modules: [Navigation, Pagination, A11y, Autoplay, EffectFade],
        EffectFade
      };
    },
  };
</script>
<template>
  <swiper
   :modules="modules"
    effect="fade"
    :slides-per-view="1"
    :space-between="50"
     navigation
	 :autoplay='{
               "delay": 3000,
              "disableOnInteraction": false
     }'
    :pagination="{ clickable: true }"
    @swiper="onSwiper"
    @slideChange="onSlideChange"
  >
    <swiper-slide>
        <img class="w-screen" src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/hc_1440x810/public/media/image/2017/04/marvel-future-fight_9.jpg?itok=AvLMbUwV">
    </swiper-slide>
    <swiper-slide>
        <img class="w-screen" src="https://i.ytimg.com/vi/-LTuziS6hiQ/maxresdefault.jpg">
    </swiper-slide>
  </swiper>
</template>