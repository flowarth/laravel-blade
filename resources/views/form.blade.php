<html>
<bod>
    <form action="">
        <input type="checkbox" @checked($user['premium']) value="Premuim"><br>
        <input type="text" value="{{ $user['name'] }}" @readonly(!$user['admin'])><br>
    </form>
</bod>
</html>
