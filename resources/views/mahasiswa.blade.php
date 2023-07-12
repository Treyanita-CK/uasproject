@extends('admin.main')
@section('titlekonten','mahasiswa')
@section('title','mahasiswa')
@section('konten')
 <!-- /.card-header -->
<p class="text-center" style="margin-top: 120px; ">Data Mahasiswa</p>
 <table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Semester</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;?>
    @foreach ($mahasiswa as $data)
    <th>
 
      <td>{{$no++}}</td>
      <td>{{$data->nim}}</td>
      <td>{{$data->nama}}</td>
      <td>{{$data->semester}}</td>


      
  </tbody>
  @endforeach
</table>
</table>


                 
  
@endsection
