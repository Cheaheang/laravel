<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel & mysql database connection</title>
</head>
<body>
    <div>
        <?php

use Illuminate\Support\Facades\DB;

            if(DB::connection()->getPdo()){
                echo"successfully connected to DB and DB naem is ".DB::connection()->getDatabaseName();
            }
        ?>   
      </div>  
</body>
</html>