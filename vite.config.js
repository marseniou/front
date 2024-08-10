import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js', 'app/View/Components/**'],
            refresh: true,
        }),
    ],
    server: { 
        hmr: {
            host: 'front.test',
        },
    },
});
