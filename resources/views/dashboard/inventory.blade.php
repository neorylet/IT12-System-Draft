@extends('layouts.app')

@section('title', 'Inventory Management')

@section('content')
    <div class="header-section" style="display: flex; justify-content: space-between; align-items: center;">
    <h1>Inventory Management</h1>
    <div class="header-actions" style="display: flex; gap: 10px;">
        <a href="#" class="btn-add" style="background: transparent; border: 1px solid #d6a77a; color: #5d3a00;">
            <span class="nav-icon">📁</span> Add New Category
        </a>
        
        <a href="#" class="btn-add">
            <span class="nav-icon">➕</span> Add New Item
        </a>
    </div>
</div>

<div class="cards-grid">
    <div class="stat-card">
        <div class="stat-label">Total Stock Units</div>
        <div class="stat-value">4,520</div>
        <div class="stat-footer">Across all shelves</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Low Stock Items</div>
        <div class="stat-value" style="color: #991b1b;">12</div>
        <div class="stat-footer">Requires attention</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Out of Stock</div>
        <div class="stat-value">2</div>
        <div class="stat-footer">Zero balance items</div>
    </div>
</div>
<div class="activity-section">
    <div class="activity-header" style="display: flex; justify-content: space-between; align-items: center;">
        <span>Current Inventory Stock</span>
        <input type="text" placeholder="Search inventory..." 
               style="padding: 0.5rem; border-radius: 6px; border: 1px solid #d6a77a; font-size: 0.8rem; width: 200px;">
    </div>
    
    <div class="activity-table-scrollable">
        <table class="activity-table">
            <thead>
                <thead>
        <tr style="border-bottom: 2px solid #f4f1ee;">
        <th style="text-align: left; padding: 12px 15px; width: 25%;">Item Details</th>
        <th style="text-align: left; padding: 12px 15px; width: 15%;">Reference</th>
        <th style="text-align: left; padding: 12px 15px; width: 15%;">Quantity</th>
        <th style="text-align: left; padding: 12px 15px; width: 15%;">Status</th>
        <th style="text-align: left; padding: 12px 15px; width: 15%;">Supplier/Renter</th>
        <th style="text-align: right; padding: 12px 15px; width: 15%;">Actions</th>
    </tr>
</thead>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Premium Cotton Sheets</div>
                        <small style="color: #8c5c3c;">Category: Linens</small>
                    </td>
                    <td><span class="shelf-code">#LNN-4022</span></td>
                    <td style="font-weight: 600;">45 Units</td>
                    <td><span class="badge status-vacant">In Stock</span></td>
                    <td class="renter-name">Grand Hotel Supplies</td>
                    <td class="action-links" style="text-align: right;">
                        <a href="#">Edit</a>
                        <a href="#" style="margin-right:0;">History</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Luxury Soap Set</div>
                        <small style="color: #8c5c3c;">Category: Toiletries</small>
                    </td>
                    <td><span class="shelf-code">#SOAP-99</span></td>
                    <td style="font-weight: 600;">8 Units</td>
                    <td><span class="badge status-occupied">Low Stock</span></td>
                    <td class="renter-name">Jane Smith</td>
                    <td class="action-links" style="text-align: right;">
                        <a href="#">Edit</a>
                        <a href="#" style="margin-right:0;">History</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Organic Scented Candle</div>
                        <small style="color: #8c5c3c;">Category: Decor</small>
                    </td>
                    <td><span class="shelf-code">#DEC-202</span></td>
                    <td style="font-weight: 600;">0 Units</td>
                    <td><span class="badge status-maintenance">Out of Stock</span></td>
                    <td class="renter-name">Luna Crafts</td>
                    <td class="action-links" style="text-align: right;">
                        <a href="#">Edit</a>
                        <a href="#" style="margin-right:0;">History</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Silk Pillowcase</div>
                        <small style="color: #8c5c3c;">Category: Linens</small>
                    </td>
                    <td><span class="shelf-code">#LNN-501</span></td>
                    <td style="font-weight: 600;">120 Units</td>
                    <td><span class="badge status-vacant">In Stock</span></td>
                    <td class="renter-name">Velvet & Vine</td>
                    <td class="action-links" style="text-align: right;">
                        <a href="#">Edit</a>
                        <a href="#" style="margin-right:0;">History</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Bamboo Bath Mat</div>
                        <small style="color: #8c5c3c;">Category: Bath</small>
                    </td>
                    <td><span class="shelf-code">#BTH-102</span></td>
                    <td style="font-weight: 600;">3 Units</td>
                    <td><span class="badge status-occupied">Low Stock</span></td>
                    <td class="renter-name">Urban Threads</td>
                    <td class="action-links" style="text-align: right;">
                        <a href="#">Edit</a>
                        <a href="#" style="margin-right:0;">History</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Ceramic Flower Vase</div>
                        <small style="color: #8c5c3c;">Category: Decor</small>
                    </td>
                    <td><span class="shelf-code">#DEC-881</span></td>
                    <td style="font-weight: 600;">15 Units</td>
                    <td><span class="badge status-vacant">In Stock</span></td>
                    <td class="renter-name">Artisan Bean</td>
                    <td class="action-links" style="text-align: right;">
                        <a href="#">Edit</a>
                        <a href="#" style="margin-right:0;">History</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Essential Oil Diffuser</div>
                        <small style="color: #8c5c3c;">Category: Wellness</small>
                    </td>
                    <td><span class="shelf-code">#WLN-303</span></td>
                    <td style="font-weight: 600;">22 Units</td>
                    <td><span class="badge status-vacant">In Stock</span></td>
                    <td class="renter-name">Pure Flora</td>
                    <td class="action-links" style="text-align: right;">
                        <a href="#">Edit</a>
                        <a href="#" style="margin-right:0;">History</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Hand-Woven Basket</div>
                        <small style="color: #8c5c3c;">Category: Storage</small>
                    </td>
                    <td><span class="shelf-code">#STR-11</span></td>
                    <td style="font-weight: 600;">2 Units</td>
                    <td><span class="badge status-occupied">Low Stock</span></td>
                    <td class="renter-name">Organic Blooms Co.</td>
                    <td class="action-links" style="text-align: right;">
                        <a href="#">Edit</a>
                        <a href="#" style="margin-right:0;">History</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Marbled Coaster Set</div>
                        <small style="color: #8c5c3c;">Category: Kitchen</small>
                    </td>
                    <td><span class="shelf-code">#KTN-90</span></td>
                    <td style="font-weight: 600;">50 Units</td>
                    <td><span class="badge status-vacant">In Stock</span></td>
                    <td class="renter-name">Luxe Linens Co.</td>
                    <td class="action-links" style="text-align: right;">
                        <a href="#">Edit</a>
                        <a href="#" style="margin-right:0;">History</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Velvet Throw Pillow</div>
                        <small style="color: #8c5c3c;">Category: Living</small>
                    </td>
                    <td><span class="shelf-code">#LIV-44</span></td>
                    <td style="font-weight: 600;">12 Units</td>
                    <td><span class="badge status-vacant">In Stock</span></td>
                    <td class="renter-name">Elite Toiletries</td>
                    <td class="action-links" style="text-align: right;">
                        <a href="#">Edit</a>
                        <a href="#" style="margin-right:0;">History</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection