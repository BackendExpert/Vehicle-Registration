    @extends('layouts.header')

    <style>
        .print-title{
            text-align: center;
            padding: 40px 0;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="print-title">
                    <h1>Online Vehicle Registration Application</h1>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <b>{{ $view_vehicle->owner }}</b>
                        </div>
                        <div class="col-lg-6">
                            @php
                                $mytime = Carbon\Carbon::now();
                                echo $mytime->toDateTimeString();
                            @endphp 
                        </div>
                    </div>
                    <br>
                    <table class="table" border="1">
                        <tr>
                            <td colspan="2"><b>Vehicle Owner</b></td>
                            <td colspan="2">{{ $view_vehicle->owner }}</td>
                        </tr>
                        <tr>
                            <td><b>Vehicle Plate Number</b></td>
                            <td>
                                @if (Auth::user()->name == $view_vehicle->owner)
                                    {{ $view_vehicle->vehicle_plate_no }}
                                @else
                                    ******************
                                @endif
                            </td>
                            <td><b>Vehicle Chassis Number</b></td>
                            <td>{{ $view_vehicle->vehicle_chassis_no }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Vehicle Registed Number</b></td>
                            <td colspan="2">{{ $view_vehicle->vehicle_registed_no }}</td>
                        </tr>
                        <tr>
                            <td><b>Vehicle Type</b></td>
                            <td>{{ $view_vehicle->vehicle_type }}</td>
                            <td><b>Vehicle Model</b></td>
                            <td>{{ $view_vehicle->vehicle_model }}</td>
                        </tr>
                        <tr>
                            <td><b>Vehicle Color</b></td>
                            <td>{{ $view_vehicle->vehicle_color }}</td>
                            <td><b>Vehicle Seats</b></td>
                            <td>{{ $view_vehicle->seats }}</td>
                        </tr>
                        <tr>
                            <td><b>Vehicle Added Date</b></td>
                            <td>{{ $view_vehicle->created_at }}</td>
                            <td><b>Last Update</b></td>
                            <td>{{ $view_vehicle->updated_at }}</td>
                        </tr>
                    </table>

                    * This is computer generated Document
                    
                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="row">
                        <div class="col-lg-6">
                            <span style="text-align: center; padding-bottom: -20px;">
                                @php
                                    $mytime = Carbon\Carbon::now();
                                    echo $mytime->toDateTimeString();
                                @endphp 
                            </span><br>
                            <span>_________________________________</span>
                            <p><b>Generated Time</b></p>
                        </div>
                        <div class="col-lg-6">
                            <span style="text-align: center; padding-bottom: -20px;">{{ $view_vehicle->owner }}</span><br>
                            <span>_________________________________</span>
                            <p><b>Vehicle Owner</b></p>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>
                    <i class="fas fa-copyright"></i> All Rights Reserved - Online Vehicle Registration Platform - 2023
                    <br><br>
                    <button class="btn btn-primary" onclick="window.print();">Print</button>
                </div>            
            </div>
        </div>
    </div>


