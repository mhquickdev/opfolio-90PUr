<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lux Solutions - Premium Digital Innovations</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    keyframes: {
                        'pulse-slow': {
                            '0%, 100%': { transform: 'scale(1) translate(0, 0)', opacity: '0.2' },
                            '50%': { transform: 'scale(1.05) translate(10px, 10px)', opacity: '0.3' },
                        },
                        'float': {
                            '0%, 100%': { transform: 'translateY(0) translateX(0)' },
                            '33%': { transform: 'translateY(-8px) translateX(5px)' },
                            '66%': { transform: 'translateY(8px) translateX(-5px)' },
                        },
                        'fade-in': {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        'slide-up': {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    },
                    animation: {
                        'pulse-slow': 'pulse-slow 8s infinite ease-in-out',
                        'float': 'float 6s infinite ease-in-out',
                        'fade-in': 'fade-in 0.8s ease-out forwards',
                        'slide-up': 'slide-up 0.8s ease-out forwards',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            html { @apply font-sans text-gray-900; }
            body { @apply antialiased bg-white dark:bg-gray-900 dark:text-gray-100; }
        }
        @layer utilities {
            .bg-grid-pattern {
                background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
                background-size: 24px 24px;
            }
            .dark .bg-grid-pattern {
                background-image: radial-gradient(#374151 1px, transparent 1px);
            }
        }
    </style>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="relative">
    @yield('content')
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
