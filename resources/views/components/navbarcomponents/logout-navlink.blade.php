@vite('/resources/js/logout.js')
<form action="{{ route('logout') }}" method="POST" class="space-x-1" id="logoutForm">
    @csrf
    @method('POST')
    <i class="fa-solid fa-right-from-bracket"></i>
    <input type="submit" value="logout" id="logoutInput">

</form>
