import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.jsx', // Frontend
                'resources/js/load_backend.js' // Backend
            ],
            refresh: true,
        }),
        react(),
    ],
});