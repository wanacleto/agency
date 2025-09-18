import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        manifest: true,
        outDir: 'public/build/',
        cssCodeSplit: true,
        rollupOptions: {
            external: ['fsevents', 'tty', 'path'],
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            'path': 'path-browserify',
        },
    },
    define: {
        'process.env': {},
    },
    optimizeDeps: {
        exclude: ['fsevents', 'tty', 'path'],
    },
});
