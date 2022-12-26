<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Mahasiswa</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Mata Kuliah</th>
    <th>Nilai</th>
    <th>Indeks</th>
    <th>File PDF</th>
  </tr>
  <tr>
    @php
            $no = 1;
    @endphp
    @foreach ($data as $row)
    <td scope="row">{{ $no++ }}</td>
        <td>{{ $row -> nama }}</td>
        <td>{{ $row -> matakuliah }}</td>
        <td>{{ $row -> nilai }}</td>
        <td>{{ $row -> indeks }}</td>
        <td><a href="upload-file/{{ $row->uploadfile }}" target="_blank">{{ $row->uploadfile }}</a> <td>
  </tr>
  @endforeach
</table>

</body>
</html>


