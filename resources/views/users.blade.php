<h1>User Login</h1>

<form action="users" method="post">
    @csrf
    <input type="text" name="username" placeholder="enter username"><br><br>
    <input type="password" name="password" placeholder="enter password"><br><br>
    <button type="submit" >Login</button>
</form>
