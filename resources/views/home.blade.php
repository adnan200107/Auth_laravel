<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>hey bro</title>
</head>
<body>
@auth 
<p>sf  ra dkhalti </p>
  <form action="/logout" method="POST">
    @csrf
    <button>Log out</button>
  </form>
  <div style="border: 3px solid black;">
    <h2>Create a New Post</h2>
    <form action="/create-post" method="POST">
      @csrf
      <input type="text" name="title" placeholder="post title">
      <textarea name="body" placeholder="kteeeb li bghiiiti."></textarea>
      <button>Save Post</button>
    </form>
  </div>
@else
<div style="border: 2px solid darkred;">
	<h2>
		Register
	</h2>
	<form action="/register" method="POST">
		@csrf
		<input name="name" type="text" placeholder="Nom">
		<input name="email" type="emaill" placeholder="Email">
		<input name="password" type="password" placeholder="PASSWORD">
		<button >REGISTER</button>
	</form>
</div>
<div style="border: 3px solid black;">
    <h2>Login</h2>
    <form action="/login" method="POST">
      @csrf
      <input name="loginname" type="text" placeholder="name">
      <input name="loginpassword" type="password" placeholder="password">
      <button>Log in</button>
    </form>
  </div>
@endauth
</body>
</html>