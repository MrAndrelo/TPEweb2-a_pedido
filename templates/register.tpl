<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
{include 'templates/header.tpl'}
<div class="container">
    <form method="POST" class="col-md-4 offset-md-4 mt-4">
        
        
        <h1>{$titulo}</h1>

        <div class="form-group">
            <label>Usuario (email)</label>
            <input type="text" name="username" class="form-control" placeholder="Ingrese usuario">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        {if $error}
        <div class="alert alert-danger" role="alert">
            {$error}
        </div>
        {/if}
        <button type="submit" class="btn btn-primary">Registrarse</button>

       
            
         
    </form>

</div>
</body>
{include 'templates/footer.tpl'}
