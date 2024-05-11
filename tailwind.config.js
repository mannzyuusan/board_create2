const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                yellow: '#fef08a',
            },
            backgroundImage: {
                background:"url('/img/school.jpg')" ,　//例：url('/img/background.jpg')
            }
          //ここまで追記
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
