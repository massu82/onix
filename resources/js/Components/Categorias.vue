<script setup>
import {Link} from "@inertiajs/vue3";
const collections = [
    {
        name: 'Iluminación',
        href: '/iluminacion',
        imageSrc: '/categorias/lamparas.webp',
        imageAlt: 'iluminacion Onix',
        description: ' Lámparas y accesorios de ónix que crean ambientes cálidos y elegantes con su brillo natural.',
    },
    {
        name: 'Decoración',
        href: '/decoracion',
        imageSrc: '/categorias/decoracion.webp',
        imageAlt: 'Decoración Onix',
        description: 'Piezas únicas de ónix que realzan cualquier espacio con su belleza y sofisticación.',
    },
    {
        name: 'Baños',
        href: '/banos',
        imageSrc: '/categorias/lavabos.webp',
        imageAlt: 'Baños Onix',
        description: 'Lavabos y detalles en ónix que combinan lujo y estilo para transformar tu baño.',
    },
]
</script>
<template>
    <!-- Collection section -->
    <section aria-labelledby="collection-heading" id="categorias"
             class="mx-auto max-w-xl px-4 pt-24 sm:px-6 sm:pt-32 lg:max-w-7xl lg:px-8">
        <h2 id="collection-heading" class="text-2xl font-semibold tracking-normal text-black">Ver
            categorías</h2>
        <p class="mt-4 text-base text-gray-500">Descubre la elegancia del ónix en cada detalle. Desde
            iluminación cálida y sofisticada hasta piezas decorativas y lavabos exclusivos, transforma tus
            espacios con la belleza natural de esta piedra única.</p>

        <div class="mt-10 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
            <Link v-for="collection in collections" :key="collection.name" :href="collection.href"
                  class="group block">
                <img :src="collection.imageSrc" :alt="collection.imageAlt"
                     class="aspect-[3/2] w-full rounded-lg object-cover group-hover:opacity-75 lg:aspect-[5/6]"/>
                <h3 class="mt-4 text-base font-semibold text-black">{{ collection.name }}</h3>
                <p class="mt-2 text-sm text-gray-500">{{ collection.description }}</p>
            </Link>
        </div>
    </section>

</template>
