import defaultTheme from 'tailwindcss/defaultTheme';
import withMT from "@material-tailwind/html/utils/withMT";
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default withMT ({
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./resources/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
});
