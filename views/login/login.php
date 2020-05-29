
<div id="login">
    
    <?php if(!isset($_SESSION['identity'])): ?>
    <h3> Entrar en la web</h3>
    
    <form action="https://localhost/Proyecto1/Proyecto/UsersController/login" method="post">
        
        <label for="email">Email</label>
        <input type="text" name="email" />
        <label for="password">Contraseña</label>
        <input type="password" name="password"/>
        <input type="submit" name="Enviar" />
        
    </form>
    <?php else: ?>
    
        <h3>Bienvenido: <?=$_SESSION['identity']->name ?>
            <?= var_dump($_SESSION['identity']->name)?></h3>
    <?php endif; ?>
    
    
    
    
</div>

