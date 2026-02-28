<!DOCTYPE html>
<html>
<head>
<title>Login Sistem</title>
<style>
body {
    font-family: Trebuchet MS;
}
.login-box {
    width: 350px;
    margin: 100px auto;
    padding: 20px;
    border: 1px solid #ddd;
}
input {
    width: 100%;
    padding: 8px;
    margin: 8px 0;
}
button {
    background-color: salmon;
    color: white;
    padding: 10px;
    border: none;
    width: 100%;
    cursor: pointer;
}
button:hover {
    background-color: #ff7f50;
}
</style>
</head>
<body>

<div class="login-box">
<h2 align="center">Login</h2>

<form method="POST" action="proses_login.php">
    <label>Username</label>
    <input type="text" name="username" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
</form>
</div>

</body>
</html>