<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/output.css" rel="stylesheet">
    <title>Book Wise</title>
</head>

<body class="bg-zinc-800 text-zinc-200">
    <header class="bg-zinc-600">
        <nav class="flex flex-col sm:flex-row max-w-screen-lg mx-auto justify-between items-center py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>
            <ul class="flex space-x-4">
                <li><a href="/" class="font-bold text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>
    <main class="max-w-screen-lg mx-auto space-y-6">
        <?php require "views/{$view}.view.php"; ?>
    </main>
</body>
</html>