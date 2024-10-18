<h1 class="font-extrabold text-4xl pt-4"><?= $livro['titulo'] ?></h1>
<div class="border-2 border-zinc-600 bg-zinc-700 p-2 rounded">
    <div class="flex">
        <div class="w-1/3">imagem</div>
        <div class="space-y-1">
            <div class="text-xs italic"><?= $livro['autor'] ?></div>
            <div class="text-xs italic">⭐⭐⭐⭐⭐(3 Avaliações)</div>
        </div>
    </div>
    <div class="text-sm mt-2">
        <?= $livro['descricao'] ?>
    </div>
</div>