/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        fontSize: {
            sm: "0.8rem",
            base: "1rem",
            xl: "1.25rem",
            "2xl": "1.563rem",
            "3xl": "1.953rem",
            "4xl": "2.441rem",
            "5xl": "3.052rem",
            "6xl": "3.75rem",
            "7xl": "4.5rem",
            "8xl": "6rem",
            "9xl": "8rem",
            xxl: "6.25rem",
        },
        extend: {
            blur: {
                xs: "1px",
            },
            colors: {
                primary: "#FFCF0F",
                secondary: "#1397FC",
                dark: "#0f172a",
            },
            screens: {
                xsm: "520px",
                "2xl": "1320px",
            },
        },
    },
    plugins: [],
};
