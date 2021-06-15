<h1>New Registration</h1>

<form action="/registerUser" method="post">
    @csrf
    <input type="text" name="firstname" placeholder="first name">
    <input type="text" name="lastname" placeholder="last name">
    <input type="text" name="emailId" placeholder="email id">
    <input type="password" name="password" placeholder="password">
    <button type="submit" name="submitRegistration">Register</button>
</form>
