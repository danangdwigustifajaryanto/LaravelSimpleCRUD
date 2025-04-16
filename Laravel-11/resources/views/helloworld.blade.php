<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <title>Hello</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <a href="/messages">
    <button>Simulasi CRUD</button>
</a>
<button onclick="toggleTheme()">🌓 Ganti Tema</button>
</body>
</html>

<script>
    function toggleTheme() {
        const html = document.documentElement;
        html.classList.toggle('dark');
        html.classList.toggle('light');

        // Simpan preferensi ke localStorage
        if (html.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    }

    // Saat halaman load, cek preferensi
    window.onload = function () {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            document.documentElement.className = savedTheme;
        }
    }
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
    height: 100%;
}

/* Light mode (default) */
body {
    background-color: #f4f4f4;
    color: #333;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

h1 {
    margin-bottom: 30px;
}

a {
    text-decoration: none;
    color: inherit;
}

/* Tombol umum */
button {
    padding: 12px 24px;
    font-size: 16px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin: 5px;
}

button:hover {
    background-color: #45a049;
}

/* -----------------------------
   DARK MODE
----------------------------- */
.dark body {
    background-color: #1e1e1e;
    color: #f4f4f4;
}

.dark button {
    background-color: #333;
    color: white;
}

.dark button:hover {
    background-color: #444;
}

    </style>