@if(Auth::user()->usertype == "U")
<script>
    window.location.href = '{{route("index")}}'; //using a named route
</script>
@endif