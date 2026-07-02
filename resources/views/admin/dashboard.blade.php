@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="hero-section">

    <img src="{{ asset('img/admin1_cleanup.webp') }}"
         class="hero-img"
         alt="hero">

    <div class="hero-content1">

        <h1 class="m-5">
            Welcome, Admin!
        </h1>

        <div class="hero-buttons ps-5">

            <a href="{{ route('report') }}"
               class="btnn primary">

                Report Fraud

            </a>

            <a href="{{ url('/tips') }}"
               class="btnn secondary">

                Safety Tips

            </a>

        </div>

    </div>

</section>



<!-- MAIN SECTION -->
<section class="fraud-section">

    <!-- HEADER -->
    <div class="fraud-header">

        <h2 class="txt-light">
            Fraud Reports Management
        </h2>

        <!-- SEARCH -->
        <div class="search-box">

            <span>🔍</span>

            <input type="text"
                   id="search"
                   placeholder="Search anything...">

        </div>

    </div>



    <!-- STATS -->
    <div class="stats">

        <!-- TOTAL COMPLAINTS -->
        <div class="stat-card blue">

            <h4>
                Total Complaints
            </h4>

            <h2>
                {{ $totalComplaints ?? 0 }}
            </h2>

        </div>



        <!-- TOTAL REPORTS -->
        <div class="stat-card green">

            <h4>
                Fraud Reports
            </h4>

            <h2>
                {{ $totalReports ?? 0 }}
            </h2>

        </div>



        <!-- PENDING -->
        <div class="stat-card gold">

            <h4>
                Pending Cases
            </h4>

            <h2>
                {{ $pendingComplaints ?? 0 }}
            </h2>

        </div>



        <!-- RESOLVED -->
        <div class="stat-card red">

            <h4>
                Resolved Cases
            </h4>

            <h2>
                {{ $resolvedComplaints ?? 0 }}
            </h2>

        </div>

    </div>



    <!-- COMPLAINTS TABLE -->
    <div class="table-boxx">

        <h3 class="txt-navy text-center">

            Complaints Management

        </h3>

        <table>

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Name</th>

                    <th>Mobile</th>

                    <th>Complaint</th>

                    <th>Status</th>

                    <th>Date</th>

                </tr>

            </thead>

            <tbody>

                @forelse($complaints as $c)

                <tr>

                    <td>
                        {{ $c->complaint_id }}
                    </td>

                    <td>
                        {{ $c->name }}
                    </td>

                    <td>
                        {{ $c->mobile }}
                    </td>

                    <td>
                        {{ Str::limit($c->complaint, 50) }}
                    </td>

                    <td>

                        <span class="status

                        @if($c->status == 'Complaint Registered')
                            pending
                        @elseif($c->status == 'Under Investigation')
                            review
                        @else
                            resolved
                        @endif

                        ">

                            {{ $c->status }}

                        </span>

                    </td>

                    <td>
                        {{ $c->created_at->format('d M Y') }}
                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6"
                        class="text-center">

                        No complaints found

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>



    <!-- FRAUD REPORTS -->
    <div class="table-boxx mt-5">

        <h3 class="txt-navy text-center">

            Fraud Reports

        </h3>

        <table>

            <thead>

                <tr>

                    <th>Name</th>

                    <th>Email</th>

                    <th>Phone</th>

                    <th>Fraud Type</th>

                    <th>Evidence</th>

                    <th>Status</th>

                </tr>

            </thead>

            <tbody>

                @forelse($fraudReports as $report)

                <tr>

                    <td>
                        {{ $report->name }}
                    </td>

                    <td>
                        {{ $report->email }}
                    </td>

                    <td>
                        {{ $report->phone }}
                    </td>

                    <td>
                        {{ $report->fraud_type }}
                    </td>

                    <!-- EVIDENCE -->
                    <td>

                        @if($report->evidence)

                            <a href="{{ asset('uploads/'.$report->evidence) }}"
                               target="_blank"
                               class="view-btn">

                                View File

                            </a>

                        @else

                            No File

                        @endif

                    </td>

                    <!-- STATUS -->
                    <td>

                        <span class="status

                        @if($report->status == 'Pending')
                            pending
                        @elseif($report->status == 'Resolved')
                            resolved
                        @else
                            rejected
                        @endif

                        ">

                            {{ $report->status }}

                        </span>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6"
                        class="text-center">

                        No fraud reports found

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>



    <!-- CONTACT MESSAGES -->
    <div class="table-boxx mt-5">

        <h3 class="txt-navy text-center">

            Contact Messages

        </h3>

        <table>

            <thead>

                <tr>

                    <th>Name</th>

                    <th>Email</th>

                    <th>Subject</th>

                    <th>Message</th>

                    <th>Date</th>

                </tr>

            </thead>

            <tbody>

                @forelse($contacts as $contact)

                <tr>

                    <td>
                        {{ $contact->name }}
                    </td>

                    <td>
                        {{ $contact->email }}
                    </td>

                    <td>
                        {{ $contact->subject }}
                    </td>

                    <td>
                        {{ Str::limit($contact->message, 60) }}
                    </td>

                    <td>
                        {{ $contact->created_at->format('d M Y') }}
                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="5"
                        class="text-center">

                        No messages found

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>



    <!-- ALERTS SECTION -->
    <div class="table-boxx mt-5">

        <h3 class="txt-navy text-center">

            Latest Fraud Alerts

        </h3>

        <table>

            <thead>

                <tr>

                    <th>Title</th>

                    <th>Type</th>

                    <th>Risk</th>

                    <th>Date</th>

                </tr>

            </thead>

            <tbody>

                @forelse($alerts as $alert)

                <tr>

                    <td>
                        {{ $alert->title }}
                    </td>

                    <td>
                        {{ $alert->type }}
                    </td>

                    <td>

                        <span class="status

                        @if($alert->risk_level == 'high')
                            rejected
                        @elseif($alert->risk_level == 'medium')
                            pending
                        @else
                            resolved
                        @endif

                        ">

                            {{ ucfirst($alert->risk_level) }}

                        </span>

                    </td>

                    <td>
                        {{ $alert->alert_date }}
                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="4"
                        class="text-center">

                        No alerts found

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</section>



<!-- SEARCH SCRIPT -->
<script>

document.getElementById("search").addEventListener("keyup", function() {

    let value = this.value.toLowerCase();

    let rows = document.querySelectorAll("tbody tr");

    rows.forEach(row => {

        row.style.display =
            row.innerText.toLowerCase().includes(value)
            ? ""
            : "none";

    });

});

</script>

@endsection