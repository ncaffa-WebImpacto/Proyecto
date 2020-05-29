






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    
    
     <div class="container">

                           <h1>Listado de usuarios</h1>
<?php while ($user= $users->fetch_object()): ?>
                           
  <table class="table table-striped table-dark">
            <thead>
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">Id</th>
                      <th scope="col">Apellido</th>
                    </tr>
            </thead>
            <tbody>
                        <tr>
                          
                          <td><?=$user->name?> </td>
                          
                          <td><?=$user->id?></td>
                         
                          <td><?=$user->surname?></td>

                        </tr>
            </tbody>
</table>

  
    

<?php endwhile; ?>
    </div>
    
    
 
    
</body>
</html>





