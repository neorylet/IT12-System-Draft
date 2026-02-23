@extends('layouts.app')

@section('title', 'Audit Logs')

@section('content')
    <div class="header-section">
        <h1>System Audit Logs</h1>
        <div class="header-actions">
            <button class="btn-add" style="background-color: transparent; color: var(--boutique-dark); border: 1px solid #d6a77a; margin-right: 10px;">
                📅 Filter by Date
            </button>
            <button class="btn-add">📥 Export PDF</button>
        </div>
    </div>

    <div class="cards-grid" style="margin-bottom: 2.5rem;">
        <div class="stat-card">
            <div class="stat-label">Transactions (Last 24h)</div>
            <div class="stat-value">142</div>
            <div class="stat-footer">Across all stock points</div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Active Users</div>
            <div class="stat-value">6</div>
            <div class="stat-footer">Staff & Admin online</div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Discrepancy Alerts</div>
            <div class="stat-value" style="color: #991b1b;">0</div>
            <div class="stat-footer">System health is normal</div>
        </div>
    </div>

<div class="activity-section">
    <div class="activity-header">
        Recent Inventory & System Activity
    </div>
    
    <div class="activity-table-scrollable">
        <table class="activity-table">
            <thead>
              <tr style="border-bottom: 2px solid #f4f1ee;">
                <th style="width: 15%; text-align: left; padding: 12px 15px;">Timestamp</th>
                <th style="width: 15%; text-align: left; padding: 12px 15px;">Actioned By</th>
                <th style="width: 10%; text-align: center; padding: 12px 15px;">Type</th>
                <th style="width: 25%; text-align: left; padding: 12px 15px;">Reference & Details</th>
                <th style="width: 20%; text-align: left; padding: 12px 15px;">Target Shelf/Renter</th>
                <th style="width: 15%; text-align: right; padding: 12px 15px;">Status</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Feb 09, 2026</div>
                        <small class="text-muted">10:45 PM</small>
                    </td>
                    <td>
                        <div style="font-weight: 600;">Alex Rivera</div>
                        <span class="badge" style="background: #f1f5f9; color: #475569; font-size: 0.65rem;">STAFF</span>
                    </td>
                    <td><span class="badge status-vacant">IN</span></td>
                    <td>
                        <div style="font-size: 0.85rem;"><strong>Ref: #TRX-99201</strong></div>
                        <small style="color: #8c5c3c;">Received 50x Luxury Soap Sets</small>
                    </td>
                    <td>
                        <div class="shelf-code">A-01</div>
                        <div class="renter-name" style="font-size: 0.75rem;">Pure Flora Botanicals</div>
                    </td>
                    <td style="text-align: right;"><span class="badge" style="background: #dcfce7; color: #166534;">Verified</span></td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Feb 09, 2026</div>
                        <small class="text-muted">09:12 PM</small>
                    </td>
                    <td>
                        <div style="font-weight: 600;">Sarah Miller</div>
                        <span class="badge" style="background: #fdf2f2; color: #991b1b; font-size: 0.65rem;">ADMIN</span>
                    </td>
                    <td><span class="badge status-maintenance">OUT</span></td>
                    <td>
                        <div style="font-size: 0.85rem;"><strong>Ref: #TRX-99188</strong></div>
                        <small style="color: #8c5c3c;">Checkout: Room 402 Amenities</small>
                    </td>
                    <td>
                        <div class="shelf-code">B-12</div>
                        <div class="renter-name" style="font-size: 0.75rem;">Internal Store</div>
                    </td>
                    <td style="text-align: right;"><span class="badge" style="background: #dcfce7; color: #166534;">Verified</span></td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Feb 09, 2026</div>
                        <small class="text-muted">04:30 PM</small>
                    </td>
                    <td>
                        <div style="font-weight: 600;">Sarah Miller</div>
                        <span class="badge" style="background: #fdf2f2; color: #991b1b; font-size: 0.65rem;">ADMIN</span>
                    </td>
                    <td><span class="badge status-occupied">ADJ</span></td>
                    <td>
                        <div style="font-size: 0.85rem;"><strong>Ref: #SYS-Maint</strong></div>
                        <small style="color: #8c5c3c;">Updated Shelf A-01 Monthly Fee</small>
                    </td>
                    <td>
                        <div class="shelf-code">A-01</div>
                        <div class="renter-name" style="font-size: 0.75rem;">Boutique Storage</div>
                    </td>
                    <td style="text-align: right;"><span class="badge" style="background: #fef3c7; color: #92400e;">Manual</span></td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Feb 08, 2026</div>
                        <small class="text-muted">11:20 AM</small>
                    </td>
                    <td>
                        <div style="font-weight: 600;">Alex Rivera</div>
                        <span class="badge" style="background: #f1f5f9; color: #475569; font-size: 0.65rem;">STAFF</span>
                    </td>
                    <td><span class="badge status-vacant">IN</span></td>
                    <td>
                        <div style="font-size: 0.85rem;"><strong>Ref: #TRX-99150</strong></div>
                        <small style="color: #8c5c3c;">Stock In: 20x Cotton Towels</small>
                    </td>
                    <td>
                        <div class="shelf-code">C-05</div>
                        <div class="renter-name" style="font-size: 0.75rem;">Luxe Linens Co.</div>
                    </td>
                    <td style="text-align: right;"><span class="badge" style="background: #dcfce7; color: #166534;">Verified</span></td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Feb 08, 2026</div>
                        <small class="text-muted">08:05 AM</small>
                    </td>
                    <td>
                        <div style="font-weight: 600;">System Bot</div>
                        <span class="badge" style="background: #e0f2fe; color: #075985; font-size: 0.65rem;">AUTO</span>
                    </td>
                    <td><span class="badge status-maintenance">OUT</span></td>
                    <td>
                        <div style="font-size: 0.85rem;"><strong>Ref: #INV-LOW</strong></div>
                        <small style="color: #8c5c3c;">Auto-transfer to Low Stock Alert</small>
                    </td>
                    <td>
                        <div class="shelf-code">D-02</div>
                        <div class="renter-name" style="font-size: 0.75rem;">Artisan Bean</div>
                    </td>
                    <td style="text-align: right;"><span class="badge" style="background: #f1f5f9; color: #475569;">System</span></td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Feb 07, 2026</div>
                        <small class="text-muted">05:40 PM</small>
                    </td>
                    <td>
                        <div style="font-weight: 600;">Sarah Miller</div>
                        <span class="badge" style="background: #fdf2f2; color: #991b1b; font-size: 0.65rem;">ADMIN</span>
                    </td>
                    <td><span class="badge status-occupied">NEW</span></td>
                    <td>
                        <div style="font-size: 0.85rem;"><strong>Ref: #RNT-5021</strong></div>
                        <small style="color: #8c5c3c;">New Lease Agreement Signed</small>
                    </td>
                    <td>
                        <div class="shelf-code">E-10</div>
                        <div class="renter-name" style="font-size: 0.75rem;">Luna Crafts</div>
                    </td>
                    <td style="text-align: right;"><span class="badge" style="background: #dcfce7; color: #166534;">Signed</span></td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Feb 07, 2026</div>
                        <small class="text-muted">02:15 PM</small>
                    </td>
                    <td>
                        <div style="font-weight: 600;">Alex Rivera</div>
                        <span class="badge" style="background: #f1f5f9; color: #475569; font-size: 0.65rem;">STAFF</span>
                    </td>
                    <td><span class="badge status-maintenance">OUT</span></td>
                    <td>
                        <div style="font-size: 0.85rem;"><strong>Ref: #TRX-99102</strong></div>
                        <small style="color: #8c5c3c;">Damage Disposal: Broken Vase</small>
                    </td>
                    <td>
                        <div class="shelf-code">A-04</div>
                        <div class="renter-name" style="font-size: 0.75rem;">Artisan Bean</div>
                    </td>
                    <td style="text-align: right;"><span class="badge" style="background: #fee2e2; color: #991b1b;">Waste</span></td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Feb 07, 2026</div>
                        <small class="text-muted">10:00 AM</small>
                    </td>
                    <td>
                        <div style="font-weight: 600;">Sarah Miller</div>
                        <span class="badge" style="background: #fdf2f2; color: #991b1b; font-size: 0.65rem;">ADMIN</span>
                    </td>
                    <td><span class="badge status-occupied">ADJ</span></td>
                    <td>
                        <div style="font-size: 0.85rem;"><strong>Ref: #TRX-99099</strong></div>
                        <small style="color: #8c5c3c;">Corrected Inventory Count</small>
                    </td>
                    <td>
                        <div class="shelf-code">B-09</div>
                        <div class="renter-name" style="font-size: 0.75rem;">Velvet & Vine</div>
                    </td>
                    <td style="text-align: right;"><span class="badge" style="background: #fef3c7; color: #92400e;">Manual</span></td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Feb 06, 2026</div>
                        <small class="text-muted">03:30 PM</small>
                    </td>
                    <td>
                        <div style="font-weight: 600;">Alex Rivera</div>
                        <span class="badge" style="background: #f1f5f9; color: #475569; font-size: 0.65rem;">STAFF</span>
                    </td>
                    <td><span class="badge status-vacant">IN</span></td>
                    <td>
                        <div style="font-size: 0.85rem;"><strong>Ref: #TRX-99050</strong></div>
                        <small style="color: #8c5c3c;">Stock In: 100x Bath Bombs</small>
                    </td>
                    <td>
                        <div class="shelf-code">F-02</div>
                        <div class="renter-name" style="font-size: 0.75rem;">Elite Toiletries</div>
                    </td>
                    <td style="text-align: right;"><span class="badge" style="background: #dcfce7; color: #166534;">Verified</span></td>
                </tr>
                <tr>
                    <td>
                        <div style="font-weight: 600; color: #5d3a00;">Feb 06, 2026</div>
                        <small class="text-muted">11:00 AM</small>
                    </td>
                    <td>
                        <div style="font-weight: 600;">System Bot</div>
                        <span class="badge" style="background: #e0f2fe; color: #075985; font-size: 0.65rem;">AUTO</span>
                    </td>
                    <td><span class="badge status-maintenance">LOG</span></td>
                    <td>
                        <div style="font-size: 0.85rem;"><strong>Ref: #BKUP-202</strong></div>
                        <small style="color: #8c5c3c;">Automated Database Backup</small>
                    </td>
                    <td>
                        <div class="shelf-code">SYS</div>
                        <div class="renter-name" style="font-size: 0.75rem;">System Core</div>
                    </td>
                    <td style="text-align: right;"><span class="badge" style="background: #f1f5f9; color: #475569;">Success</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection