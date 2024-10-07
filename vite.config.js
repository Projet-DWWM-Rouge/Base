import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/styleTableauDeBord.css',
                'resources/css/styleVueActualite.css',
                'resources/css/styleVueActualiteCrud.css',
                'resources/css/styleVueActualiteFront.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
