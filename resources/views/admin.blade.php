@extends('layouts.header')
@section('content')

<div class="container">
    <h1 class="mlg-name">Welcome to MLG College of Learning</h1>

    <!-- Widget Container -->
    <div class="widget-container">
        <!-- Student ID Count Widget -->
        <div class="widget-box" id="student-id-box" onclick="openModal('student')">
            <h3>Created Student IDs</h3>
            <p id="student-id-count">500</p> <!-- Static number for now -->
        </div>

        <!-- Employee ID Count Widget -->
        <div class="widget-box" id="employee-id-box" onclick="openModal('employee')">
            <h3>Created Employee IDs</h3>
            <p id="employee-id-count">120</p> <!-- Static number for now -->
        </div>
    </div>
    </div>

    <!-- Modal for Student Profiles -->
    <div id="student-modal" class="modal">
    <div class="modal-content">
        <!-- Font Awesome X Icon to close the modal -->
        <span class="close" onclick="closeModal('student')">
            <i class="fas fa-times"></i>
        </span>
        <h2>Student IDs</h2>
        <div class="profile-grid">
            <!-- Example Student Profiles -->
            <div class="profile-card">
                <img src="{{ asset('img/kobe.jpg')}}" alt="Student 1">
                <p>Bryan Dacera</p>
            </div>
            <div class="profile-card">
                <img src="{{ asset('img/kobe.jpg')}}" alt="Student 1">
                <p>Bryan Dacera</p>
            </div>
            <div class="profile-card">
                <img src="{{ asset('img/kobe.jpg')}}" alt="Student 2">
                <p>Bryan Dacera</p>
            </div>
            <div class="profile-card">
                <img src="{{ asset('img/kobe.jpg')}}" alt="Student 3">
                <p>Bryan Dacera</p>
            </div>
            <div class="profile-card">
                <img src="{{ asset('img/kobe.jpg')}}" alt="Student 4">
                <p>Bryan Dacera</p>
            </div>
        </div>
    </div>
    </div>


    <div id="employee-modal" class="modal">
    <div class="modal-content">

        <span class="close" onclick="closeModal('employee')">
            <i class="fas fa-times"></i>
        </span>
        <h2>Employee IDs</h2>
        <div class="profile-grid">
            <div class="profile-card">
                <img src="kobe.jpg" alt="Student 4">
                <p>Bryan Dacera</p>
            </div>
            <div class="profile-card">
                <img src="kobe.jpg" alt="Student 4">
                <p>Bryan Dacera</p>
            </div>
            <div class="profile-card">
                <img src="kobe.jpg" alt="Student 4">
                <p>Bryan Dacera</p>
            </div>
            <div class="profile-card">
                <img src="kobe.jpg" alt="Student 4">
                <p>Bryan Dacera</p>
            </div>
            <div class="profile-card">
                <img src="kobe.jpg" alt="Student 4">
                <p>Bryan Dacera</p>
            </div>
            <div class="profile-card">
                <img src="kobe.jpg" alt="Student 4">
                <p>Bryan Dacera</p>
            </div>
            <div class="profile-card">
                <img src="kobe.jpg" alt="Student 4">
                <p>Bryan Dacera</p>
            </div>
            <div class="profile-card">
                <img src="kobe.jpg" alt="Student 4">
                <p>Bryan Dacera</p>
            </div>
            <div class="profile-card">
                <img src="kobe.jpg" alt="Student 4">
                <p>Bryan Dacera</p>
            </div>
        </div>
    </div>
    </div>

    <script src="{{ asset('js/navbar.js') }}"></script>



@endsection
