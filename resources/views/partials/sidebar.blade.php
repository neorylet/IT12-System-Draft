<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');

.sidebar {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 200px;
    height: 100vh; /* Full screen height */
    flex-shrink: 0; /* Prevents the content from pushing the sidebar width */
    background-color: #ffffff;
    border-right: 1px solid #e0e0e0;
    padding: 24px 16px;
    box-sizing: border-box;
}


    .logo-section {
        text-align: center;
        margin-bottom: 40px;
    }

    .logo-img {
        width: 78px;
        height: 78px;
        border-radius: 10px;
        margin-bottom: 12px;
        border: 1px solid #fbe6e6; /* Subtle boutique border */
    }

    .user-name {
        font-weight: 600;
        font-size: 13px;
        letter-spacing: -0.01em;
        color: #5d3a00;
    }

    .user-role {
        font-weight: 500;
        font-size: 11px;
        color: #8c5c3c; /* Boutique subtitle color */
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-top: 2px;
    }

    .nav-group {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .nav-link {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 8px 12px;
        border-radius: 6px;
        text-decoration: none;
        color: #4a4a4a; /* Boutique link color */
        font-size: 12.5px;
        transition: all 0.2s ease;
    }

    .nav-link:hover {
        background-color: #d6a77a; /* Boutique accent color */
        color: #ffffff; /* Contrast for hover */
    }

    .nav-link.active {
        background-color: #d6a77a;
        color: #ffffff;
        font-weight: 600;
    }

    .nav-icon {
        font-size: 14px;
    }

    .logout-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 10px;
        border-radius: 6px;
        text-decoration: none;
        background-color: #ffffff;
        color: #d6a77a; /* Using the primary boutique brown */
        font-size: 12px;
        font-weight: 600;
        transition: background 0.2s;
        border: none;
    }

    .logout-btn:hover {
        background-color: #c18f5f; /* Darker boutique brown on hover */
    }
</style>

<div class="sidebar">
    <div class="sidebar-top">
        <div class="logo-section">
            <img src="{{ asset('images/whateverlogo.jpg') }}" alt="Logo" class="logo-img">
            <div class="user-name">FirstName</div>
            <div class="user-role">Staff Member</div>
        </div>

        <nav class="nav-group">
            <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                <span class="nav-icon">📊</span> Dashboard
            </a>

            <a href="/shelves" class="nav-link {{ request()->is('shelves') ? 'active' : '' }}">
                <span class="nav-icon">🗂️</span> Shelves
            </a>

            <a href="/inventory" class="nav-link {{ request()->is('inventory') ? 'active' : '' }}">
                <span class="nav-icon">📦</span> Inventory
            </a>

            <a href="/renters" class="nav-link {{ request()->is('renters') ? 'active' : '' }}">
                <span class="nav-icon">👤</span> Renters
            </a>

            <a href="/audit-logs" class="nav-link {{ request()->is('audit-logs') ? 'active' : '' }}">
                <span class="nav-icon">📝</span> Audit Logs
            </a>
        </nav>
    </div>

    <div class="sidebar-bottom">
        <a href="/login" class="logout-btn">
            <span class="nav-icon">🔒</span> Log Out
        </a>
    </div>
</div>