@php
if(Auth::user()->usertype == "U")
return redirect('404');
@endphp