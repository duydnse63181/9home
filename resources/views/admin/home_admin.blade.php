
@extends('admin.master_admin')

@section('content')
<style>
    .col-5 img {
    width: 100%;
    height: 6rem!important;
    display:block;
    }

    .img-circle {
    border-radius: 0;
}
  
}

</style>


  <!-- Content Wrapper. Contains page content -->

  <!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card card-solid">
  <div class="card-body pb-0">
    <div class="row d-flex align-items-stretch">
    @if(!empty($data) && $data->count())
    @foreach ($data as $key => $blog)
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
          <div class="card-header text-muted border-bottom-0">
            Home 
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <!-- <h2 class="lead"><b>{{$blog->id}}</b></h2> -->
                <p class="text-muted text-sm"></p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>{{$blog->name}}</li>
                </ul>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fa fa-calendar"></i></span>{{$blog->created_at}}</li>
                </ul>
              </div>
              <div class="col-5 text-center">
                <img src="{{URL::asset($blog->image)}}" alt="" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
            
              <a href="{{url('/blog_delete',['id'=>$blog->id]) }}" class="btn btn-sm bg-teal">
                <i class="fas fa-trash-alt"></i>
              </a>
              <a href="{{url('/blog_details',['id'=>$blog->id]) }}" class="btn btn-sm btn-primary">
                View More
              </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @else
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  {!! $data->links() !!}
    <!-- <nav aria-label="Contacts Page Navigation">
      <ul class="pagination justify-content-center m-0">
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
      </ul>
    </nav> -->
  </div>
  <!-- /.card-footer -->
</div>
<!-- /.card -->

</section>




@endsection


