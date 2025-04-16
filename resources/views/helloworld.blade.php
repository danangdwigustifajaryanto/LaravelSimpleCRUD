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
<body class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white font-sans px-6 py-12 transition-all duration-300 ease-in-out">

  <div class="text-center space-y-8 max-w-lg">
    <!-- Icon or Illustration -->
    <div class="text-6xl">👋</div>

    <h1 class="text-5xl font-extrabold tracking-tight">Hello World!</h1>
    <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
      Selamat datang di simulasi CRUD sederhana berbasis Laravel + Tailwind CSS.
    </p>

    <!-- Button -->
    <a href="/messages">
      <button class="inline-flex items-center gap-2 px-8 py-3 bg-blue-600 text-white font-semibold text-lg rounded-xl shadow-lg hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 transition-transform transform hover:scale-105">
        🚀 Masuk ke Simulasi CRUD
      </button>
    </a>
  </div>

</body>
</html>
