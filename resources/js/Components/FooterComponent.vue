<script setup>

import {Facebook, Instagram} from "lucide-vue-next";
import {BuildingStorefrontIcon, EnvelopeIcon, PhoneIcon} from "@heroicons/vue/24/outline/index.js";
import {ref} from "vue";
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    nombre: '',
    apellido: '',
    correo: '',
    telefono: '',
    mensaje: '',

});
const successMessage = ref('');

const submitForm = () => {
    form.post('/contact', {
        onSuccess: () => {
            successMessage.value = '¡Formulario enviado con éxito!';
            form.reset();
        }
    });
};
</script>
<template>
    <div class="relative isolate bg-white">
        <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
            <div class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-48">
                <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                    <div
                        class="absolute inset-y-0 left-0 -z-10 w-full overflow-hidden bg-gray-100 ring-1 ring-gray-900/10 lg:w-1/2">
                        <svg
                            class="absolute inset-0 size-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                            aria-hidden="true">
                            <defs>
                                <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200"
                                         x="100%" y="-1" patternUnits="userSpaceOnUse">
                                    <path d="M130 200V.5M.5 .5H200" fill="none"/>
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" stroke-width="0" fill="white"/>
                            <svg x="100%" y="-1" class="overflow-visible fill-gray-50">
                                <path d="M-470.5 0h201v201h-201Z" stroke-width="0"/>
                            </svg>
                            <rect width="100%" height="100%" stroke-width="0"
                                  fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)"/>
                        </svg>
                    </div>
                    <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                        Ponte en contacto</h2>
                    <p class="mt-6 text-lg/8 text-gray-600 hidden sm:block">Estamos aquí para ayudarte. Si tienes dudas,
                        consultas o buscas una pieza única de ónix, contáctanos y hagamos realidad tu visión. Tu
                        espacio merece lo mejor.</p>
                    <dl class="mt-10 space-y-4 text-base/7 text-gray-600">
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Dirección</span>
                                <BuildingStorefrontIcon class="h-7 w-6 text-gray-400" aria-hidden="true"/>
                            </dt>
                            <dd>Blvd. Francisco Medina Ascencio #9500 int-132, <br/>Las juntas, Puerto Vallarta,
                                Jalisco CP 48291
                            </dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Teléfono</span>
                                <PhoneIcon class="h-7 w-6 text-gray-400" aria-hidden="true"/>
                            </dt>
                            <dd><a class="hover:text-gray-900" href="tel:+52 (322) 290 2261">+52 (322) 290
                                2261</a></dd>
                            <dd><a class="hover:text-gray-900" href="tel:+52 (322) 232 4644">

                                <b>Whats:</b>+52 (322) 232 4644</a></dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Email</span>
                                <EnvelopeIcon class="h-7 w-6 text-gray-400" aria-hidden="true"/>
                            </dt>
                            <dd><a class="hover:text-gray-900"
                                   href="mailto:ventas@lacasadelonix.com">ventas@lacasadelonix.com</a></dd>
                        </div>
                        <hr>
                        <div class="flex space-x-4">
                            <a href="https://facebook.com/lacasadelonix" target="_blank" rel="noopener noreferrer">
                                <Facebook class="w-6 h-6 text-blue-600 hover:text-blue-800"/>
                            </a>
                            <a href="https://instagram.com/lacasadelonix" target="_blank" rel="noopener noreferrer">
                                <Instagram class="w-6 h-6 text-pink-500 hover:text-pink-700"/>
                            </a>
                        </div>
                    </dl>
                </div>
            </div>
            <form @submit.prevent="submitForm" class="px-6 pb-24 pt-20 sm:pb-32 lg:px-8 lg:py-48" id="contacto">
                <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div>
                            <label for="first-name"
                                   class="block text-sm/6 font-semibold text-gray-900">Nombre</label>
                            <div class="mt-2.5">
                                <input v-model="form.nombre" type="text" name="first-name" id="first-name"
                                       autocomplete="given-name"
                                       class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-khaki"/>
                            </div>
                        </div>
                        <div>
                            <label for="last-name"
                                   class="block text-sm/6 font-semibold text-gray-900">Apellido</label>
                            <div class="mt-2.5">
                                <input v-model="form.apellido" type="text" name="last-name" id="last-name"
                                       autocomplete="family-name"
                                       class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-khaki"/>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
                            <div class="mt-2.5">
                                <input type="email" v-model="form.correo" name="email" id="email" autocomplete="email"
                                       class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-khaki"/>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="phone-number"
                                   class="block text-sm/6 font-semibold text-gray-900">Teléfono</label>
                            <div class="mt-2.5">
                                <input type="tel" v-model="form.telefono" name="phone-number" id="phone-number"
                                       autocomplete="tel"
                                       class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-khaki"/>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message"
                                   class="block text-sm/6 font-semibold text-gray-900">Mensaje</label>
                            <div class="mt-2.5">
                                        <textarea v-model="form.mensaje" name="message" id="message" rows="4"
                                                  class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-khaki"/>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-end">
                        <button type="submit"
                                class="rounded-md bg-khaki px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-khaki">
                            Enviar mensaje
                        </button>
                    </div>
                </div>
                <p v-if="successMessage">{{ successMessage }}</p>
            </form>
        </div>
    </div>
</template>
