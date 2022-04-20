<!DOCTYPE html>
<html lang="pt">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Html->css(['style']) ?>
    <title>Consumindo Api</title>
</head>
<body>
    <header>
        <form  id="form">
            <input type="text" placeholder="Search" id="search" class="search">
        </form>
    </header>
    <main id="main">
    </main>
    <?= $this->Html->script(['api']) ?>
</body>
</html>
