<template>
    <Disclosure as="nav" class="bg-black" v-slot="{ open }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 justify-between">
                <div class="flex">
                    <div class="-ml-2 mr-2 flex items-center md:hidden">
                        <!-- Mobile menu button -->
                        <DisclosureButton
                            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:graytheme hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="absolute -inset-0.5"/>
                            <span class="sr-only">Open main menu</span>
                            <Bars3Icon v-if="!open" class="block size-6" aria-hidden="true"/>
                            <XMarkIcon v-else class="block size-6" aria-hidden="true"/>
                        </DisclosureButton>
                    </div>
                    <div class="flex shrink-0 items-center">
                        <img class="h-10 w-auto"
                             src="/logos/Onix_Logo_RGB_12.png"
                             alt="La Casa del Onix"/>
                    </div>
                    <div class="hidden md:ml-6 md:flex md:items-center md:space-x-4">
                        <a v-for="item in navigation" :key="item.name" :href="item.href"
                           :class="[item.current ? 'bg-gray-900 text-white' : 'text-gray-300 hover:graytheme hover:text-white', 'rounded-md px-3 py-2 text-sm font-medium']"
                           :aria-current="item.current ? 'page' : undefined">{{ item.name }}</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="shrink-0">
                        <button type="button"
                                class="relative inline-flex items-center gap-x-1.5 rounded-md bg-khaki px-3 py-2 text-sm font-semibold text-white shadow-sm hover:graytheme focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-khaki">
                            <PlusIcon class="-ml-0.5 size-5" aria-hidden="true"/>
                            Catálogo
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <DisclosurePanel class="md:hidden">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <DisclosureButton v-for="item in navigation" :key="item.name" as="a" :href="item.href"
                                  :class="[item.current ? 'bg-gray-900 text-white' : 'text-gray-300 hover:graytheme hover:text-white', 'block rounded-md px-3 py-2 text-base font-medium']"
                                  :aria-current="item.current ? 'page' : undefined">{{ item.name }}
                </DisclosureButton>
            </div>
            <div class="border-t border-gray-700 pb-3 pt-4">
                <div class="flex items-center px-5 sm:px-6">
                    <div class="shrink-0">
                        <img class="size-10 rounded-full" :src="user.imageUrl" alt=""/>
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-white">{{ user.name }}</div>
                        <div class="text-sm font-medium text-gray-400">{{ user.email }}</div>
                    </div>
                    <button type="button"
                            class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"/>
                        <span class="sr-only">View notifications</span>
                        <BellIcon class="size-6" aria-hidden="true"/>
                    </button>
                </div>
                <div class="mt-3 space-y-1 px-2 sm:px-3">
                    <DisclosureButton v-for="item in userNavigation" :key="item.name" as="a" :href="item.href"
                                      class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:graytheme hover:text-white">
                        {{ item.name }}
                    </DisclosureButton>
                </div>
            </div>
        </DisclosurePanel>
    </Disclosure>
</template>

<script setup>
import {Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems} from '@headlessui/vue'
import {Bars3Icon, BellIcon, XMarkIcon} from '@heroicons/vue/24/outline'
import {PlusIcon} from '@heroicons/vue/20/solid'

const navigation = [
    {name: 'Inicio', href: '#', current: true},
    {name: 'Productos', href: '#', current: false},
    {name: 'Nosotros', href: '#', current: false},
    {name: 'Contacto', href: '#', current: false},
]

</script>
