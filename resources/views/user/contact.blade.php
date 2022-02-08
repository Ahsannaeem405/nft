@extends('user.layout.default')
@section('content')

    <!--Nav Bar start-->
@include('user.layout.header')
    <!--Nav Bar end-->
    <!--contact us start-->
    <div class="container-fluid my-5">
        <div class="row mt-5 px-sm-5 s1 px-1 d-flex justify-content-center">
            <div class="col-md-10 s2 col-lg-7 py-4 px-1 px-xl-5">
                <div class="contact-help mx-2 mx-md-5 mb-4">
                    <div>
                        <h3>How Can We Help?</h3>
                        <p>Please select a topic below related to your inquiry. If you don't find what you need, fill out our contact form.</p>
                    </div>
                </div>
                <div class="quiry-questions mx-2 mx-md-5 ">
                    <div id="accordion">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0 d-flex justify-content-between align-item-center">Question 1
                              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-plus"></i>
                              </button>
                            </h5>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0 d-flex justify-content-between align-item-center">Question 2
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-plus"></i>
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0 d-flex justify-content-between align-item-center">Question 3
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fas fa-plus"></i>
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-5 px-0 col-xl-4">
                <div class="contact-form py-5 px-2 px-md-5">
                    <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">First Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Last Name</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress">Email Address</label>
                          <input type="email" class="form-control" id="inputAddress" placeholder="Your Email ">
                        </div>
                        <div class="form-group">
                          <label for="inputAddress2">Subject</label>
                          <input type="text" class="form-control" id="inputsubject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="inputmessage">Message</label>
                            <textarea id="w3review" name="w3review" id="inputmessage" class="form-control" rows="7" cols="100">Your message!</textarea>
                          </div>

                        <button type="submit" class="btn btn-primary w-100 mt-3">Send Message</button>
                      </form>
                </div>
            </div>


        </div>
    </div>
    <!--contact us end-->
    <!--footer blcok start-->
    @include('user.layout.footer')
@endsection
