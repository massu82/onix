<script setup>
import MasterLayout from "@/Layouts/MasterLayout.vue";
import Categorias from "@/Components/Categorias.vue";
import Productos from "@/Components/Productos.vue";
import Cta from "@/Components/Cta.vue";

</script>
<template>
    <MasterLayout
        title="Inicio"
        description="Hola Carola"
        titulo="La Casa del Onix"
        subtitle="Transformamos las piedras mas rústicas de ónix y mármol que la naturaleza ha creado en una hermosa obra de arte."
        imageUrl="/bg/bg-1.webp"
    >
        <Categorias/>
        <Productos/>
        <Cta titulo="Dale a tu hogar la elegancia que merece"
             mensaje="Sumérgete en la majestuosidad del ónix, una piedra única que ilumina, decora y transforma. Desde lámparas que desprenden una luz hipnótica hasta lavabos que combinan arte y funcionalidad, cada pieza es una expresión de lujo y exclusividad. Eleva tus espacios con la elegancia atemporal del ónix.

"/>

    </MasterLayout>


</template>
