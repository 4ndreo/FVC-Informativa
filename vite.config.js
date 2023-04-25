import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [, 'resources/css/app.css', 'resources/js/app.js'],
            // refresh: [{
            //     paths: ['**'],
            // }],
            refresh: true,
            refresh: ['public/css/**', 'resources/**', 'resources/js/app.js'],
            // watch: {
            //     include: 'resources/css/**'
            //   }
        }),
    ],
});
