<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
</head>
<body>

    <!-- Tombol Ganti Tema -->
    <button onclick="toggleTheme()" class="theme-toggle">🌓 Dak Mode</button>

    <h1>Message List</h1>

    <form method="POST" action="/messages">
        @csrf
        <input type="text" name="text" placeholder="Tulis pesan..." required>
        <button type="submit">Kirim</button>
    </form>

    <ul>
        @foreach ($messages as $message)
        <li>
            <div>
                {{ $message->text }} ({{ $message->created_at }})
            </div>
            <div>
                <a href="/messages/{{ $message->id }}/edit">Edit</a>

                <form action="/messages/{{ $message->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin mau hapus pesan ini?')">Delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>

    <!-- Script untuk toggle dark mode -->
    <script>
        function toggleTheme() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            html.classList.toggle('light');

            // Simpan preferensi tema ke localStorage
            const currentTheme = html.classList.contains('dark') ? 'dark' : 'light';
            localStorage.setItem('theme', currentTheme);
        }

        // Set tema berdasarkan preferensi sebelumnya
        window.onload = () => {
            const savedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.className = savedTheme;
        };
    </script>
    <style>
        /* Reset dan styling dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        html, body {
            min-height: 100vh;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        h1 {
            margin-bottom: 30px;
        }

        form {
            margin-bottom: 20px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 250px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .theme-toggle {
            margin-bottom: 20px;
            background-color: #333;
        }

        ul {
            list-style-type: none;
            width: 100%;
            max-width: 600px;
        }

        li {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        a {
            text-decoration: none;
            color: #2196F3;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        form[method="POST"][action*="delete"] {
            display: inline;
        }

        @media (max-width: 500px) {
            form {
                flex-direction: column;
                align-items: stretch;
            }

            li {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }

        /* -----------------------------
           DARK MODE
        ----------------------------- */
        .dark body {
            background-color: #1e1e1e;
            color: #f4f4f4;
        }

        .dark li {
            background-color: #2b2b2b;
            border-color: #444;
        }

        .dark input[type="text"] {
            background-color: #333;
            color: white;
            border-color: #555;
        }

        .dark a {
            color: #90CAF9;
        }

        .dark button {
            background-color: #333;
            color: white;
        }

        .dark button:hover {
            background-color: #444;
        }
    </style>

</body>
</html>
