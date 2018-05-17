<html>
    <head>
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/fontawesome-all.css" rel="stylesheet">
        <title>Controle de estoque</title>
    </head>
    <body>
        <div class="container">
            <h1>Listagem de produtos</h1>
            <table class="table table-striped table-bordered table-hover">
                <?php foreach ($produtos as $p): ?>
                    <tr>
                        <td><?= $p->nome ?></td>
                        <td><?= $p->valor ?></td>
                        <td><?= $p->descricao ?></td>
                        <td><?= $p->quantidade ?></td>
                        <td align="center">
                            <a href="/produtos/mostra?id=<?= $p->id ?>">
                                <i class="fa fa-search"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </body>
</html>