<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Piware - Endless Technology Solutions</title>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    primary: '#1CCAC0',
                    secondary: '#10B981',
                    darkBg: '#0F172A',
                    accent: '#25D366',
                },
                animation: {
                    'float': 'float 6s ease-in-out infinite',
                    'float-reverse': 'float-reverse 6s ease-in-out infinite',
                },
                keyframes: {
                    float: {
                        '0%, 100%': { transform: 'translateY(0)' },
                        '50%': { transform: 'translateY(-20px)' },
                    },
                    'float-reverse': {
                        '0%, 100%': { transform: 'translateY(0)' },
                        '50%': { transform: 'translateY(20px)' },
                    }
                }
            },
        },
    };
</script>
<style>
    .gradient-text {
        background: linear-gradient(90deg, #1CCAC0, #10B981);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
</style>
