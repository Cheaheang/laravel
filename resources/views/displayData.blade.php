@extends('php')


@section('content')
<div class="row">
    <div class="col-md-12">
        <br>
        <table class="table table-bordered">
            <tr>
                <td>name</td>
                <td>password</td>
            </tr>
<br />   
 
           @foreach($seconds as $row)

            <tr>
                    <td>{{$row['name']}} </td>
                    <td>{{$row['password']}}</td>


                
            </tr>

@endforeach           
        </table>
    </div>

</div>
@endsection
     