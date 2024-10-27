<h1 class="font-extrabold text-4xl pt-4">Meus Livros</h1>

<div class="grid grid-cols-4 gap-4">
    <div class="flex flex-col col-span-3 gap-4">
        <?php foreach($livros as $livro){
            require 'partials/_livro.php';
        } ?>
    </div>
    <div class="border border-zinc-600 rounded">
        <h1 class="border-b border-zinc-600 text-zinc-400 font-bold px-4 py-2">Cadastre um novo livro</h1>
        <form class="p-4 space-y-4" method="POST" action="/livro-criar" enctype="multipart/form-data">
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
                <label class="text-zinc-400 mb-1">Imagem</label>
                <input type="file" name="imagem" class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1" />
            </div>
            <div class="flex flex-col">
                <label class="text-zinc-400 mb-1">Título</label>
                <input type="text" name="titulo" class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1" />
            </div>
            <div class="flex flex-col">
                <label class="text-zinc-400 mb-1">Autor</label>
                <input type="text" name="autor" class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1" />
            </div>
            <div class="flex flex-col">
                <label class="text-zinc-400 mb-1">Descrição</label>
                <textarea type="text" name="descricao" class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1"></textarea>
            </div>
            <div class="flex flex-col">
                <label class="text-zinc-400 mb-1">Ano de Lançamento</label>
                <select name="ano_de_lancamento" class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1">
                    <?php foreach(range(1900, date('Y')) as $ano) : ?>
                        <option value="<?=$ano?>"><?=$ano?></option>
                    <?php endforeach; ?>
                </select>
            </div>            
            <button type="submit" class="w-1/3 border-2 border-zinc-600 bg-zinc-700 text-zinc-400 px-4 py-1 rounded-md hover:bg-zinc-600 duration-300">Salvar</button>
        </form>
    </div>
</div>