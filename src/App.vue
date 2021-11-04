<template>
	<bottomMenu></bottomMenu>
</template>

<style>
@import "./assets/css/styles.css";
</style>


<script>
import bottomMenu from "./components/bottomMenu.vue";

export default {
	name: "App",
	components: {
		bottomMenu,
	},
};

// var swiper = new Swiper("#orders .orders", {
// 	spaceBetween: 15,
// 	slidesPerView: "auto",
// 	loop: true,
// 	autoplay: {
// 		delay: 2500,
// 		disableOnInteraction: true,
// 	},
// 	pagination: {
// 		el: ".swiper-pagination",
// 		clickable: true,
// 	},
// });

// var swiper = new Swiper("#restaurants .restaurants", {
// 	spaceBetween: 15,
// 	slidesPerView: "auto",
// 	loop: true,
// 	autoplay: {
// 		delay: 2500,
// 		disableOnInteraction: true,
// 	},
// 	pagination: {
// 		el: ".swiper-pagination",
// 		clickable: true,
// 	},
// });

// var swiper = new Swiper("#discover-adverts", {
// 	spaceBetween: 15,
// 	slidesPerView: "auto",
// 	loop: true,
// 	autoplay: {
// 		delay: 2500,
// 		disableOnInteraction: true,
// 	},
// 	pagination: {
// 		el: ".swiper-pagination",
// 		clickable: true,
// 	},
// });
</script>