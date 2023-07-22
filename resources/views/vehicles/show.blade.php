@extends('layouts.header')

<style>
    .print-title{
        text-align: center;
        padding: 40px 0;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
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
                        <td>{{ $view_vehicle->vehicle_plate_no }}</td>
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
                </table>
            </div>            
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>