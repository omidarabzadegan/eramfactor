<html>

<body>
    <form action="{{ Route('get.status') }}" method="GET">
        @csrf
        @method('GET')
        کد پیگیری<input type="text" name="tracking_code" id=""><br>
        <button type="submit">ثبت</button>
    </form>

</body>


</html>
