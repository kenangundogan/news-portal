/** @type {import('tailwindcss').Config} */
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.json",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins'],
                handwriting: ['Great Vibes'],
                // sans: ['Playfair Display'],
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'xxxs': '.525rem',
                'xxs': '.625rem'
            },
            aspectRatio: {
                '1/1': '1 / 1',
                '1/2': '1 / 2',
                '16/9': '16 / 9',
                '9/16': '9 / 16',
            },
        },
    },
    plugins: [forms],
}
