
@foreach ( $data1 as $datass )
<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-0">
    <a href="{{url('/overview',[$datass->slug])}}" style="text-decoration: none;">

        <div class="explore-card mt-3 mx-3">
            <div class="explore-card-img">
                <img
               style="    max-height: 190px;min-width: 240px;max-width: 240px;min-height: 190px;" src=" @if (isset($datass->large_image_url)){{$datass->large_image_url}} @else https://lh3.googleusercontent.com/6ryiJWWrm27TkbXYEhfxfhrA5H6eqUQXih8UQSeHx5pwVFdS3jJTBwNXi_9N3EP2pO-czkyKGqV9Pnwvjn8qIAWeWSkkFEpMJlfH=s120  @endif " />
            </div>
            <div class="explore-card-body m-3">
                <h5 style="line-height: 20px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;word-break: break-all;">{{$datass->name}}</h5>
                <div class="d-flex align-items-center justify-content-between mt-4">
                    <div class="explore-card-bodyimg">
                        <img
                            src=" @if(isset($datass->large_image_url)) {{ $datass->large_image_url}} @else https://lh3.googleusercontent.com/6ryiJWWrm27TkbXYEhfxfhrA5H6eqUQXih8UQSeHx5pwVFdS3jJTBwNXi_9N3EP2pO-czkyKGqV9Pnwvjn8qIAWeWSkkFEpMJlfH=s120  @endif " />
                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            class="project-card_icon__3yC3z mx-2">
                            <path
                                d="M3.5 11.448L0 6.417 3.5 8.53 7 6.417l-3.5 5.03zm0-3.5L0 5.76 3.5 0 7 5.76 3.5 7.948z"
                                fill="#8A8A8A"></path>
                        </svg>
                    </div>
                    <span>{{$datass->stats->total_supply}}ETH</span>
                </div>
            </div>
        </div>
    </a>
</div>

@endforeach

