<!DOCTYPE html>
<html>
<body>

<h2> Hero Edit From </h2>




@php


$myherosectionarray = (array) $header_section_by_id;



@endphp

<form action="{{ route('admin.heroforupdate') }}" method="POST">


@csrf


  <label for="fname">hero_title</label><br>
  <input type="hidden" id="id" name="id" value="{{ $myherosectionarray["id"] }}"><br>
  <input type="text" id="fname" name="hero_title" value="{{ $myherosectionarray["hero_title"] }}"><br>
  <label for="lname">hero_name</label><br>
  <input type="text" id="lname" name="hero_name" value="{{ $myherosectionarray["hero_name"] }}"><br><br>

  <label for="lname">hero_designation</label><br>
  <input type="text" id="lname" name="hero_designation" value="{{ $myherosectionarray["hero_designation"] }}"><br><br>

  <label for="lname">button_url</label><br>
  <input type="text" id="lname" name="button_url" value="{{ $myherosectionarray["button_url"] }}"><br><br>


  <label for="lname">button_text</label><br>
  <input type="text" id="lname" name="button_text" value="{{ $myherosectionarray["button_text"] }}"><br><br>


  <input type="submit" value="Update">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
