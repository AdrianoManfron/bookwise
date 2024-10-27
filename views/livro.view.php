<h1 class="font-extrabold text-4xl pt-4"><?= $livro->titulo ?></h1>
<?php require 'partials/_livro.php'; ?>

<h2>Avaliações</h2>
<div class="grid grid-cols-4 gap-4">
    <div class="col-span-3 gap-4 grid">
        <?php foreach($avaliacoes as $avaliacao) : ?>
            <div class="border border-zinc-600 rounded p-2">
                <?=$avaliacao->avaliacao?>
                <?=str_repeat("⭐", $avaliacao->nota)?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="border border-zinc-600 rounded">
        <?php if(auth()) : ?>
        <h1 class="border-b border-zinc-600 text-zinc-400 font-bold px-4 py-2">Me conte o que achou</h1>
        <form class="p-4 space-y-4" method="POST" action="/avaliacao-criar">
        <?php if( $validacoes = flash()->get('validacoes') ): ?>
                <div class="border-red-600 bg-red-700 text-red-400 px-4 py-1 rounded-md text-sm font-bold">
                    <ul>
                        <li>Deum ruim!!!</li>
                        <?php foreach($validacoes as $validacao) : ?>
                            <li><?=$validacao?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="flex flex-col">
                <input type="hidden" name="livro_id" value="<?=$livro->id?>">
                <label class="text-zinc-400 mb-1">Avaliação</label>
                <textarea type="text" name="avaliacao" class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1"></textarea>
            </div>
            <div class="flex flex-col">
                <label class="text-zinc-400 mb-1">Nota</label>
                <select name="nota" class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <button type="submit" class="w-1/3 border-2 border-zinc-600 bg-zinc-700 text-zinc-400 px-4 py-1 rounded-md hover:bg-zinc-600 duration-300">Salvar</button>
        </form>
        <?php endif; ?>
    </div>
</div>