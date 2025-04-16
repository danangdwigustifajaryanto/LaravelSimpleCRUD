<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Message</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'media' // mengikuti settingan OS
        }
    </script>
</head>
<body class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100 flex flex-col items-center px-6 py-10">

    <h1 class="text-3xl font-bold mb-6">Edit Pesan</h1>

    <form method="POST" action="/messages/{{ $message->id }}" class="w-full max-w-md bg-white dark:bg-gray-800 p-6 rounded-lg shadow space-y-4">
        @csrf
        @method('PUT')
        <input type="text" name="text" value="{{ $message->text }}" required
            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring focus:border-blue-400">
        <button type="submit"
            class="w-full px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition-colors">
            Update
        </button>
    </form>

    <a href="/messages" class="mt-4 text-blue-600 dark:text-blue-400 hover:underline">← Kembali ke daftar pesan</a>

</body>
</html>
