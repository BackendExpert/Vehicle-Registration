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
                        <td>Vehicle Owner</td>
                        <td>{{ $view_vehicle->owner }}</td>
                    </tr>
                </table>
            </div>            
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>