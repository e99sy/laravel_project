<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'Links')

@section('content')
    <div class="links-page">
        <!-- Links Section -->
        <div class="row links-container">
            <h1>Links</h1>
            <div class="col-6">
                <ul class="links-list">
                    <li><a href="{{ asset('uploads/CVFS-SCAN.pdf') }}" target="_blank" >Chitwan Valley Family Study-Study on Cognition and Aging in Nepal (CVFS-SCAN)</a></li>
                    <li><a href="{{ asset('uploads/NHRC Summary_10122022.pdf') }}" target="_blank" >NHRC Summary_10122022</a></li>
                    <li><a href="{{ asset('uploads/Project_Details.pdf') }}" target="_blank" >Project Details</a></li>
                    <li><a href="{{ asset('uploads/Longitudinal Aging Study in Nepal.pptx') }}" target="_blank" >Longitudinal Aging Study in Nepal</a></li>
                    
                    <li><a href="#" target="_blank">Health and Retirement Study</a></li>
                    <li><a href="#" target="_blank">Puerto Rican Elderly: Health Conditions (PREHCO) Project</a></li>
                    <li><a href="#" target="_blank">Survey on Health, Well-Being, and Aging in Latin America and the
                            Caribbean (SABE)</a></li>
                    <li><a href="#" target="_blank">The Costa Rican Longevity and Healthy Aging Study (CRELES)</a>
                    </li>
                    <li><a href="#" target="_blank">Gateway to Global Aging Data</a></li>
                </ul>
            </div>


            <!-- Sidebar with the orange box -->
            <div class="col">
                <div class="sidebar">
                    <div class="highlight-box">
                        <p>CADAS seeks to cross-harmonize with 10/66, and the HCAP family of studies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
