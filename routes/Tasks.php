//Successfully created three separate dashboards for admin, staff, and renter. 
See routes/web.php for routing reference.


<?php

/*
|--------------------------------------------------------------------------
| Laravel Boutique Shelf Inventory System - Development Tasks
|--------------------------------------------------------------------------
*/

$developmentTasks = [

    "1. Finalize database structure based on data dictionary" => [
        "Review and confirm all tables: users, roles, products, inventory, shelves, renters, transactions, audit_logs.",
        "Define primary keys, foreign keys, data types, constraints, and default values.",
        "Establish relationships between tables (products → shelves, inventory → products, renters → transactions).",
        "Add audit_logs table to track all system activities.",
        "Create ERD diagram for database structure reference."
    ],

    "2. Prepare migrations and initialize data models" => [
        "Create migrations for all tables including audit_logs.",
        "Apply foreign key constraints and indexes.",
        "Run migrations to initialize database schema.",
        "Create Eloquent models: User, Role, Product, Inventory, Shelf, Renter, Transaction, AuditLog.",
        "Define fillable fields for mass assignment protection.",
        "Define model relationships (hasMany, belongsTo, etc.)."
    ],

    "3. Develop user authentication using Laravel Breeze" => [
        "Install and configure Laravel Breeze.",
        "Connect authentication to users table.",
        "Customize login, registration, and dashboard views.",
        "Apply middleware for role-based access (admin, staff, renter).",
        "Secure routes using auth middleware.",
        "Implement password validation and hashing."
    ],

    "4. Seed initial data" => [
        "Create default Admin account.",
        "Seed sample shelves.",
        "Seed sample products.",
        "Seed sample renters (for testing)."
    ],

    "5. Develop CRUD for Inventory and Products" => [
        "Create Product CRUD (create, read, update, delete).",
        "Create Inventory CRUD with stock management.",
        "Implement input validation.",
        "Ensure stock updates correctly reflect in inventory.",
        "Log all actions in audit_logs."
    ],

    "6. Develop CRUD for Shelves" => [
        "Create Shelf CRUD.",
        "Assign products to shelves.",
        "Optional: implement shelf capacity limits.",
        "Log shelf changes in audit_logs."
    ],

    "7. Develop CRUD for Renters and Renter Dashboard" => [
        "Create Renter CRUD (profile, contact info, rental history).",
        "Develop renter dashboard view.",
        "Allow renters to view assigned inventory.",
        "Allow renters to file inventory themselves before shop confirmation.",
        "Allow renters to submit inventory confirmation.",
        "Log renter activities in audit_logs."
    ],

    "8. Develop Transactions and Transaction Slips" => [
        "Record stock movement (incoming/outgoing).",
        "Link transactions to renters and products.",
        "Auto-generate transaction slips with product details, quantity, date, totals.",
        "Enable viewing and printing of transaction slips.",
        "Log all transaction activities in audit_logs."
    ],

    "9. Implement Audit Logs System" => [
        "Track all CRUD actions across system modules.",
        "Store user_id, action_type, table_name, record_id, timestamp.",
        "Allow admin to view system activity logs."
    ],

    "10. Testing and Validation" => [
        "Test role-based access control.",
        "Test renter inventory submission flow.",
        "Test transaction slip generation.",
        "Verify audit logs capture all system activities.",
        "Perform validation and edge case testing."
    ]

];

print_r($developmentTasks);

