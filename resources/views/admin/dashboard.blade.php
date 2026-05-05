@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('styles')
<style>
    .stat-card {
        cursor: pointer;
    }
    
    .stat-card .card-body {
        position: relative;
        z-index: 1;
    }
    
    .stat-icon {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 3rem;
        opacity: 0.2;
        z-index: 0;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card card-stats primary stat-card">
            <div class="card-body">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="text-muted text-uppercase small">Total Users</div>
                <div class="h3 mb-0">{{ $totalUsers ?? 0 }}</div>
                <small class="text-success">
                    <i class="fas fa-arrow-up"></i> {{ $newUsersThisMonth ?? 0 }} new this month
                </small>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card card-stats success stat-card">
            <div class="card-body">
                <div class="stat-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="text-muted text-uppercase small">Admin Users</div>
                <div class="h3 mb-0">{{ $totalAdmins ?? 0 }}</div>
                <small class="text-muted">System administrators</small>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card card-stats info stat-card">
            <div class="card-body">
                <div class="stat-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="text-muted text-uppercase small">Growth Rate</div>
                <div class="h3 mb-0">+23%</div>
                <small class="text-success">Since last month</small>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card card-stats warning stat-card">
            <div class="card-body">
                <div class="stat-icon">
                    <i class="fas fa-calendar"></i>
                </div>
                <div class="text-muted text-uppercase small">Active Sessions</div>
                <div class="h3 mb-0">12</div>
                <small class="text-muted">Currently online</small>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">User Registration Trend</h6>
            </div>
            <div class="card-body">
                <canvas id="userChart" height="300"></canvas>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Recent Users</h6>
            </div>
            <div class="card-body">
                @if(isset($recentUsers) && count($recentUsers) > 0)
                    <div class="list-group">
                        @foreach($recentUsers as $user)
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-user-circle fa-2x text-primary me-2"></i>
                                        <strong>{{ $user->name }}</strong><br>
                                        <small class="text-muted">{{ $user->email }}</small>
                                    </div>
                                    <small>{{ $user->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-muted text-center">No recent users</p>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Quick Actions</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-primary w-100" onclick="showAlert()">
                            <i class="fas fa-sync-alt"></i> Refresh Data
                        </button>
                    </div>
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-success w-100" onclick="testApi()">
                            <i class="fas fa-cloud-upload-alt"></i> Test API
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Chart initialization
    const ctx = document.getElementById('userChart').getContext('2d');
    const userChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'New Users',
                data: [12, 19, 15, 17, 14, {{ $newUsersThisMonth ?? 0 }}],
                borderColor: '#4e73df',
                backgroundColor: 'rgba(78, 115, 223, 0.1)',
                borderWidth: 3,
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
    
    function showAlert() {
        alert('Data refreshed successfully!');
        location.reload();
    }
    
    function testApi() {
        fetch('/admin/api/stats', {
            headers: {
                'Authorization': 'Bearer {{ Auth::user()?->createToken('test')->plainTextToken ?? '' }}',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(response => response.json())
        .then(data => {
            alert('API Response: ' + JSON.stringify(data, null, 2));
        })
        .catch(error => {
            alert('API Error: ' + error);
        });
    }
    
    // Auto refresh stats every 30 seconds
    setInterval(function() {
        fetch('/admin/api/stats')
            .then(response => response.json())
            .then(data => {
                console.log('Stats updated:', data);
            });
    }, 30000);
</script>
@endsection