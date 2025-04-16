<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'media',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui']
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col items-center justify-center transition-colors
             bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white font-sans px-6">

    <div class="text-center space-y-6">
        <h1 class="text-5xl font-bold tracking-tight">👋 Hello World!</h1>
        <p class="text-lg text-gray-600 dark:text-gray-400">Laravel & Tailwind CRUD sederhana.</p>
<br>

        <a href="/messages">
            <button class="px-8 py-3 bg-blue-600 text-white font-semibold text-lg rounded-xl shadow-md
                           hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 transition-colors">
                🚀 Masuk ke Simulasi CRUD
            </button>
        </a>
    </div>

</body>
</html>
