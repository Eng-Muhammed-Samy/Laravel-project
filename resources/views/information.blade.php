@extends('layout.layout1')
@section('content')
<!-- ----------------------show all student in table------------------- -->
<div class="table-responsive-sm table-responsive-md table-responsive-lg">
    <table class="table  table-border">
        <thead class="bg-danger">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>

            @foreach($x as $i)
            <tr class="bg-dark text-light">
                <th scope="row" class="bg-danger">{{$i['id']}}</th>
                <td>{{$i['FirstName']}}</td>
                <td>{{$i['LastName']}}</td>
                <td>{{$i['Email']}}</td>
                <td>{{$i['Password']}}</td>
                <td>{{$i['Adress']}}</td>
                <td>{{$i['phone']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection