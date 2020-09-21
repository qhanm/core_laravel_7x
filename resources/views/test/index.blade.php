<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

</style>

<table class="table table-bordered">
    <tr>
        <th>@sortablelink('id')</th>
        <th>@sortablelink('username')</th>
        <th>@sortablelink('email')</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->username}}</td>
        <td>{{$user->email}}</td>
    </tr>
    @endforeach
</table>
{!! $users->appends(\Request::except('page'))->render() !!}
