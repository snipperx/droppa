@extends('layouts.default')

@section('content')

    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin page-header -->
        <h1 class="page-header pull-left">Droppa for Business <small></small></h1>

        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-12">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12">
                        <!-- begin panel -->
                        <div class="panel panel-inverse" data-sortable-id="form-slider-switcher-4">
                            <div class="alert alert-info fade in">
                                <br>
                                <h4>Retail Booking</h4>
                                <br>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <form name="bookinh-form" class="form-horizontal" method="POST"
                                          action="/booking">
                                    {{ csrf_field() }}
                                    <!-- begin col-4 -->
                                        <div class="col-md-4">
                                            <br>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Pick up
                                                    Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="address"
                                                           name="pick_up_address"
                                                           placeholder="Pick up Address">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="name" name="name"
                                                           placeholder="name">
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Phone
                                                    Number</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="masked-input-phone"
                                                           name="phone"
                                                           placeholder="(999) 999-9999"/>
                                                </div>
                                            </div>
                                            <br> <br>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Pick Up
                                                    Date</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control"
                                                           id="datepicker-autoClose" name="date"
                                                           placeholder="Auto Close Datepicker"/>
                                                </div>
                                                <label for="inputPassword3" class="col-sm-2 col-form-label"> Pick Up
                                                    Time</label>
                                                <div class="col-sm-4">
                                                    <div class="input-group date" id="datetimepicker2">
                                                        <input type="text" name="time" class="form-control"/>
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-time"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <br> <br>
                                            <div class="handle-counter" id="handleCounter">
                                                <button class="counter-minus btn btn-primary">-</button>
                                                <input type="text" value="3">
                                                <button class="counter-plus btn btn-primary">+</button>
                                            </div>
                                            <br><br>

                                            <!-- end row -->
                                        </div>
                                        <div class="col-md-4">

                                            <!-- begin row -->
                                            <h1>here</h1>
                                            <!-- end row -->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-9 -->
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Drop off
                                                        Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="drop_of_address"
                                                               name="drop_of_address"
                                                               placeholder="drop off Address">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group row">
                                                    <label for="inputPassword3"
                                                           class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="drop_of_name"
                                                               name="drop_of_name"
                                                               placeholder="name">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone
                                                        Number</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="drop_of_phone"
                                                               name="drop_of_phone"
                                                               placeholder="(999) 999-9999"/>
                                                    </div>
                                                </div>
                                                <br> <br>
                                                <div class="form-group row">
                                                    <label for="inputPassword3"
                                                           class="col-sm-2 col-form-label">Comment</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" id="comment" name="comment"
                                                                  placeholder="Comment" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <br> <br> <br>
                                                <div class="col-md-9">
                                                    <button type="submit" class="btn btn-sm btn-info pull-right">
                                                    CREATE BOOKING
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="row">
                        <!-- begin col-10 -->
                        <div class="col-md-12">
                            <!-- begin panel -->
                            <div class="panel panel-inverse">
                                <div class="alert alert-info fade in">
                                    <br>
                                    <h4>Drop Off Address(s)</h4>
                                    <br>
                                </div>
                                <div class="panel-body">
                                    <table id="data-table" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th width="5"></th>
                                            <th>Date</th>
                                            <th>Pick Up Address</th>
                                            <th>Drop Off Address</th>
                                            <th>Vehicle Type</th>
                                            <th>Labour(s)</th>
                                            <th>price</th>
                                            <th width="8%"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($booking) > 0)
                                            @foreach ($booking as $bookings)
                                                <tr class="odd gradeX">
                                                    <td>{{$bookings->id}}</td>
                                                    <td>{{ !empty($bookings->date ) ? date("y F  Y, g:i a",  $bookings->date) : ''}}</td>
                                                    <td>{{ !empty($bookings->pick_up_address ) ? $bookings->pick_up_address : '' }}</td>
                                                    <td>{{ !empty($bookings->drop_of_address ) ? $bookings->drop_of_address : '' }}</td>
                                                    <td>{{ !empty($bookings->vehicle_name ) ? $bookings->vehicle_name : '' }}</td>
                                                    <td>{{ !empty($bookings->labours ) ? $bookings->labours : '' }}</td>
                                                    <td>{{ !empty($bookings->labours ) ? $bookings->labours : '' }}</td>
                                                    <td>delete</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        @else
                                            <tr id="categories-list">
                                                <td colspan="12">
                                                    <div class="alert alert-danger alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                            &times;
                                                        </button>
                                                        No Data to display, please start by adding a new Information..
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                            <!-- end panel -->
                        </div>
                        <!-- end col-10 -->
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end #content -->

@endsection
