@extends('admin.layouts.default')
@section('content')
    <link href="{{ asset('/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">

    <style>
        .br-pagebody {
            margin-top: 83px;
        }

        .dropdown-menu {
            width: 3%;
        }

    </style>
    <!-- ########## START: LEFT PANEL ########## -->

    @include('admin.layouts.sidebar')



    @include('admin.layouts.header')




    <div class="br-mainpanel">


        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">View Applications</h6>

                <div class="table-wrapper">

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">#</th>
                                <th class="wd-15p">Name</th>
                                <th class="wd-15p">Email</th>
                                <th class="wd-10p">date</th>
                                <td>
                                    Status
                                </td>
                                <th class="wd-10p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $i = 1;

                            ?>

                            @foreach ($view as $views)


                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $views->name }}</td>
                                    <td>{{ $views->email }}</td>
                                    <td>{{ $views->date }}</td>
                                    <td>
                                        @if ($views->status == 1)
                                            <Button class="btn btn-success">Approved</Button>

                                        @elseif($views->status == 2)
                                            <Button class="btn btn-danger">Dispproved</Button>


                                        @else

                                            <Button class="btn btn-primary">Pending</Button>

                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                                                <button class="btn btn-primary">Status &nbsp; &nbsp; <i
                                                        class="fas fa-caret-down"></i>
                                                </button>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-header wd-200">
                                                <ul class="list-unstyled user-profile-nav">

                                                    <li><a href="{{ url('/admin/approved', $views->id) }}"
                                                            style="    font-size: 15px;">Approved</a></li>

                                                    <li>
                                                        <a href="{{ url('/admin/disapproved', $views->id) }}"
                                                            style="    font-size: 15px;">Disapproved</a>
                                                    </li>
                                                </ul>
                                            </div><!-- dropdown-menu -->
                                        </div><!-- dropdown -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->





            </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->
        @include('admin.layouts.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script>
        $(function() {
            'use strict';

            $('#datatable1').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#datatable2').DataTable({
                bLengthChange: false,
                searching: false,
                responsive: true
            });

            // Select2
            $('.dataTables_length select').select2({
                minimumResultsForSearch: Infinity
            });

        });
    </script>
@endsection
