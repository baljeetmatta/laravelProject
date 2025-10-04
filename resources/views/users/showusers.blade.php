<html>
    <body>
        Welcome to show users page
        <table>
            <tr>
                <th>Name</th><th>City</th><th></th>
            </tr>

             @foreach ($users as $key=> $user )
             
             <tr>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['city']}}</td>
                    <td><a href="{{ route('showUser',['id'=>$key]) }}"> Show</a></td>
             </tr>
                 
             @endforeach   



    </body></html>