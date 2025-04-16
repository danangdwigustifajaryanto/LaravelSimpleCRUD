<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
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
<body class="min-h-screen bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-100 font-sans px-4 sm:px-6 py-10 flex flex-col items-center">

    <div class="w-full max-w-2xl">
        <h1 class="text-4xl font-bold text-center mb-10">📨 Message List</h1>

        <form method="POST" action="/messages" class="flex flex-col sm:flex-row gap-4 bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md border border-gray-200 dark:border-gray-700 mb-10">
            @csrf
            <input type="text" name="text" placeholder="Tulis pesan kamu di sini..." required
                class="flex-1 px-4 py-3 rounded-lg bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-500 text-gray-900 dark:text-white placeholder:text-gray-500 dark:placeholder:text-gray-400 transition" />
            <button type="submit"
                class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition shadow">
                Kirim
            </button>
        </form>

        <ul class="space-y-6">
            @foreach ($messages as $message)
            <li class="p-6 bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 shadow hover:shadow-lg transition">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <p class="text-lg font-semibold">{{ $message->text }}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $message->created_at }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="/messages/{{ $message->id }}/edit"
                           class="text-blue-600 dark:text-blue-400 font-medium hover:underline transition">
                            Edit
                        </a>
                        <form action="/messages/{{ $message->id }}" method="POST" onsubmit="return confirm('Yakin mau hapus pesan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-4 py-2 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
