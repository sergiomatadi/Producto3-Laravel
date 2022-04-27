<form action="{{ url('/students') }}" method="post" enctype="multipart/form-data" >
@csrf
<label for="username"> Usuario </label>
<input type="text" name="username" id="username" >
<br>
<label for="pass"> Contraseña </label>
<input type="text" name="pass" id="pass">
<br>
<label for="email"> Email </label>
<input type="text" name="email" id="email">
<br>
<label for="name"> Nombre </label>
<input type="text" name="name" id="name" >
<br>
<label for="telephone"> Teléfono </label>
<input type="text" name="telephone" id="telephone">
<br>
<label for="nif"> NIF </label>
<input type="text" name="nif" id="nif" >
<br>

<label for="date_registered"> Fecha de registro </label>
<input type="date" name="date_registered" id="date_registered">
<br>
<input type="submit" value="Guardar datos" >
<br>
</form>