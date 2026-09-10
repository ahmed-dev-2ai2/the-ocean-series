import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 8000,
        strictPort: true,
        allowedHosts: [
            'emphasis-bazooka-ricotta.ngrok-free.dev',
            '*.ngrok-free.dev',
            '*.ngrok.io',
            'localhost',
            '127.0.0.1',
        ],
        hmr: {
            host: 'emphasis-bazooka-ricotta.ngrok-free.dev',
            protocol: 'https',
        },
    },
});