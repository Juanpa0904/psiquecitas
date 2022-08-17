const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            prompt: ['Prompt', defaultTheme.fontFamily.prompt]
        },
        container: {
            center: true
        },
        extend: {
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
