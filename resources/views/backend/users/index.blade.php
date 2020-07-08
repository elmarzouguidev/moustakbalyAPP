
{{-- Elmarzougui Abdelghafour --}}

@extends('backend.layouts.app')

@section('content')

    @include('backend.users.section-a')
   

@endsection

@section('myScript')
<script>
    function generatePassword() {
    var length = 8,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    document.getElementById("password").innerText(retVal);
    return retVal;
}
</script>
@endsection
