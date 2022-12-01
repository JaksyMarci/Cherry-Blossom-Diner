import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/tables.css',
                'resources/css/index.css',
                'resources/css/login.css',
                'resources/sass/app.scss'
            ],
            refresh: true,
        })
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
