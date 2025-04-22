
<script>
    tailwind.config = {
        theme: {
            screens: {
                sm: "468px",
                md: "768px",
                lg: "980px",
                xl: "1024px",
                "2xl": "1280px",
            },
            extend: {
                colors: {
                    primary: "#f1d491",
                    navy: '#0a1f44',
                    charcoal: '#1f1f1f',
                    black: "#242528",
                    darkBlack: "#1A1B1D",
                    white: "#fff",
                    softWhite: "#F7F5F4 ",
                    textColor: "#656565",
                    textColor2: "#c2c2c2",
                    borderGray: "#323438"
                },
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                },

                keyframes: {
                    slide: {
                        '0%': {
                            transform: 'translateX(0%)'
                        },
                        '100%': {
                            transform: 'translateX(-50%)'
                        }
                    }
                },
                animation: {
                    slide: 'slide 30s linear infinite'
                }
            },
        },
        plugins: [],
    };
</script>
