@if(session('user')==null || session('user')=="")
    <script>window.location = "/logout";</script>
@endif

<h1>Profile Page</h1>
<h2>Hello, {{session('user')}}</h2>

@if (Session::get('success')=="success")

    <img src="{{asset('/uploads/'.Session::get('image'))}}">
@endif

@if(Session::get('success')!="success")
<form action="uploadfile" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"><br><br>
    <button type="submit">Upload File</button>
</form>
@endif
<br><br><br>
<a href="/logout">Logout</a>
