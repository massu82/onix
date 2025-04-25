<script setup>
import MasterLayout from "@/Layouts/MasterLayout.vue";
import Categorias from "@/Components/Categorias.vue";
import Productos from "@/Components/Productos.vue";
import Cta from "@/Components/Cta.vue";

</script>
<template>
    <MasterLayout
        title="Iluminación"
        description="Lámparas y accesorios de ónix que crean ambientes cálidos y elegantes con su brillo natural."
        titulo="Iluminación"
        subtitle="Lámparas y accesorios de ónix que crean ambientes cálidos y elegantes con su brillo natural."
        imageUrl="/categorias/onix-light.webp"
        headerClass="relative mx-auto flex max-w-3xl flex-col items-center px-6 py-16 text-center sm:py-32 lg:px-0"
    >

        <Productos/>
        <Categorias/>
        <Cta titulo="Dale a tu hogar la elegancia que merece"
             mensaje="Sumérgete en la majestuosidad del ónix, una piedra única que ilumina, decora y transforma. Desde lámparas que desprenden una luz hipnótica hasta lavabos que combinan arte y funcionalidad, cada pieza es una expresión de lujo y exclusividad. Eleva tus espacios con la elegancia atemporal del ónix.

"/>

    </MasterLayout>
</template>
