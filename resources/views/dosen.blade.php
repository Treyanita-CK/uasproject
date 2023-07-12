@extends('admin.main')
@section('titlekonten','dosen')
@section('title','dosen')
@section('konten')
 <!-- /.card-header -->

 <h3 class="title"></h3>
        <h5 class="description"></h5>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <h1 class="title text-center">Dosen</h1>
            <div class="nav-align-center">
              <ul class="nav nav-pills nav-pills-primary nav-pills-just-icons" role="tablist">
                <li class="nav-item">
                  
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home" role="tablist">
                    <i class="now-ui-icons design_image"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Tab panes -->
          <div class="tab-content gallery">
            <div class="tab-pane active" id="home" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                    <img src="template2/assets/img/dosen2.jpg" alt="" class="img-raised">
                    <img src="template2/assets/img/.jpg" alt="" class="img-raised">
                  </div>
                  <div class="col-md-6">
                    <img src="template2/assets/img/dosen3.jpg" alt="" class="img-raised">
                    <img src="template2/assets/img/.jpg" alt="" class="img-raised">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile" role="tabpanel">
              <div class="col-md-5 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-5">
                    <img src="template2/assets/img/.jpg" class="img-raised">
                    <img src="template2/assets/img/jpg" alt="" class="img-raised">
                  </div>
                  <div class="col-md-5">
                    <img src="template2/assets/img/.jpg" alt="" class="img-raised">
                    <img src="template2/assets/img/.jpg" alt="" class="img-raised">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="messages" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                    <img src="../assets/img/bg3.jpg" alt="" class="img-raised">
                    <img src="../assets/img/bg8.jpg" alt="" class="img-raised">
                  </div>
                  <div class="col-md-6">
                    <img src="../assets/img/bg7.jpg" alt="" class="img-raised">
                    <img src="../assets/img/bg6.jpg" class="img-raised">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
    </footer>
  </div>
<h1 class="text-center" style="margin-top: 120px; ">Data Dosen</h1>
 <table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">No</th>
      <th scope="col">Nama Dosen</th>
      <th scope="col">Mata Kuliah</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;?>
    @foreach ($dosen as $data)
    <th>
 
      <td>{{$no++}}</td>
      <td>{{$data->nama}}</td>
      <td>{{$data->mk}}</td>
     


      
  </tbody>
  @endforeach
</table>
</table>


                 
  
@endsection
