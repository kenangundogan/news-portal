import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/theme-one/app.css', 'resources/js/theme-one/app.js', 'resources/css/cms/app.css', 'resources/js/cms/app.js'],
            refresh: true,
        }),
    ],
});
