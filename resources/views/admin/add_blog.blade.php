@extends('admin.master_admin')

@section('content')


<style>
.img-circle {
    border-radius: 0;
}
#upload {
    opacity: 0;
}

#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    border: 2px dashed rgba(255, 255, 255, 0.7);
    padding: 1rem;
    position: relative;
}

.image-area::before {
    content: 'Uploaded image result';
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.image-area img {
    z-index: 2;
    position: relative;
}


#cke_1_contents {
  height: 500px !important;
}




</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/home')}}" class="brand-link">
      <span class="brand-text font-weight-light">Admin 9Home</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::asset('img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        @if(Auth::check())
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        @else
          <a href="#" class="d-block"></a>
        @endif
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('homead')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Page</p>
                </a>
              </li>
              
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('/add_blog') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blog</p>
                </a>
              </li>
              
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

        <div class="card-body">
           <form role="form" action="{{route('blog.admin_addhandle')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label>Name</label>
                      <input class="form-control" type="text" name="name" placeholder="Enter">
                      </div>
                      
                      <div class="mb-3">
                      <label>Description</label>
                      <input class="form-control" type="text" name="description" placeholder="Enter">
                      </div>

                      <div class="panel panel-primary">
                        <label>Image</label>
                          <div class="panel-body">
                      
                          @if ($message = Session::get('success'))
                          <div class="alert alert-success alert-block">
                              <button type="button" class="close" data-dismiss="alert">×</button>
                                  <strong>{{ $message }}</strong>
                          </div>
                          <img src="images/{{ Session::get('image') }}">
                          @endif
                      
                          @if (count($errors) > 0)
                              <div class="alert alert-danger">
                                  <strong>Whoops!</strong> There were some problems with your input.
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @endif
                      
                          
                          
                              <div class="row">
                              
                                  <div class="col-md-6">
                                  <input type="file" name="image" id="imglink" class="form-control">
                                  </div>
                                  
                      
                              </div>
                          
    
                        </div>
                      </div>
                  


                      <div class="mb-3">
                      <label>Category: </label>
                      
                            <select name="category_id" class="form-control input-inline" style="width: 200px">
                            @foreach($cate as $cate)
                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                            @endforeach
                            </select>
                      
                      </div>


                      <div class="mb-3">
                      <label>Content</label>
                      <textarea name="content" id="editor1"></textarea>
                      </div>

                      <div class="mb-3">
                        <div class="btn-submit">
                          <button type="submit" class="btn btn-primary" style="float:right">Submit</button>
                        </div>   
            </form>
        </div>
        <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        <script type="text/javascript">
        CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
        });
        </script>

@endsection