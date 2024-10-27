<div class="border-2 border-zinc-600 bg-zinc-700 p-2 rounded">
    <div class="flex gap-2">
        <div class="w-1/3">
            <img src="<?= $livro->imagem ?>" alt="Imagem do Livro" class="w-60 rounded" />
        </div>
        <div class="flex flex-col gap-1">
            <div class="text-xs italic"><?= $livro->autor ?></div>
            <div class="text-xs italic"><?=str_repeat("⭐", $livro->nota_avaliacao);?>(<?=$livro->count_avaliacoes?> Avaliações)</div>
        </div>
    </div>
    <div class="text-sm mt-2">
        <?= $livro->descricao ?>
    </div>
</div>