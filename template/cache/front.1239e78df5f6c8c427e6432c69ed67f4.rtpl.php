<?php if(!class_exists('Rain\Tpl')){exit;}?><center>
    <div>
        <h1>Olá <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
        <p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
    </div>
</center>