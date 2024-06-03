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
            fontFamily: {
                sans: ["Roboto Slab", "serif"],
            },
            keyframes: {
                spin360: {
                    "0%": { transform: "rotate(0deg)" },
                    "100%": { transform: "rotate(360deg)" },
                },
                bounceToRight: {
                    "0%, 100%": {
                        transform: "translateX(-25%)",
                        "animation-timing-function":
                            "cubic-bezier(0.8, 0, 1, 1)",
                    },
                    "50%": {
                        transform: "translateX(0)",
                        "animation-timing-function":
                            "cubic-bezier(0, 0, 0.2, 1)",
                    },
                },
            },
            animation: {
                "spin-slow": "spin360 3s linear infinite",
                "bounce-horizontally": "bounceToRight 1s infinite",
            },
        },
    },
    plugins: [],
};
