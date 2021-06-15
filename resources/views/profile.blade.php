<h1>Profile Page</h1>
<h2>Hello, {{session('user')}}</h2>

@if (Session::get('success')=="success")

    <img src="{{ URL::to('/public/uploads/'.Session::get('image'))}}">
@endif

<form action="uploadfile" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"><br><br>
    <button type="submit">Upload File</button>
</form>


<a href="/logout">Logout</a>
