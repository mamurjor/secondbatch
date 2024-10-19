<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

@if($errors->any())


@foreach ($errors->all() as $single_error )

{{ $single_error }}
@endforeach

@endif


<form action="{{ route('admin.heroformsave') }}" method="POST">


@csrf


  <label for="fname">hero_title</label><br>
  <input type="text" id="fname" name="hero_title" value=""><br>
  <label for="lname">hero_name</label><br>
  <input type="text" id="lname" name="hero_name" value=""><br><br>

  <label for="lname">hero_designation</label><br>
  <input type="text" id="lname" name="hero_designation" value=""><br><br>

  <label for="lname">button_url</label><br>
  <input type="text" id="lname" name="button_url" value=""><br><br>


  <label for="lname">button_text</label><br>
  <input type="text" id="lname" name="button_text" value=""><br><br>


  <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
