@extends('layouts.app')

@section('content')

<!-- 🔹 HERO SECTION -->
<section class="hero-section">

    <img src="{{ asset('img/admin1_cleanup.webp') }}" class="hero-img" alt="hero">

    <div class="hero-content1">
        <h1 class="m-5">Welcome, Admin!</h1>
         <br>
        <div class="hero-buttons ps-5 ">
            <a href="#" class="btnn primary">Report Fraud</a>
            <a href="#" class="btnn secondary">Safety Tips</a>
        </div>
    </div>

</section>


<!-- 🔹 FRAUD SECTION -->
<section class="fraud-section">

    <!-- HEADER -->
    <div class="fraud-header">
        <h2 class="txt-light">Fraud Reports Management</h2>

        <div class="search-box">
            <span>🔍</span>
            <input type="text" id="search" placeholder="Search complaints...">
        </div>
    </div>

    <!-- CARDS -->
    <div class="stats">

        <div class="stat-card blue">
            <div class="card-roww">
                <span class="iconn">✔</span>
                <div>
                    <h4>Total Reports</h4>
                    <h2>{{ $total ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <div class="stat-card green">
            <div class="card-roww">
                <span class="iconn">⏳</span>
                <div>
                    <h4>Under Review</h4>
                    <h2>{{ $pending ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <div class="stat-card gold">
            <div class="card-roww">
                <span class="iconn">✔</span>
                <div>
                    <h4>Resolved</h4>
                    <h2>{{ $resolved ?? 0 }}</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- TABLE -->
    <div class="table-boxx">
        <table>
            <h3 class="txt-navy text-center">Fraud Reports Management</h3>
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">User</th>
                    <th class="px-4 py-2 text-left">Type</th>
                    <th class="px-4 py-2 text-left">Date</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Action</th>
                </tr>
            </thead>

            <tbody id="tableData">

                @forelse($complaints as $c)
                <tr>
                    <td class="px-4 py-2 text-left">{{ $c->id }}</td>
                    <td class="px-4 py-2 text-left" >{{ $c->name }}</td>
                    <td lass="px-4 py-2 text-left" >{{ $c->type }}</td>
                    <td lass="px-4 py-2 text-left" >{{ $c->date }}</td>
                    <td>
                        <span class="status {{ strtolower($c->status) }}">
                            {{ $c->status }}
                        </span>
                    </td>
                    <td>
                        <a href="#" class="view-btn">View</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">
                        No complaints found
                    </td>
                </tr>
                @endforelse

            </tbody>
        </table>

    </div>

</section>


<!-- 🔹 SEARCH SCRIPT -->
<script>
document.getElementById("search").addEventListener("keyup", function() {
    let value = this.value.toLowerCase();
    let rows = document.querySelectorAll("#tableData tr");

    rows.forEach(row => {
        row.style.display = row.innerText.toLowerCase().includes(value)
            ? "" : "none";
    });
});
</script>

@endsection