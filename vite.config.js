import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],

     server: {
        host: true,
        allowedHosts: ['83ec-2001-448a-80d2-121d-2468-f3a5-550a-5472.ngrok-free.app'],
     



  },
});
