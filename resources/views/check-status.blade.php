@extends('layouts.app')

@section('content')

<section class="check-section">

    <div class="container-custom">

        <!-- HEADER -->
        <div class="header-text">
            <h1 class="gradient-text mt-5 ms-3">
                Check Complaint Status
            </h1>

            <p class="gradient-text ms-3">
                Track the status of your cyber crime complaint.
            </p>
        </div>

        <!-- FORM -->
        <div class="form-wrapper">

            <h3>Track Your Complaint</h3>

            <!-- SUCCESS MESSAGE -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- ERROR MESSAGE -->
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <!-- VALIDATION ERRORS -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>
                </div>
            @endif

            <form method="POST" action="/track-status">

                @csrf

                <!-- Complaint ID -->
                <div class="form-row">

                    <label>Complaint ID:</label>

                    <input
                        type="text"
                        name="complaint_id"
                        placeholder="Enter Complaint ID"
                        value="{{ old('complaint_id') }}"
                    >

                </div>

                <!-- Mobile -->
                <div class="form-row">

                    <label>Registered Mobile Number:</label>

                    <div class="mobile-input">

                        <span class="txt-light">+91</span>

                        <input
                            type="text"
                            name="mobile"
                            placeholder="Enter Mobile Number"
                            value="{{ old('mobile') }}"
                        >

                    </div>

                </div>

                <button type="submit" class="track-btn">
                    Track Status
                </button>

            </form>

            <!-- STATUS RESULT -->
            @if(session('status'))

                <div class="alert alert-success mt-4">

                    <h4>Complaint Found</h4>

                    <hr>

                    <p>
                        <strong>Complaint ID:</strong>
                        {{ session('complaintData')->complaint_id }}
                    </p>

                    <p>
                        <strong>Name:</strong>
                        {{ session('complaintData')->name }}
                    </p>

                    <p>
                        <strong>Mobile:</strong>
                        {{ session('complaintData')->mobile }}
                    </p>

                    <p>
                        <strong>Status:</strong>
                        {{ session('status') }}
                    </p>

                </div>

            @endif

        </div>

        <!-- STATUS CARDS -->
        <div class="status-cards">

            <!-- CARD 1 -->
            <div class="card green">

                <div class="card-row1">

                    <div class="icon2">✔</div>

                    <div class="card-text">

                        <h3>Complaint Registered</h3>

                        <hr>

                        <p class="txt-light">
                            Your complaint has been successfully registered.
                        </p>

                    </div>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="card dark">

                <div class="card-row1">

                    <div class="icon2">🔍</div>

                    <div class="card-text">

                        <h3>Under Investigation</h3>

                        <hr>

                        <p class="txt-light">
                            Your complaint is currently under investigation.
                        </p>

                    </div>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="card gold">

                <div class="card-row1">

                    <div class="icon2">🛡</div>

                    <div class="card-text">

                        <h3>Action Taken</h3>

                        <hr>

                        <p class="txt-light">
                            Action has been taken on your complaint.
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- NOTE -->
        <div class="note">

            <h4>Important Note:</h4>

            <ul>

                <li>
                    Keep your Complaint ID and Registered Mobile Number handy.
                </li>

                <li>
                    Updates may take time, please check back regularly.
                </li>

                <li>
                    For any assistance, contact our helpline.
                </li>

            </ul>

        </div>

    </div>

</section>

@endsection@extends('layouts.app')

@section('content')

<section class="check-section">

    <div class="container-custom">

        <!-- HEADER -->
        <div class="header-text">
            <h1 class="gradient-text mt-5 ms-3">
                Check Complaint Status
            </h1>

            <p class="gradient-text ms-3">
                Track the status of your cyber crime complaint.
            </p>
        </div>

        <!-- FORM -->
        <div class="form-wrapper">

            <h3>Track Your Complaint</h3>

            <!-- SUCCESS MESSAGE -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- ERROR MESSAGE -->
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <!-- VALIDATION ERRORS -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>
                </div>
            @endif

            <form method="POST" action="/track-status">

                @csrf

                <!-- Complaint ID -->
                <div class="form-row">

                    <label>Complaint ID:</label>

                    <input
                        type="text"
                        name="complaint_id"
                        placeholder="Enter Complaint ID"
                        value="{{ old('complaint_id') }}"
                    >

                </div>

                <!-- Mobile -->
                <div class="form-row">

                    <label>Registered Mobile Number:</label>

                    <div class="mobile-input">

                        <span class="txt-light">+91</span>

                        <input
                            type="text"
                            name="mobile"
                            placeholder="Enter Mobile Number"
                            value="{{ old('mobile') }}"
                        >

                    </div>

                </div>

                <button type="submit" class="track-btn">
                    Track Status
                </button>

            </form>

            <!-- STATUS RESULT -->
            @if(session('status'))

                <div class="alert alert-success mt-4">

                    <h4>Complaint Found</h4>

                    <hr>

                    <p>
                        <strong>Complaint ID:</strong>
                        {{ session('complaintData')->complaint_id }}
                    </p>

                    <p>
                        <strong>Name:</strong>
                        {{ session('complaintData')->name }}
                    </p>

                    <p>
                        <strong>Mobile:</strong>
                        {{ session('complaintData')->mobile }}
                    </p>

                    <p>
                        <strong>Status:</strong>
                        {{ session('status') }}
                    </p>

                </div>

            @endif

        </div>

        <!-- STATUS CARDS -->
        <div class="status-cards">

            <!-- CARD 1 -->
            <div class="card green">

                <div class="card-row1">

                    <div class="icon2">✔</div>

                    <div class="card-text">

                        <h3>Complaint Registered</h3>

                        <hr>

                        <p class="txt-light">
                            Your complaint has been successfully registered.
                        </p>

                    </div>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="card dark">

                <div class="card-row1">

                    <div class="icon2">🔍</div>

                    <div class="card-text">

                        <h3>Under Investigation</h3>

                        <hr>

                        <p class="txt-light">
                            Your complaint is currently under investigation.
                        </p>

                    </div>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="card gold">

                <div class="card-row1">

                    <div class="icon2">🛡</div>

                    <div class="card-text">

                        <h3>Action Taken</h3>

                        <hr>

                        <p class="txt-light">
                            Action has been taken on your complaint.
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- NOTE -->
        <div class="note">

            <h4>Important Note:</h4>

            <ul>

                <li>
                    Keep your Complaint ID and Registered Mobile Number handy.
                </li>

                <li>
                    Updates may take time, please check back regularly.
                </li>

                <li>
                    For any assistance, contact our helpline.
                </li>

            </ul>

        </div>

    </div>

</section>

@endsection