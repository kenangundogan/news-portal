/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.json",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins'],
                handwriting: ['Great Vibes'],
                sans: ['Playfair Display'],
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
    }
}
