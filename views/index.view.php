<form class="flex justify-center items-center w-full space-x-2 mt-6">
    <input type="text" name="pesquisar" class="w-1/2 border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1" placeholder="Pesquisar..." />
    <button type="submit">🔎</button>
</form>
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
    <?php foreach ($livros as $livro): ?>
        <div class="border-2 border-zinc-600 bg-zinc-700 p-2 rounded">
            <div class="flex">
                <div class="w-1/3">imagem</div>
                <div class="space-y-1">
                    <a href="/livro?id=<?= $livro->id ?>" class="font-semibold hover:underline"><?= $livro->titulo ?></a>
                    <div class="text-xs italic"><?= $livro->autor ?></div>
                    <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliações)</div>
                </div>
            </div>
            <div class="text-sm mt-2">
                <?= $livro->descricao ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>