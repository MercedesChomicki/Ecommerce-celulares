{include 'header.tpl'}

<h1>{$titulo}</h1>
<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="verify-sign-in">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary mt-3">Registrar</button>
    </form>
</div>

{include file='footer.tpl'}