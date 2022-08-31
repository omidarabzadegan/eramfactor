<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - cinema ticket</title>
  <link rel="stylesheet" href="/css/ticket/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="cardWrap">
  <div class="card cardLeft">
    <h1>مشاهده <span>وضعیت</span></h1>
    <div class="title">
      <h2>{{ $results['statusData']['status'] }}</h2>
      <span>آخرین وضعیت</span>
    </div>
    <div class="name">
      <h2>{{ $results['factorData']['name'] }}</h2>
      <span>نام و نام خانوادگی</span>
    </div>
    <div class="seat">
      <h2>{{ $results['factorData']['created_at'] }}</h2>
      <span>تاریخ تحویل</span>
    </div>
    <div class="time">
      <h2>{{ $results['factorData']['created_at_time'] }}</h2>
      <span>زمان</span>
    </div>
    
  </div>
  <div class="card cardRight">
    <div class="eye"></div>
    <div class="number">
      <h3>{{ $results['factorData']['tracking_code'] }}</h3>
      <span>شماره فاکتور</span>
    </div>
    <div class="barcode"></div>
  </div>

</div>
<!-- partial -->
  
</body>
</html>

{{-- نام : {{ $results['factorData']['name'] }} <br>
تاریخ تحویل دستگاه : {{ $results['factorData']['created_at'] }} <br>
زمان تحویل دستگاه : {{ $results['factorData']['created_at_time'] }} <br>
آخرین وضعیت : {{ $results['statusData']['status'] }} <br> --}}

