@extends('layouts.apps')

@section('title', 'Dashboard')

@section('content')
<div class="header-section">
    <h1>Staff Dashboard</h1>
</div>

<div class="cards-grid">
    <!-- Rental Management Stats -->
    <div class="stat-card">
        <div class="stat-label">Active Renters</div>
        <div class="stat-value">0</div>
        <div class="stat-footer">Lessees with active contracts</div>
    </div>

    <div class="stat-card">
        <div class="stat-label">Total Inventory</div>
        <div class="stat-value">0</div>
        <div class="stat-footer">Units currently in stock</div>
    </div>

    <div class="stat-card">
        <div class="stat-label">Inventory Value</div>
        <div class="stat-value">₱0.00</div>
        <div class="stat-footer">Total market value of stock</div>
    </div>

    <div class="stat-card">
        <div class="stat-label">Monthly Revenue</div>
        <div class="stat-value">₱0.00</div>
        <div class="stat-footer">Total projected shelf fees</div>
    </div>
</div>

<div class="activity-section">
    <div class="activity-header">Recent Inventory Transactions</div>
    
    <div class="activity-table-scrollable">
        <table class="activity-table">
            <thead>
              <thead>
    <tr style="border-bottom: 2px solid #f4f1ee;">
        <th style="text-align: left; padding: 12px 15px; width: 14%;">Date</th>
        <th style="text-align: left; padding: 12px 15px; width: 14%;">Reference</th>
        <th style="text-align: center; padding: 12px 15px; width: 6%;">Type</th>
        <th style="text-align: center; padding: 12px 15px; width: 6%;">Shelf</th>
        <th style="text-align: left; padding: 12px 15px; width: 20%;">Renter</th>
        <th style="text-align: left; padding: 12px 15px; width: 18%;">Actioned By</th>
        <th style="text-align: right; padding: 12px 15px; width: 6%;">Status</th>
    </tr>
</thead>
            </thead>
            <tbody>
                <tr>
                    <td>Feb 09, 2026</td>
                    <td>#TRX-1001</td>
                    <td><span class="badge status-vacant">IN</span></td>
                    <td>A-01</td>
                    <td>Luxe Linens Co.</td>
                    <td>Alex Rivera</td>
                    <td>Verified</td>
                </tr>
                <tr>
                    <td>Feb 09, 2026</td>
                    <td>#TRX-1002</td>
                    <td><span class="badge status-maintenance">OUT</span></td>
                    <td>B-12</td>
                    <td>Internal Store</td>
                    <td>Sarah Miller</td>
                    <td>Verified</td>
                </tr>
                <tr>
                    <td>Feb 09, 2026</td>
                    <td>#TRX-1003</td>
                    <td><span class="badge status-occupied">ADJ</span></td>
                    <td>C-05</td>
                    <td>Artisan Bean</td>
                    <td>Sarah Miller</td>
                    <td>Manual</td>
                </tr>
                <tr>
                    <td>Feb 08, 2026</td>
                    <td>#TRX-1004</td>
                    <td><span class="badge status-vacant">IN</span></td>
                    <td>A-04</td>
                    <td>Pure Flora</td>
                    <td>Alex Rivera</td>
                    <td>Verified</td>
                </tr>
                <tr>
                    <td>Feb 08, 2026</td>
                    <td>#TRX-1005</td>
                    <td><span class="badge status-maintenance">OUT</span></td>
                    <td>A-01</td>
                    <td>Luxe Linens Co.</td>
                    <td>Staff User</td>
                    <td>Verified</td>
                </tr>
                <tr>
                    <td>Feb 08, 2026</td>
                    <td>#TRX-1006</td>
                    <td><span class="badge status-vacant">IN</span></td>
                    <td>B-02</td>
                    <td>Elite Toiletries</td>
                    <td>Alex Rivera</td>
                    <td>Verified</td>
                </tr>
                <tr>
                    <td>Feb 07, 2026</td>
                    <td>#TRX-1007</td>
                    <td><span class="badge status-maintenance">OUT</span></td>
                    <td>D-10</td>
                    <td>Internal Store</td>
                    <td>Sarah Miller</td>
                    <td>Verified</td>
                </tr>
                <tr>
                    <td>Feb 07, 2026</td>
                    <td>#TRX-1008</td>
                    <td><span class="badge status-vacant">IN</span></td>
                    <td>C-01</td>
                    <td>Mountain Coffee</td>
                    <td>Staff User</td>
                    <td>Verified</td>
                </tr>
                <tr>
                    <td>Feb 07, 2026</td>
                    <td>#TRX-1009</td>
                    <td><span class="badge status-occupied">ADJ</span></td>
                    <td>B-12</td>
                    <td>Internal Store</td>
                    <td>Sarah Miller</td>
                    <td>Manual</td>
                </tr>
                <tr>
                    <td>Feb 06, 2026</td>
                    <td>#TRX-1010</td>
                    <td><span class="badge status-vacant">IN</span></td>
                    <td>A-09</td>
                    <td>Luxe Linens Co.</td>
                    <td>Alex Rivera</td>
                    <td>Verified</td>
                </tr>

                <tr class="empty-row">
                    <td colspan="7" class="empty-state" style="text-align: center; padding: 2rem; background: #fcfaf8;">
                        End of transaction history for this period.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection