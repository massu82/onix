<script setup>
import {Facebook, Instagram} from "lucide-vue-next";
import {Bars3Icon, XMarkIcon} from "@heroicons/vue/24/outline/index.js";
import {ChevronDownIcon} from "@heroicons/vue/20/solid/index.js";
import {
    Dialog,
    DialogPanel,
    Popover, PopoverButton,
    PopoverGroup,
    PopoverPanel, Tab, TabGroup,
    TabList,
    TabPanel,
    TabPanels,
    TransitionChild, TransitionRoot
} from "@headlessui/vue";
import {ref} from "vue";
import {Link} from "@inertiajs/vue3";

const currencies = ['MXN', 'USD', 'EUR']
const navigation = {
    categories: [
        {
            name: 'Categorias',
            featured: [
                {
                    name: 'Iluminación',
                    href: '/iluminacion',
                    imageSrc: '/categorias/lamparas.png',
                    imageAlt: 'Models sitting back to back, wearing Basic Tee in black and bone.',
                },
                {
                    name: 'Decoración',
                    href: '/decoracion',
                    imageSrc: '/categorias/decoracion.png',
                    imageAlt: 'Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees.',
                },
                {
                    name: 'Baños',
                    href: '/banos',
                    imageSrc: '/categorias/lavabos.png',
                    imageAlt: 'Model wearing minimalist watch with black wristband and white watch face.',
                },
            ],
        },
    ],
    pages: [
        {name: 'Productos', href: '#productos'},
        {name: 'Contacto', href: '#contacto'},
    ],
}
defineProps({
    titulo: String,
    description: String,
    subtitle: String,
    imageUrl: String,
    headerClass: {
        type: String,
        default: 'relative mx-auto flex max-w-3xl flex-col items-center px-6 py-32 text-center sm:py-64 lg:px-0'
    }
})
const mobileMenuOpen = ref(false)
</script>
<template>
    <!-- Mobile menu -->
    <TransitionRoot as="template" :show="mobileMenuOpen">
        <Dialog class="relative z-40 lg:hidden" @close="mobileMenuOpen = false">
            <TransitionChild as="template" enter="transition-opacity ease-linear duration-300"
                             enter-from="opacity-0" enter-to="opacity-100"
                             leave="transition-opacity ease-linear duration-300" leave-from="opacity-100"
                             leave-to="opacity-0">
                <div class="fixed inset-0 bg-black/25"/>
            </TransitionChild>

            <div class="fixed inset-0 z-40 flex">
                <TransitionChild as="template" enter="transition ease-in-out duration-300 transform"
                                 enter-from="-translate-x-full" enter-to="translate-x-0"
                                 leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0"
                                 leave-to="-translate-x-full">
                    <DialogPanel
                        class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
                        <div class="flex px-4 pb-2 pt-5">
                            <button type="button"
                                    class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400"
                                    @click="mobileMenuOpen = false">
                                <span class="sr-only">Close menu</span>
                                <XMarkIcon class="size-6" aria-hidden="true"/>
                            </button>
                        </div>

                        <!-- Links -->
                        <TabGroup as="div" class="mt-2">
                            <div class="border-b border-gray-200">
                                <TabList class="-mb-px flex space-x-8 px-4">
                                    <Tab as="template" v-for="category in navigation.categories"
                                         :key="category.name" v-slot="{ selected }">
                                        <button
                                            :class="[selected ? 'border-khaki text-khaki' : 'border-transparent text-black', 'flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium']">
                                            {{ category.name }}
                                        </button>
                                    </Tab>
                                </TabList>
                            </div>
                            <TabPanels as="template">
                                <TabPanel v-for="category in navigation.categories" :key="category.name"
                                          class="space-y-12 px-4 py-6">
                                    <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                                        <div v-for="item in category.featured" :key="item.name"
                                             class="group relative">
                                            <img :src="item.imageSrc" :alt="item.imageAlt"
                                                 class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75"/>
                                            <Link :href="item.href"
                                               class="mt-6 block text-sm font-medium text-black">
                                                <span class="absolute inset-0 z-10" aria-hidden="true"/>
                                                {{ item.name }}
                                            </Link>
                                            <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Cotizar</p>
                                        </div>
                                    </div>
                                </TabPanel>
                            </TabPanels>
                        </TabGroup>

                        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                            <div v-for="page in navigation.pages" :key="page.name" class="flow-root">
                                <Link :href="page.href" class="-m-2 block p-2 font-medium text-black">{{
                                        page.name
                                    }}</Link>
                            </div>
                        </div>

                        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                            <div class="flow-root">
                                <Link href="#" class="-m-2 block p-2 font-medium text-black">Crear una cuenta</Link>
                            </div>
                        </div>

                        <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                            <!-- Currency selector -->
                            <form>
                                <div class="-ml-2 inline-grid grid-cols-1">
                                    <select id="mobile-currency" name="currency" aria-label="Currency"
                                            class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-0.5 pl-2 pr-7 text-base font-medium text-gray-700 focus:outline focus:outline-2 group-hover:text-gray-800 sm:text-sm/6">
                                        <option v-for="currency in currencies" :key="currency">{{
                                                currency
                                            }}
                                        </option>
                                    </select>
                                    <ChevronDownIcon
                                        class="pointer-events-none col-start-1 row-start-1 mr-1 size-5 self-center justify-self-end fill-gray-500"
                                        aria-hidden="true"/>
                                </div>
                            </form>
                        </div>
                    </DialogPanel>
                </TransitionChild>
            </div>
        </Dialog>
    </TransitionRoot>

    <!-- Hero section -->
    <div class="relative bg-black">
        <!-- Decorative image and overlay -->
        <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
            <img v-if="imageUrl" :src="imageUrl"
                 :alt="titulo" class="size-full object-cover"/>
        </div>
        <div aria-hidden="true" class="absolute inset-0 bg-black opacity-50"/>

        <!-- Navigation -->
        <header class="relative z-10">
            <nav aria-label="Top">
                <!-- Top navigation -->
                <div class="bg-black">
                    <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                        <!-- Currency selector -->
                        <form>
                            <div class="-ml-2 inline-grid grid-cols-1">
                                <select id="desktop-currency" name="currency" aria-label="Currency"
                                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-black py-0.5 pl-2 pr-7 text-left text-base font-medium text-white focus:outline focus:outline-2 focus:-outline-offset-1 focus:outline-white sm:text-sm/6">
                                    <option v-for="currency in currencies" :key="currency">{{ currency }}</option>
                                </select>

                            </div>
                        </form>

                        <div class="flex items-center space-x-6">
                            <Link href="/login" class="text-sm font-medium text-white hover:text-gray-100">Entrar</Link>
                            <Link href="/register"
                               class="text-sm font-medium text-white hover:text-gray-100">Registrarse</Link>
                        </div>
                    </div>
                </div>

                <!-- Secondary navigation -->
                <div class="bg-white/10 backdrop-blur-md backdrop-filter">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div>
                            <div class="flex h-16 items-center justify-between">
                                <!-- Logo (lg+) -->
                                <div class="hidden lg:flex lg:flex-1 lg:items-center">
                                    <Link href="/">
                                        <span class="sr-only">La Casa del Onix</span>
                                        <img class="h-12 w-auto"
                                             src="/logos/logo-white.png"
                                             alt="La Casa del Onix"/>
                                    </Link>
                                </div>

                                <div class="hidden h-full lg:flex">
                                    <!-- Flyout menus -->
                                    <PopoverGroup class="inset-x-0 bottom-0 px-4">
                                        <div class="flex h-full justify-center space-x-8">
                                            <Popover v-for="category in navigation.categories" :key="category.name"
                                                     class="flex" v-slot="{ open }">
                                                <div class="relative flex">
                                                    <PopoverButton
                                                        class="relative z-10 flex items-center justify-center text-sm font-medium text-white transition-colors duration-200 ease-out">
                                                        {{ category.name }}
                                                        <span
                                                            :class="[open ? 'bg-white' : '', 'absolute inset-x-0 -bottom-px h-0.5 transition duration-200 ease-out']"
                                                            aria-hidden="true"/>
                                                    </PopoverButton>
                                                </div>

                                                <transition enter-active-class="transition ease-out duration-200"
                                                            enter-from-class="opacity-0"
                                                            enter-to-class="opacity-100"
                                                            leave-active-class="transition ease-in duration-150"
                                                            leave-from-class="opacity-100"
                                                            leave-to-class="opacity-0">
                                                    <PopoverPanel
                                                        class="absolute inset-x-0 top-full text-sm text-gray-500">
                                                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                        <div class="absolute inset-0 top-1/2 bg-white shadow"
                                                             aria-hidden="true"/>

                                                        <div class="relative bg-white">
                                                            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                                                <div
                                                                    class="grid grid-cols-4 gap-x-8 gap-y-10 py-16">
                                                                    <div v-for="item in category.featured"
                                                                         :key="item.name" class="group relative">
                                                                        <img :src="item.imageSrc"
                                                                             :alt="item.imageAlt"
                                                                             class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75"/>
                                                                        <Link :href="item.href"
                                                                           class="mt-4 block font-medium text-black">
                                                                                <span class="absolute inset-0 z-10"
                                                                                      aria-hidden="true"/>
                                                                            {{ item.name }}
                                                                        </Link>
                                                                        <p aria-hidden="true" class="mt-1">Ver más</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </PopoverPanel>
                                                </transition>
                                            </Popover>

                                            <Link v-for="page in navigation.pages" :key="page.name" :href="page.href"
                                               class="flex items-center text-sm font-medium text-white">{{
                                                    page.name
                                                }}</Link>
                                        </div>
                                    </PopoverGroup>
                                </div>

                                <!-- Mobile menu and search (lg-) -->
                                <div class="flex flex-1 items-center lg:hidden">
                                    <button type="button" class="-ml-2 p-2 text-white"
                                            @click="mobileMenuOpen = true">
                                        <span class="sr-only">Open menu</span>
                                        <Bars3Icon class="size-6" aria-hidden="true"/>
                                    </button>
                                </div>

                                <!-- Logo (lg-) -->
                                <Link href="/" class="lg:hidden">
                                    <span class="sr-only">La Casa del Onix</span>
                                    <img src="/logos/logo-white.png"
                                         alt="La Casa del Onix" class="h-8 w-auto"/>
                                </Link>

                                <div class="flex flex-1 items-center justify-end space-x-4">

                                    <div class="flex items-center lg:ml-8 gap-2">
                                        <a href="https://facebook.com/lacasadelonix" target="_blank"
                                           rel="noopener noreferrer">
                                            <Facebook class="w-6 h-6 text-white hover:text-blue-800"/>
                                        </a>
                                        <a href="https://instagram.com/lacasadelonix" target="_blank"
                                           rel="noopener noreferrer">
                                            <Instagram class="w-6 h-6 text-white hover:text-pink-700"/>
                                        </a>


                                        <!-- Cart
                                        <div class="ml-4 flow-root lg:ml-8">
                                            <a href="#" class="group -m-2 flex items-center p-2">
                                                <ShoppingBagIcon class="size-6 shrink-0 text-white"
                                                                 aria-hidden="true"/>
                                                <span class="ml-2 text-sm font-medium text-white">0</span>
                                                <span class="sr-only">items in cart, view bag</span>
                                            </a>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div :class="headerClass">
            <h1 class="text-4xl font-alt font-semibold tracking-normal text-khaki lg:text-5xl">{{ titulo }}</h1>
            <p class="mt-4 text-xl text-white">{{ subtitle }}</p>
            <Link href="#categorias"
               class="mt-8 inline-block rounded-md border border-transparent bg-khaki px-8 py-3 text-base font-medium text-white hover:bg-black">Ver
                Catálogo</Link>
        </div>
    </div>
</template>
