const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
	darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
				colors: {
					transparent: colors.transparent,
					danger: colors.red,
					secondary: colors.warmGray,
					primary: colors.indigo,
					success: colors.green,
					warning: colors.yellow,
					black: colors.black,
					info: colors.lightBlue,
					white: colors.white,
				},
				maxWidth: {},
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
