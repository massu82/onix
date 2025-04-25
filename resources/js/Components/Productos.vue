<script setup>

import {Link} from "@inertiajs/vue3";
const categories = [
    {
        name: 'Baños',
         href: 'https://wa.me/5213222324644',
        imageSrc: '/productos/bano.webp',
    },
    {
        name: 'Arbotantes',
         href: 'https://wa.me/5213222324644',
        imageSrc: '/productos/arbotante.webp',
    },
    {
        name: 'Cilindro y cubo piso',
         href: 'https://wa.me/5213222324644',
        imageSrc: '/productos/cilindro.webp',
    },
    {
        name: 'Piedra volcánica',
        href: 'https://wa.me/5213222324644',
        imageSrc: '/productos/piedra.webp',
    },
    {
        name: 'Sale',
        href: 'https://wa.me/5213222324644',
        imageSrc: '/productos/bano.webp',
    },
]
</script>

<template>
    <!-- Category section -->
    <section aria-labelledby="category-heading" class="pt-24 sm:pt-32 xl:mx-auto xl:max-w-7xl xl:px-8"
             id="productos">
        <div class="px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:px-0">
            <h2 id="category-heading" class="text-2xl font-semibold tracking-normal text-black">Productos disponibles</h2>
            <Link href="#" class="hidden text-sm font-semibold text-khaki hover:text-khaki sm:block">
                Ver todas las categorías
                <span aria-hidden="true"> &rarr;</span>
            </Link>
        </div>

        <div class="mt-4 flow-root">
            <div class="-my-2">
                <div class="relative box-content h-80 overflow-x-auto py-2 xl:overflow-visible">
                    <div
                        class="absolute flex space-x-8 px-4 sm:px-6 lg:px-8 xl:relative xl:grid xl:grid-cols-5 xl:gap-x-8 xl:space-x-0 xl:px-0">
                        <a v-for="category in categories" :key="category.name" :href="category.href" target="_blank"
                              class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                  <span aria-hidden="true" class="absolute inset-0">
                    <img :src="category.imageSrc" alt="La Casa del Onix" class="size-full object-cover"/>
                  </span>
                            <span aria-hidden="true"
                                  class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"/>
                            <span class="relative mt-auto text-center text-xl font-semibold text-white">{{
                                    category.name
                                }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 px-4 sm:hidden">
            <Link href="#" class="block text-sm font-semibold text-khaki hover:text-khaki">
                Ver todos los productos
                <span aria-hidden="true"> &rarr;</span>
            </Link>
        </div>
    </section>
</template>
