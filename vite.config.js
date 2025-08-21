import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: true,
        hmr: {
            host: 'localhost',
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                // 'resources/css/filament/admin/theme.css',
                'resources/js/maps.js',
                'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
