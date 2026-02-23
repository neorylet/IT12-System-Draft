@extends('layouts.app')

@section('title', 'Shelves')

@section('content')
<div class="header-section">
    <h1>Shelves Management</h1>
    <a href="#" class="btn-add">+ Add New Shelf</a>
</div>

<div class="cards-grid">
    <div class="stat-card">
        <div class="stat-label">Total Shelves</div>
        <div class="stat-value">48</div>
        <div class="stat-footer">Total capacity</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Occupied</div>
        <div class="stat-value" style="color: #d6a77a;">32</div>
        <div class="stat-footer">Generating revenue</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Vacant</div>
        <div class="stat-value">14</div>
        <div class="stat-footer">Ready for lease</div>
    </div>
</div>

<div class="activity-section">
    <div class="activity-header">Active Shelf Directory</div>
    
    <div class="activity-table-scrollable">
        <table class="activity-table" style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid #f4f1ee;">
                    <th style="text-align: left; padding: 12px 15px; width: 15%;">Shelf Code</th>
                    <th style="text-align: left; padding: 12px 15px; width: 20%;">Location</th>
                    <th style="text-align: left; padding: 12px 15px; width: 20%;">Renter / Lessee</th>
                    <th style="text-align: left; padding: 12px 15px; width: 15%;">Monthly Fee</th>
                    <th style="text-align: left; padding: 12px 15px; width: 15%;">Status</th>
                    <th style="text-align: right; padding: 12px 15px; width: 15%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 12px 15px;"><span class="shelf-code">A-01</span></td>
                    <td style="padding: 12px 15px;">Main Aisle, Level 1</td>
                    <td style="padding: 12px 15px;"><span class="renter-name">Organic Blooms Co.</span></td>
                    <td style="padding: 12px 15px;">₱1,500.00</td>
                    <td style="padding: 12px 15px;"><span class="badge status-occupied">Occupied</span></td>
                    <td style="padding: 12px 15px; text-align: right;" class="action-links">
                        <a href="#">View</a>
                        <a href="#">Edit</a>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 12px 15px;"><span class="shelf-code">B-04</span></td>
                    <td style="padding: 12px 15px;">Window Display</td>
                    <td style="padding: 12px 15px;"><span class="renter-name">---</span></td>
                    <td style="padding: 12px 15px;">₱2,200.00</td>
                    <td style="padding: 12px 15px;"><span class="badge status-vacant">Vacant</span></td>
                    <td style="padding: 12px 15px; text-align: right;" class="action-links">
                        <a href="#">View</a>
                        <a href="#">Edit</a>
                    </td>
                </tr>
                </tbody>
        </table>
    </div>
</div>
@endsection