<html>

<body>
    <form action="{{ Route('get.status') }}" method="GET">
        @csrf
        @method('GET')
        شماره<input type="text" name="phone" id=""><br>
        <button type="submit">ثبت</button>
    </form>

</body>


</html>
