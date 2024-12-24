import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
            },
            fontWeight: {
                poppins400: '400',
                poppins500: '500',
                poppins600: '600',
                poppins700: '700',
              },
            colors: {
                basecol: "#E9EFEC",
                basedark: "#1E1E1E",
                primary: {
                    100: "#d0d9d8",
                    200: "#a2b3b1",
                    300: "#738e8a",
                    400: "#456863",
                    500: "#16423c",
                    600: "#123530",
                    700: "#0d2824",
                    800: "#091a18",
                    900: "#040d0c",
                },
                secondary: {
                    100: "#fce9d3",
                    200: "#f8d4a7",
                    300: "#f5be7a",
                    400: "#f1a94e",
                    500: "#ee9322",
                    600: "#be761b",
                    700: "#8f5814",
                    800: "#5f3b0e",
                    900: "#301d07",
                },
            },
        },
    },
    plugins: [],
};
