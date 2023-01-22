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
      <div class="relative inline-block text-center" style="font-family:'Montserrat;">
        <img class="w-screen rounded-xl" src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/hc_1440x810/public/media/image/2017/04/marvel-future-fight_9.jpg?itok=AvLMbUwV">
        <div class=" absolute top-1/2 bg-gray-700 bg-opacity-70">
          <h1 class="top-1/6 pt-8 text-left ml-6 font-extrabold text-4xl text-white">Marvel Future Fight</h1>
          <p class="text-white text-left ml-6 mt-4 font-semibold">Marvel Future Fight es un videojuego móvil con temática de superhéroes desarrollado por Netmarble Monster y publicado por Netmarble Games, y está afiliado directamente con Marvel Entertainment bajo Disney, disponible con muchos uniformes de superhéroes y supervillanos con sus detalles</p>
          <div class="w-full h-48 bg-gray-700 p-3 opacity-10"></div>
        </div>
      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="relative inline-block text-center" style="font-family:'Montserrat;">
        <img class="w-screen rounded-xl" src="https://i.ytimg.com/vi/-LTuziS6hiQ/maxresdefault.jpg">
        <div class=" absolute top-1/2 bg-gray-700 bg-opacity-70">
          <h1 class="top-1/6 pt-8 text-left ml-6 font-extrabold text-4xl text-white">The Seven Deadly Sins: Grand Cross</h1>
          <p class="text-white text-left ml-6 mt-4 font-semibold">The Seven Deadly Sins: Grand Cross es un excelente juego de rol en el que viviremos la historia original del popular manga creado por Nakaba Suzuki. Un RPG de cartas que cuenta con un apartado visual fantástico que nos meterá de lleno en el mundo de The Seven Deadly Sins (Nanatsu no Taizai).</p>
          <div class="w-full h-48 bg-gray-700 p-3 opacity-10"></div>
        </div>
      </div>
    </swiper-slide>
  </swiper>
</template>