@include('Master.header')

<div class="container">
   <div class="row justify-content-center">
      <div class="col-6">
         <div class="card mt-5">
            <div class="card-body">
               <h4 class="card-title">Admin Login</h4>
               @if (Session::get('error'))
                  <div class="alert alert-danger">
                     {{ Session::get('error') }}
                  </div>
               @endif
               <form class="form-horizontal p-t-20" action="{{route('admin.login_check')}}" method="POST">
                  @csrf
                  <div class="form-group row">
                     <label for="exampleInputEmail3" class="col-sm-3 control-label">Email*</label>
                     <div class="col-sm-9">
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">
                                 <i class="ti-email"></i>
                              </span>
                           </div>
                           <input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Enter email">
                        </div>
                        @error('email')
                            {{$message}}
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="inputPassword4" class="col-sm-3 control-label">Password*</label>
                     <div class="col-sm-9">
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">
                                 <i class="ti-lock"></i>
                              </span>
                           </div>
                           <input type="password" class="form-control" name="password" id="exampleInputpwd4" placeholder="Enter pwd">
                        </div>
                        @error('password')
                            {{$message}}
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="offset-sm-3 col-sm-9">
                        <div class="checkbox checkbox-success">
                           <input id="checkbox33" type="checkbox">
                           <label for="checkbox33">Check me out !</label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group row m-b-0">
                     <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

@include('Master.footer')
