/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "custom-blue": "#557a95",
            },
            keyframes: {
                spin360: {
                    "0%": { transform: "rotate(0deg)" },
                    "100%": { transform: "rotate(360deg)" },
                },
            },
            animation: {
                "spin-slow": "spin360 3s linear infinite",
            },
        },
    },
    plugins: [],
};
