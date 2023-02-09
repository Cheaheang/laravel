<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action="{{route('saveItem')}}" method="POST" accept="UTF-8">{{ csrf_field()}}
        <div class="container" style="display: flex; justify-content: center;align-items: center;flex-direction: column;">


        <div style="width: 150px;height: 32px;padding: 12px;" >
            <label for="lsecond" class="name" >Username : </label>
            <input type="text" name="name">
            
        </div>
    

        <br>
        <div style="width: 150px;height: 32px;padding: 12px;" >
            <label for="second" class="password" >password:</label>
         
            <input type="text" name="password">

<div style="display: flex; justify-content: center;align-items: center;width: 250px;">
        <button class="btn-primary submit" style="margin: 12px;border-radius: 12px;width:120px " type="password">
           sign up 
        </button> 
        
        <button class="btn-success " style="margin: 12px;border-radius: 12px;width: 120px; ">
          <a href="{{url('/seconds')}}" style="color: white;font-style: none;text-decoration: none;">List</a>
        </button>  

</div>
        
        </div> 
        
         </div>
 </form>    


       
</body>
</html>