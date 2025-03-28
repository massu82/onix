<template>
    <Head title="Inicio"/>
    <div class="bg-white">
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
                                                <a :href="item.href"
                                                   class="mt-6 block text-sm font-medium text-black">
                                                    <span class="absolute inset-0 z-10" aria-hidden="true"/>
                                                    {{ item.name }}
                                                </a>
                                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Cotizar</p>
                                            </div>
                                        </div>
                                    </TabPanel>
                                </TabPanels>
                            </TabGroup>

                            <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                                <div v-for="page in navigation.pages" :key="page.name" class="flow-root">
                                    <a :href="page.href" class="-m-2 block p-2 font-medium text-black">{{
                                            page.name
                                        }}</a>
                                </div>
                            </div>

                            <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                                <div class="flow-root">
                                    <a href="#" class="-m-2 block p-2 font-medium text-black">Create an account</a>
                                    <a href="#" class="-m-2 block p-2 font-medium text-black">Create an account</a>
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
                <img src="/bg/bg-1.png"
                     alt="La Casa del Onix" class="size-full object-cover"/>
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
                                    <ChevronDownIcon
                                        class="pointer-events-none col-start-1 row-start-1 mr-1 size-5 self-center justify-self-end fill-gray-300"
                                        aria-hidden="true"/>
                                </div>
                            </form>

                            <div class="flex items-center space-x-6">
                                <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
                                <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an
                                    account</a>
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
                                        <a href="#">
                                            <span class="sr-only">La Casa del Onix</span>
                                            <img class="h-12 w-auto"
                                                 src="/logos/logo-white.webp"
                                                 alt="La Casa del Onix"/>
                                        </a>
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
                                                                            <a :href="item.href"
                                                                               class="mt-4 block font-medium text-black">
                                                                                <span class="absolute inset-0 z-10"
                                                                                      aria-hidden="true"/>
                                                                                {{ item.name }}
                                                                            </a>
                                                                            <p aria-hidden="true" class="mt-1">Shop
                                                                                now</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </PopoverPanel>
                                                    </transition>
                                                </Popover>

                                                <a v-for="page in navigation.pages" :key="page.name" :href="page.href"
                                                   class="flex items-center text-sm font-medium text-white">{{
                                                        page.name
                                                    }}</a>
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

                                        <!-- Search -->
                                        <a href="#" class="ml-2 p-2 text-white">
                                            <span class="sr-only">Buscar</span>
                                            <MagnifyingGlassIcon class="size-6" aria-hidden="true"/>
                                        </a>
                                    </div>

                                    <!-- Logo (lg-) -->
                                    <a href="#" class="lg:hidden">
                                        <span class="sr-only">La Casa del Onix</span>
                                        <img src="/logos/logo-white.webp"
                                             alt="La Casa del Onix" class="h-8 w-auto"/>
                                    </a>

                                    <div class="flex flex-1 items-center justify-end">
                                        <a href="#" class="hidden text-sm font-medium text-white lg:block">Buscar</a>

                                        <div class="flex items-center lg:ml-8">
                                            <!-- Help -->
                                            <a href="#" class="p-2 text-white lg:hidden">
                                                <span class="sr-only">Ayuda</span>
                                                <QuestionMarkCircleIcon class="size-6" aria-hidden="true"/>
                                            </a>
                                            <a href="#" class="hidden text-sm font-medium text-white lg:block">Ayuda</a>

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

            <div class="relative mx-auto flex max-w-3xl flex-col items-center px-6 py-32 text-center sm:py-64 lg:px-0">
                <h1 class="text-4xl font-alt font-semibold tracking-normal text-khaki lg:text-6xl">La Casa del Onix</h1>
                <p class="mt-4 text-xl text-white">Transformamos las piedras mas rústicas de ónix y mármol que la
                    naturaleza ha creado en una hermosa obra de arte.</p>
                <a href="#catalogo"
                   class="mt-8 inline-block rounded-md border border-transparent bg-khaki px-8 py-3 text-base font-medium text-white hover:bg-black">Ver
                    Catálogo</a>
            </div>
        </div>

        <main>
            <!-- Collection section -->
            <section aria-labelledby="collection-heading"
                     class="mx-auto max-w-xl px-4 pt-24 sm:px-6 sm:pt-32 lg:max-w-7xl lg:px-8">
                <h2 id="collection-heading" class="text-2xl font-semibold tracking-normal text-black">Comprar por
                    categoría</h2>
                <p class="mt-4 text-base text-gray-500">Each season, we collaborate with world-class designers to create
                    a collection inspired by the natural world.</p>

                <div class="mt-10 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
                    <a v-for="collection in collections" :key="collection.name" :href="collection.href"
                       class="group block">
                        <img :src="collection.imageSrc" :alt="collection.imageAlt"
                             class="aspect-[3/2] w-full rounded-lg object-cover group-hover:opacity-75 lg:aspect-[5/6]"/>
                        <h3 class="mt-4 text-base font-semibold text-black">{{ collection.name }}</h3>
                        <p class="mt-2 text-sm text-gray-500">{{ collection.description }}</p>
                    </a>
                </div>
            </section>
            <!-- Category section -->
            <section aria-labelledby="category-heading" class="pt-24 sm:pt-32 xl:mx-auto xl:max-w-7xl xl:px-8">
                <div class="px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:px-0">
                    <h2 id="category-heading" class="text-2xl font-semibold tracking-normal text-black">Comprar por
                        productos</h2>
                    <a href="#" class="hidden text-sm font-semibold text-khaki hover:text-khaki sm:block">
                        Ver todas las categorías
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>

                <div class="mt-4 flow-root">
                    <div class="-my-2">
                        <div class="relative box-content h-80 overflow-x-auto py-2 xl:overflow-visible">
                            <div
                                class="absolute flex space-x-8 px-4 sm:px-6 lg:px-8 xl:relative xl:grid xl:grid-cols-5 xl:gap-x-8 xl:space-x-0 xl:px-0">
                                <a v-for="category in categories" :key="category.name" :href="category.href"
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
                    <a href="#" class="block text-sm font-semibold text-khaki hover:text-khaki">
                        Ver todos los productos
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </section>

            <!-- Featured section -->
            <section aria-labelledby="comfort-heading" class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
                <div class="relative overflow-hidden rounded-lg">
                    <div class="absolute inset-0">
                        <img
                            src="/bg/bg-2.png"
                            alt="La Casa del Onix" class="size-full object-cover"/>
                    </div>
                    <div class="relative bg-black/75 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                        <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                            <h2 id="comfort-heading"
                                class="text-3xl font-semibold tracking-normal text-khaki sm:text-4xl">
                                Lavabos y recubrimientos</h2>
                            <p class="mt-3 text-xl text-white">Endless tasks, limited hours, a single piece of paper.
                                Not really a haiku, but we're doing our best here. No kanban boards, burndown charts, or
                                tangled flowcharts with our Focus system. Just the undeniable urge to fill empty
                                circles.</p>
                            <a href="#"
                               class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-black hover:bg-gray-100 sm:w-auto">Saber
                                más</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer aria-labelledby="footer-heading" class="bg-black">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                        <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                            <div>
                                <h3 class="text-sm font-medium text-white">Shop</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li v-for="item in footerNavigation.shop" :key="item.name" class="text-sm">
                                        <a :href="item.href" class="text-gray-300 hover:text-white">{{ item.name }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-white">Company</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li v-for="item in footerNavigation.company" :key="item.name" class="text-sm">
                                        <a :href="item.href" class="text-gray-300 hover:text-white">{{ item.name }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                            <div>
                                <h3 class="text-sm font-medium text-white">Account</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li v-for="item in footerNavigation.account" :key="item.name" class="text-sm">
                                        <a :href="item.href" class="text-gray-300 hover:text-white">{{ item.name }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-white">Connect</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li v-for="item in footerNavigation.connect" :key="item.name" class="text-sm">
                                        <a :href="item.href" class="text-gray-300 hover:text-white">{{ item.name }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 md:mt-16 xl:mt-0">
                        <h3 class="text-sm font-medium text-white">Sign up for our newsletter</h3>
                        <p class="mt-6 text-sm text-gray-300">The latest deals and savings, sent to your inbox
                            weekly.</p>
                        <form class="mt-2 flex sm:max-w-md">
                            <input id="email-address" type="text" autocomplete="email" required=""
                                   aria-label="Email address"
                                   class="block w-full rounded-md bg-white px-4 py-2 text-base text-black outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-white"/>
                            <div class="ml-4 shrink-0">
                                <button type="submit"
                                        class="flex w-full items-center justify-center rounded-md border border-transparent bg-khaki px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-black focus:outline-none focus:ring-2 focus:ring-khaki focus:ring-offset-2 focus:ring-offset-black">
                                    Sign up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="border-t border-gray-800 py-10">
                    <p class="text-sm text-gray-400">Copyright &copy; 2025 La Casa del Onix</p>
                </div>
            </div>
        </footer>
    </div>
</template>

<script setup>
import {Head} from "@inertiajs/vue3";
import {ref} from 'vue'
import {
    Dialog,
    DialogPanel,
    Popover,
    PopoverButton,
    PopoverGroup,
    PopoverPanel,
    Tab,
    TabGroup,
    TabList,
    TabPanel,
    TabPanels,
    TransitionChild,
    TransitionRoot,
} from '@headlessui/vue'
import {
    Bars3Icon,
    MagnifyingGlassIcon,
    QuestionMarkCircleIcon,
    ShoppingBagIcon,
    XMarkIcon,
} from '@heroicons/vue/24/outline'
import {ChevronDownIcon} from '@heroicons/vue/20/solid'

const currencies = ['MXN', 'USD', 'EUR']
const navigation = {
    categories: [
        {
            name: 'Productos',
            featured: [
                {
                    name: 'New Arrivals',
                    href: '#',
                    imageSrc: 'https://tailwindcss.com/plus-assets/img/ecommerce-images/mega-menu-category-01.jpg',
                    imageAlt: 'Models sitting back to back, wearing Basic Tee in black and bone.',
                },
                {
                    name: 'Basic Tees',
                    href: '#',
                    imageSrc: 'https://tailwindcss.com/plus-assets/img/ecommerce-images/mega-menu-category-02.jpg',
                    imageAlt: 'Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees.',
                },
                {
                    name: 'Accessories',
                    href: '#',
                    imageSrc: 'https://tailwindcss.com/plus-assets/img/ecommerce-images/mega-menu-category-03.jpg',
                    imageAlt: 'Model wearing minimalist watch with black wristband and white watch face.',
                },
                {
                    name: 'Carry',
                    href: '#',
                    imageSrc: 'https://tailwindcss.com/plus-assets/img/ecommerce-images/mega-menu-category-04.jpg',
                    imageAlt: 'Model opening tan leather long wallet with credit card pockets and cash pouch.',
                },
            ],
        },
        {
            name: 'Nosotros',
            featured: [
                {
                    name: 'New Arrivals',
                    href: '#',
                    imageSrc: 'https://tailwindcss.com/plus-assets/img/ecommerce-images/mega-menu-01-men-category-01.jpg',
                    imageAlt: 'Hats and sweaters on wood shelves next to various colors of t-shirts on hangers.',
                },
                {
                    name: 'Basic Tees',
                    href: '#',
                    imageSrc: 'https://tailwindcss.com/plus-assets/img/ecommerce-images/mega-menu-01-men-category-02.jpg',
                    imageAlt: 'Model wearing light heather gray t-shirt.',
                },
                {
                    name: 'Accessories',
                    href: '#',
                    imageSrc: 'https://tailwindcss.com/plus-assets/img/ecommerce-images/mega-menu-01-men-category-03.jpg',
                    imageAlt:
                        'Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body.',
                },
                {
                    name: 'Carry',
                    href: '#',
                    imageSrc: 'https://tailwindcss.com/plus-assets/img/ecommerce-images/mega-menu-01-men-category-04.jpg',
                    imageAlt: 'Model putting folded cash into slim card holder olive leather wallet with hand stitching.',
                },
            ],
        },
    ],
    pages: [
        {name: 'Nosotros', href: '#nosotros'},
        {name: 'Contacto', href: '#contacto'},
    ],
}
const categories = [
    {
        name: 'Baños',
        href: '#',
        imageSrc: '/productos/bano.png',
    },
    {
        name: 'Arbotantes',
        href: '#',
        imageSrc: '/productos/arbotante.png',
    },
    {
        name: 'Cilindro y cubo piso',
        href: '#',
        imageSrc: '/productos/cilindro.png',
    },
    {
        name: 'Piedra volcánica',
        href: '#',
        imageSrc: '/productos/piedra.png',
    },
    {
        name: 'Sale',
        href: '#',
        imageSrc: '/productos/bano.png',
    },
]
const collections = [
    {
        name: 'Lavabos',
        href: '#',
        imageSrc: '/categorias/lavabos.png',
        imageAlt: 'Brown leather key ring with brass metal loops and rivets on wood table.',
        description: 'Keep your phone, keys, and wallet together, so you can lose everything at once.',
    },
    {
        name: 'Lámparas',
        href: '#',
        imageSrc: '/categorias/lamparas.png',
        imageAlt: 'Natural leather mouse pad on white desk next to porcelain mug and keyboard.',
        description: 'The rest of the house will still be a mess, but your desk will look great.',
    },
    {
        name: 'Decoración',
        href: '#',
        imageSrc: '/categorias/decoracion.png',
        imageAlt: 'Person placing task list card into walnut card holder next to felt carrying case on leather desk pad.',
        description: 'Be more productive than enterprise project managers with a single piece of paper.',
    },
]
const footerNavigation = {
    shop: [
        {name: 'Bags', href: '#'},
        {name: 'Tees', href: '#'},
        {name: 'Objects', href: '#'},
        {name: 'Home Goods', href: '#'},
        {name: 'Accessories', href: '#'},
    ],
    company: [
        {name: 'Who we are', href: '#'},
        {name: 'Sustainability', href: '#'},
        {name: 'Press', href: '#'},
        {name: 'Careers', href: '#'},
        {name: 'Terms & Conditions', href: '#'},
        {name: 'Privacy', href: '#'},
    ],
    account: [
        {name: 'Manage Account', href: '#'},
        {name: 'Returns & Exchanges', href: '#'},
        {name: 'Redeem a Gift Card', href: '#'},
    ],
    connect: [
        {name: 'Contact Us', href: '#'},
        {name: 'Facebook', href: '#'},
        {name: 'Instagram', href: '#'},
        {name: 'Pinterest', href: '#'},
    ],
}

const mobileMenuOpen = ref(false)
</script>
