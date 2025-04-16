<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
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
<body class="min-h-screen bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-100 font-sans px-4 sm:px-6 py-6 flex flex-col items-center">

  <div class="w-full max-w-4xl space-y-6">
    <h1 class="text-3xl font-bold text-center">📨 Message Center</h1>

    <!-- Form Input -->
    <form method="POST" action="/messages"
      class="flex flex-col sm:flex-row gap-3 bg-white dark:bg-gray-800 p-4 rounded-xl shadow border border-gray-200 dark:border-gray-700">
      @csrf
      <input type="text" name="text" placeholder="Tulis pesan..." required
        class="flex-1 px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-500 text-gray-900 dark:text-white placeholder:text-gray-500 dark:placeholder:text-gray-400 transition" />
      <button type="submit"
        class="px-5 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
        Kirim
      </button>
    </form>

    <div class="grid sm:grid-cols-2 gap-6">
      <!-- Laravel Messages -->
      <div>
        <h2 class="text-xl font-semibold mb-2">💬 Pesan Lokal</h2>
        <ul class="space-y-4">
          @foreach ($messages as $message)
          <li class="p-4 bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 text-sm shadow hover:shadow-md transition">
            <p class="font-medium text-base">{{ $message->text }}</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">{{ $message->created_at }}</p>
            <div class="flex gap-3 mt-3">
              <a href="/messages/{{ $message->id }}/edit"
                 class="text-blue-600 dark:text-blue-400 text-sm font-medium hover:underline transition">
                Edit
              </a>
              <form action="/messages/{{ $message->id }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                  class="text-sm text-red-600 dark:text-red-400 font-medium hover:underline">
                  Delete
                </button>
              </form>
            </div>
          </li>
          @endforeach
        </ul>
      </div>

      <!-- Fake API Section -->
      <div>
        <div class="flex justify-between items-center mb-2">
          <h2 class="text-xl font-semibold">🌐 Pesan dari API</h2>
          <button onclick="toggleApi()" class="text-sm text-blue-500 hover:underline">Toggle</button>
        </div>
        <ul id="api-messages" class="space-y-3 hidden text-sm"></ul>
      </div>
    </div>
  </div>

  <script>
    function toggleApi() {
      const apiList = document.getElementById('api-messages');
      apiList.classList.toggle('hidden');
    }

    fetch('https://jsonplaceholder.typicode.com/comments?_limit=3')
      .then(res => res.json())
      .then(data => {
        const apiList = document.getElementById('api-messages');
        data.forEach(comment => {
          const li = document.createElement('li');
          li.className = 'p-4 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 shadow';
          li.innerHTML = `
            <p class="font-semibold">${comment.name}</p>
            <p class="text-gray-500 dark:text-gray-400 text-xs">${comment.email}</p>
            <p class="mt-1 text-sm">${comment.body}</p>
          `;
          apiList.appendChild(li);
        });
      });
  </script>

</body>
</html>
