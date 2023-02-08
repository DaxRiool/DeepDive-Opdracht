<form action="LoginStore" method="post">
    @csrf
    <p>email</p>
    <input type="email" name="email" id="">
    <br>
    <br>
    <p>password</p>
    <input type="password" name="password" id="">
    <br><br>
    <input type="submit" value="send">
</form>