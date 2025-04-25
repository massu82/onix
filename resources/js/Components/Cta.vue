<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    titulo: {
        type: String,
        default: 'Dale a tu hogar la elegancia que merece',
    },
    mensaje: {
        type: String,
        default: 'Sumérgete en la majestuosidad del ónix, una piedra única que ilumina, decora y transforma. Desde lámparas que desprenden una luz hipnótica hasta lavabos que combinan arte y funcionalidad, cada pieza es una expresión de lujo y exclusividad. Eleva tus espacios con la elegancia atemporal del ónix.'
    }

})
</script>
<template>
    <!-- Featured section -->
    <section aria-labelledby="comfort-heading" class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
        <div class="relative overflow-hidden rounded-lg">
            <div class="absolute inset-0">
                <img
                    src="/bg/bg-2.webp"
                    alt="La Casa del Onix" class="size-full object-cover"/>
                <div class="absolute inset-0 bg-black bg-opacity-50 opacity-55"></div>
            </div>
            <div class="relative bg-black/75 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                    <h2 id="comfort-heading"
                        class="text-3xl font-semibold tracking-normal text-khaki sm:text-4xl">
                        {{titulo}}</h2>
                    <p class="mt-3 text-xl text-white hidden sm:block">{{mensaje}}</p>
                    <a href="https://wa.me/5213222324644" target="_blank"
                          class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-black hover:bg-gray-100 sm:w-auto">
                        Saber
                        más
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>
