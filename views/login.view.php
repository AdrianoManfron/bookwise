<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-zinc-600 rounded">
        <h1 class="border-b border-zinc-600 text-zinc-400 font-bold px-4 py-2">Login</h1>
        <form class="p-4 space-y-4" method="POST">
        <?php if( $validacoes = flash()->get('validacoes_login') ): ?>
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
                <label class="text-zinc-400 mb-1">Email</label>
                <input type="email" name="email" class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1" />
            </div>
            <div class="flex flex-col">
                <label class="text-zinc-400 mb-1">Senha</label>
                <input type="password" name="senha" class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1" />
            </div>
            <button type="submit" class="w-1/3 border-2 border-zinc-600 bg-zinc-700 text-zinc-400 px-4 py-1 rounded-md hover:bg-zinc-600 duration-300">Logar</button>
        </form>
    </div>
    <div class="border border-zinc-600 rounded">
        <h1 class="border-b border-zinc-600 text-zinc-400 font-bold px-4 py-2">Cadastrar</h1>
        <form class="p-4 space-y-4" method="POST" action="/cadastrar">
            <?php if( $validacoes = flash()->get('validacoes_registrar') ): ?>
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
                <label class="text-zinc-400 mb-1">Nome</label>
                <input type="text" name="nome"  class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1" />
            </div>
            <div class="flex flex-col">
                <label class="text-zinc-400 mb-1">Email</label>
                <input type="text" name="email"  class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1" />
            </div>
            <div class="flex flex-col">
                <label class="text-zinc-400 mb-1">Confirme Email</label>
                <input type="text" name="email_confirm"  class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1" />
            </div>
            <div class="flex flex-col">
                <label class="text-zinc-400 mb-1">Senha</label>
                <input type="password" name="senha"  class="w-full border-2 border-zinc-600 bg-zinc-700 text-sm rounded-md focus:outline-none px-2 py-1" />
            </div>
            <button type="reset" class="w-1/3 border-2 border-zinc-600 bg-zinc-700 text-zinc-400 px-4 py-1 rounded-md hover:bg-zinc-600 duration-300">Limpar</button>
            <button type="submit" class="w-1/3 border-2 border-zinc-600 bg-zinc-700 text-zinc-400 px-4 py-1 rounded-md hover:bg-zinc-600 duration-300">Cadastrar</button>
        </form>
    </div>
</div>