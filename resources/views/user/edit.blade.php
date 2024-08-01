<h1>Edit User</h1>
<form action="{{ route('user.update', $edit->id) }}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" value="{{ $edit->name}}" name="name" id="">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" value="{{ $edit->email}}" name="email" id="">
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