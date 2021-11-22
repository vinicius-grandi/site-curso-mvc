<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Webdesign em Foco">
    <meta name="description" content="<?php echo $this->getDescription();?>">
    <meta name="keyword" content="<?php echo $this->getKeywords();?>">
    <title><?php echo $this->getTitle();?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS.'Style.css' ?>">
    <?php echo $this->addHead(); ?>
</head>
<body>
    <header class="header">
    <?php echo $this->addHeader(); ?>
    </header>
    <nav>
        <a href="<?php echo DIRPAGE; ?>">Home</a>
        <a href="<?php echo DIRPAGE. "cadastro"; ?>">Cadastro</a>
    </nav>
    <div id="BC">
        <?php 
            $BreadCrumb = new Src\Classes\ClassBreadcrumb;
            $BreadCrumb->addBreadcrumb();
        ?>
    </div>
    <main class="main">
    <?php 
    echo $this->addMain(); ?>
    </main>
    <footer class="footer">
    <?php echo $this->addFooter(); ?>
    </footer>
</body>
</html>