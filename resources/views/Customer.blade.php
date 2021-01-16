<h1>customer list</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>year</td>
        
    </tr>
    @foreach ($collection as $customer)
        <tr>
        <td>{{$customer['id']}}</td>
        <td>{{$customer['name']}}</td>
            <td>{{$customer['year']}}</td>
            
        </tr>
    @endforeach
   
</table>