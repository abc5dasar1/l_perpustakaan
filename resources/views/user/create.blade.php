<h1>Tambah User</h1>
<form action="{{ route('user.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" id="">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" id="">
    </div>
    <div class="form-group">
        <input type="submit" value="Save" style="
        background-color: #04AA6D; /* Green */
        border: none;
        color: white;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        cursor: pointer; border-radius : 8px;">
    </div>
</form>