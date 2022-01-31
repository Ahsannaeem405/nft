
<div class="br-header">
    <div class="br-header-left">
      <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>

    </div><!-- br-header-left -->
    <div class="br-header-right">
      <nav class="nav">

        <div class="dropdown">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name hidden-md-down">{{Auth::user()->name}}</span>
            <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
            <span class="square-10 bg-success"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-200">
            <ul class="list-unstyled user-profile-nav">

                <li><a data-toggle="modal" data-target="#exampleModal" ><i class="icon ion-ios-person"></i> Send Email</a></li>

              <li><a href="{{url('admin/edit/profile')}}"><i class="icon ion-ios-person"></i> Edit Profile</a></li>

              <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
              <i class="icon ion-power"></i>   {{ __('Sign Out') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
              </li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </nav>

    </div><!-- br-header-right -->
  </div><!-- br-header -->


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="    width: 100%;" role="document">
          <div class="modal-content">
            <form action="{{url('admin/send/mail')}}" method="POST">
                @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Send Email</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
<label for="" style="    margin-top: 11px;">Enter Subject</label>
             <input type="text" class="form-control" placeholder="Enter Subject" name="subject" id="">
             <label for="">Enter Message</label>

             <textarea name="msg" id="" placeholder="Enter Message" class="form-control"  rows="5">
             </textarea>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Send">
            </div>
        </form>
          </div>
        </div>
      </div>

