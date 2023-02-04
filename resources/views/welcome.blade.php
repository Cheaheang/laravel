<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('saveItem')}}" method="POST" accept="UTF-8">{{ csrf_field()}}
        <div class="container">
        <div>
            <label for="lsecond" class="name" >Username : </label>
            <input type="text" name="name">
            
        </div>
    

        <br>
        <div>
            <label for="second" class="password">password:</label>
            <input type="text" name="password">
            
        </div>


        <button class="submit">
        add
        </button> 
         </div>
 </form>    


       
</body>
</html>