import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import WindiCSSPlugin from 'vite-plugin-windicss';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        WindiCSSPlugin(),
    ],
});
