<html>
<body>
    <form action="insert" method="POST">
    @csrf
    <input type="text" name="name" placeholder='company name'>
    <br><br>
    <input type="text" name="address" placeholder='company address'>
    <br><br>
    <button type="submit">Submit Data</button>
    </form>
</body>
</html>