@if (Session('feiled'))
<div class="alert alert-danger">{{ Session('feiled') }}</div>
@endif
@if (Session('success'))
<div class="alert alert-success">{{ Session('success') }}</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif