@extends('layouts.app')

@section('title', 'Renters Directory')

@section('content')
    <div class="header-section">
        <h1>Renters & Suppliers</h1>
        <a href="#" class="btn-add">
            <span class="nav-icon">👤+</span> Register New Renter
        </a>
    </div>

    <div class="cards-grid" style="margin-bottom: 2rem;">
        <div class="stat-card">
            <div class="stat-label">Total Active Leases</div>
            <div class="stat-value">12</div>
            <div class="stat-footer">Current Boutique Partners</div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Pending Renewals</div>
            <div class="stat-value" style="color: #991b1b;">3</div>
            <div class="stat-footer">Expiring within 30 days</div>
        </div>
    </div>

    <div class="cards-grid">
        
        <div class="stat-card" style="display: flex; flex-direction: column; justify-content: space-between; min-height: 320px; border-top: 4px solid #d6a77a;">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1rem;">
                    <span class="badge status-vacant">ACTIVE</span>
                    <span class="shelf-code">ID: 101</span>
                </div>
                
                <h3 style="font-family: 'Georgia', serif; color: #5d3a00; margin: 0 0 0.25rem 0;">Luxe Linens Co.</h3>
                <div class="stat-label" style="margin-bottom: 1rem; border-bottom: 1px solid #f3f4f6; padding-bottom: 0.5rem;">
                    Rep: Sarah Jenkins
                </div>

                <div style="font-size: 0.85rem; color: #8c5c3c; line-height: 1.8;">
                    <div><strong>📞</strong> +1 (555) 012-3456</div>
                    <div><strong>✉️</strong> contact@luxelinens.com</div>
                </div>
            </div>

            <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px dotted #d6a77a;">
                <div style="display: flex; justify-content: space-between; font-size: 0.75rem; margin-bottom: 0.3rem;">
                    <span>Contract Start:</span>
                    <span style="color: #5d3a00; font-weight: 600;">Jan 01, 2024</span>
                </div>
                <div style="display: flex; justify-content: space-between; font-size: 0.75rem; margin-bottom: 1rem;">
                    <span>Contract End:</span>
                    <span style="color: #991b1b; font-weight: 600;">Dec 31, 2025</span>
                </div>
                
                <div class="action-links" style="text-align: center; border-top: 1px solid #f3f4f6; padding-top: 0.75rem;">
                    <a href="#">Inventory</a>
                    <a href="#" style="margin-right:0;">Edit Lease</a>
                </div>
            </div>
        </div>

        <div class="stat-card" style="display: flex; flex-direction: column; justify-content: space-between; min-height: 320px; border-top: 4px solid #d6a77a;">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1rem;">
                    <span class="badge status-vacant">ACTIVE</span>
                    <span class="shelf-code">ID: 102</span>
                </div>
                
                <h3 style="font-family: 'Georgia', serif; color: #5d3a00; margin: 0 0 0.25rem 0;">Artisan Bean Roastery</h3>
                <div class="stat-label" style="margin-bottom: 1rem; border-bottom: 1px solid #f3f4f6; padding-bottom: 0.5rem;">
                    Rep: Marcus Thorne
                </div>

                <div style="font-size: 0.85rem; color: #8c5c3c; line-height: 1.8;">
                    <div><strong>📞</strong> +1 (555) 987-6543</div>
                    <div><strong>✉️</strong> supplies@artisanbean.co</div>
                </div>
            </div>

            <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px dotted #d6a77a;">
                <div style="display: flex; justify-content: space-between; font-size: 0.75rem; margin-bottom: 0.3rem;">
                    <span>Contract Start:</span>
                    <span style="color: #5d3a00; font-weight: 600;">Mar 15, 2024</span>
                </div>
                <div style="display: flex; justify-content: space-between; font-size: 0.75rem; margin-bottom: 1rem;">
                    <span>Contract End:</span>
                    <span style="color: #991b1b; font-weight: 600;">Mar 14, 2026</span>
                </div>
                
                <div class="action-links" style="text-align: center; border-top: 1px solid #f3f4f6; padding-top: 0.75rem;">
                    <a href="#">Inventory</a>
                    <a href="#" style="margin-right:0;">Edit Lease</a>
                </div>
            </div>
        </div>

        <div class="stat-card" style="display: flex; flex-direction: column; justify-content: space-between; min-height: 320px; border-top: 4px solid #e0e0e0; opacity: 0.8;">
            <div>
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1rem;">
                    <span class="badge status-maintenance">INACTIVE</span>
                    <span class="shelf-code">ID: 098</span>
                </div>
                
                <h3 style="font-family: 'Georgia', serif; color: #5d3a00; margin: 0 0 0.25rem 0;">Pure Flora Botanicals</h3>
                <div class="stat-label" style="margin-bottom: 1rem; border-bottom: 1px solid #f3f4f6; padding-bottom: 0.5rem;">
                    Rep: Elena Moss
                </div>

                <div style="font-size: 0.85rem; color: #8c5c3c; line-height: 1.8;">
                    <div><strong>📞</strong> +1 (555) 444-3322</div>
                    <div><strong>✉️</strong> elena@pureflora.com</div>
                </div>
            </div>

            <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px dotted #d6a77a;">
                <div style="display: flex; justify-content: space-between; font-size: 0.75rem; margin-bottom: 0.3rem;">
                    <span>Contract Start:</span>
                    <span>Jan 01, 2023</span>
                </div>
                <div style="display: flex; justify-content: space-between; font-size: 0.75rem; margin-bottom: 1rem;">
                    <span>Contract End:</span>
                    <span>Jan 01, 2024</span>
                </div>
                
                <div class="action-links" style="text-align: center; border-top: 1px solid #f3f4f6; padding-top: 0.75rem;">
                    <a href="#">Inventory</a>
                    <a href="#" style="margin-right:0;">Renew</a>
                </div>
            </div>
        </div>

    </div>

@endsection