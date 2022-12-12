/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            dark: false,
            backgroundImage: {
                "hero-image": "url('../../public/img/hero_img_1.png')",
                "facilities-image": "url('../../public/img/facilities.png')",
                "learningkit-image":
                    "url('../../public/img/learning_kit/learningkit_bg.png')",
                "login-image": "url('../../public/img/signin/decor.png')",
            },
            fontFamily: {
                primary: "Montserrat, sans-serif",
                secondary: "Inter, sans-serif",
            },
            colors: {
                primary: "#FDD00C",
                purple: "#CDA0CB",
                blue: "#BADCF5",
                green: "#A9DAD7",
                pink: "#FCD0E7",
                grey: "#EEEEEE",
                yellow: "#FDD00C",
                "grey-2": "#F3F3F3",
                orange: "#F1AD81",
            },
            boxShadow: {
                "product-card": "8px 8px 0px rgba(0, 0, 0, 0.4)",
                "order-card": " 5px 5px 4px -2px rgba(0,0,0,0.2)",
                "profile-card": "5px 5px 0px #000000",
            },
        },
    },
    plugins: [],
};
