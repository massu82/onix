<script setup>
import {Head} from '@inertiajs/vue3';
import HeaderComponent from '../Components/HeaderComponent.vue';
import FooterComponent from '../Components/FooterComponent.vue';
import Whatsapp from "@/Components/Whatsapp.vue";

defineProps({
    title: {
        type: String,
        default: 'Inicio',
    },
    titulo: {
        type: String,
        default: 'Inicio',
    },
    description: {
        type: String,
        default: 'Hola A todos',
    },
    subtitle: {
        type: String,
        default: 'Transformamos las piedras mas rústicas de ónix y mármol que la naturaleza ha creado en una hermosa obra de arte.',
    },
    imageUrl: {
        type: String,
        default: 'https://www.onix.com.mx/wp-content/uploads/2021/09/onix-logo.png',
    },
    headerClass: {
        type: String,
        default: 'relative mx-auto flex max-w-3xl flex-col items-center px-6 py-32 text-center sm:py-64 lg:px-0',
    }
});

</script>
<template>
    <Head :title="title" :description="description">
        <slot name="head-metadata"/>
    </Head>

    <HeaderComponent :titulo :subtitle :imageUrl :headerClass/>
    <main>
        <slot/>
    </main>
    <FooterComponent/>
    <Whatsapp phone="5213222324644" message="¡Hola! Quisiera más información sobre sus servicios."/>
</template>
