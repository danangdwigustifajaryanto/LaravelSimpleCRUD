<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <title>Edit Message</title>
</head>
<body>

    <!-- Tombol Dark Mode -->
    <button onclick="toggleTheme()" class="theme-toggle">🌓 Ganti Tema</button>

    <h1>Edit Pesan</h1>

    <form method="POST" action="/messages/{{ $message->id }}">
        @csrf
        @method('PUT')
        <input type="text" name="text" value="{{ $message->text }}" required>
        <button type="submit">Update</button>
    </form>

    <a href="/messages">← Kembali ke daftar pesan</a>

    <!-- Script Dark Mode -->
    <script>
        function toggleTheme() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            html.classList.toggle('light');

            const theme = html.classList.contains('dark') ? 'dark' : 'light';
            localStorage.setItem('theme', theme);
        }

        window.onload = () => {
            const savedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.className = savedTheme;
        };
    </script>

<style>
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
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
            max-width: 400px;
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 12px;
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

        a {
            text-decoration: none;
            color: #2196F3;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        /* -----------------------------
           DARK MODE
        ----------------------------- */
        .dark body {
            background-color: #1e1e1e;
            color: #f4f4f4;
        }

        .dark form {
            background-color: #2b2b2b;
            box-shadow: 0 2px 5px rgba(255,255,255,0.05);
        }

        .dark input[type="text"] {
            background-color: #333;
            color: white;
            border-color: #555;
        }

        .dark button {
            background-color: #333;
            color: white;
        }

        .dark button:hover {
            background-color: #444;
        }

        .dark a {
            color: #90CAF9;
        }
    </style>

</body>
</html>
