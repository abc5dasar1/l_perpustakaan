<h1>Data User</h1>
<div align="end">
    <a href="{{ route('user.create') }}" style="
    background-color: #04AA6D; /* Green */
    border: none;
    color: white;
    padding: 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin-bottom: 4px;
    cursor: pointer; border-radius : 8px;">
    Add</a>
</div>
<!-- <a href="">Add</a> -->
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user )
            <tr>
                <td style="text-align: center;">{{$key+1}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{ route('user.edit', $user->id)}}">Update</a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" onclick="return confirm('Yakin menghapus?')">
                    </form>
                    <!-- <a href="" onclick="return confirm('Yakin menghapus')">Delete</a> -->
                </td>
            </tr>
        @endforeach
    </tbody>
</table>