<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

    <h2><a href="{{ route("admin.heroform") }}"> Add New </a></h2>
<h2>HTML Table</h2>

<table>
  <tr>
    <th>SlNo</th>
    <th>hero_title</th>
    <th>Contact</th>
    <th>Action</th>
  </tr>
{{-- // gooogle task  --}}
  @foreach ($header_section as  $singlevalue )
  <tr>
    <td>{{ $singlevalue->id }}</td>
    <td>{{ $singlevalue->hero_title }}</td>
    <td>{{ $singlevalue->hero_name }}</td>
    <td><a href="{{ route('admin.heroedit',$singlevalue->id) }}">Edit</a>|| <a href="{{ route('admin.herodelete',$singlevalue->id) }}">Delete</a></td>
  </tr>
  @endforeach


</table>

</body>
</html>

