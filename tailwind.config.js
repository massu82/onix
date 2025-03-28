import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                /*sans: ['Figtree', ...defaultTheme.fontFamily.sans],*/
                sans: ["Barlow", "sans-serif"],
                alt: ["Aviano", "serif"],
            },
            fontWeight: {
                thin: "100",
                extralight: "200",
                light: "300",
                normal: "400",
                medium: "500",
                semibold: "600",
                bold: "700",
                extrabold: "800",
                black: "900",
            },
            colors: {
                black: "var(--color-black)",
                white: "var(--color-white)",
                graytheme: "var(--color-gray)",
                khaki: "var(--color-khaki)",
                timberwolf: "var(--color-timberwolf)",
                olive: "var(--color-olive)",
            },
        },
    },

    plugins: [forms, typography],
};
