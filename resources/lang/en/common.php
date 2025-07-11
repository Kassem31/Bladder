<?php

return [
    // General
    'welcome' => 'Welcome',
    
    // Navigation
    'dashboard' => 'Dashboard',
    'back_to_list' => 'Back to List',
    'logout' => 'Logout',
    
    // Common Actions
    'add' => 'Add',
    'edit' => 'Edit',
    'delete' => 'Delete',
    'save' => 'Save',
    'cancel' => 'Cancel',
    'show' => 'Show',
    'view' => 'View',
    'filter' => 'Filter',
    'clear_filters' => 'Clear Filters',    'search' => 'Search',
    'export' => 'Export',
    'import' => 'Import',
    'submit' => 'Submit',
    'update' => 'Update',
    'create' => 'Create',
    'clear' => 'Clear',
    'reset_password' => 'Reset Password',
      // Status
    'active' => 'Active',
    'inactive' => 'Inactive',
    'available' => 'Available',
    'in_use' => 'In Use',
    'maintenance' => 'Maintenance',
    'expired' => 'Expired',
    'working' => 'Working',
    'stopped' => 'Stopped',
    'ready' => 'Ready',
    'mounted' => 'Mounted',
    'test' => 'Test',
      // Common Fields
    'name' => 'Name',
    'display_name' => 'Display Name',
    'code' => 'Code',
    'description' => 'Description',
    'status' => 'Status',
    'date' => 'Date',
    'created_at' => 'Created At',
    'updated_at' => 'Updated At',
    'actions' => 'Actions',
    'notes' => 'Notes',
      // Messages
    'success_created' => 'Created successfully!',
    'success_updated' => 'Updated successfully!',
    'success_deleted' => 'Deleted successfully!',
    'error_occurred' => 'An error occurred!',
    'error' => 'Error',
    
    // Specific Success Messages
    'bladder_created' => 'Bladder created successfully.',
    'bladder_updated' => 'Bladder updated successfully.',
    'bladder_deleted' => 'Bladder deleted successfully.',
    'machine_created' => 'Machine created successfully.',
    'machine_updated' => 'Machine updated successfully.',
    'machine_deleted' => 'Machine deleted successfully.',
    'bladder_transaction_created' => 'Bladder transaction created successfully.',
    'bladder_transaction_updated' => 'Bladder transaction updated successfully.',
    'bladder_transaction_deleted' => 'Bladder transaction deleted successfully.',
    'finding_created' => 'Finding created successfully.',
    'finding_updated' => 'Finding updated successfully.',
    'finding_deleted' => 'Finding deleted successfully.',
    'bladder_size_created' => 'Bladder size created successfully.',
    'bladder_size_updated' => 'Bladder size updated successfully.',
    'bladder_size_deleted' => 'Bladder size deleted successfully.',
    'role_deleted' => 'Role deleted successfully.',
    'user_created' => 'User created successfully.',
    'user_updated' => 'User updated successfully.',
    'user_deleted' => 'User deleted successfully.',
    
    // Specific Error Messages
    'bladder_delete_machine_use' => 'Cannot delete bladder. It is currently being used by one or more machines.',
    'bladder_delete_has_transactions' => 'Cannot delete bladder. It has associated transactions.',
    'bladder_size_delete_in_use' => 'Cannot delete bladder size. It is currently being used by one or more bladders.',
    'finding_delete_in_use' => 'Cannot delete finding. It is currently being used by one or more maintenance findings.',
    'transaction_delete_has_findings' => 'Cannot delete bladder transaction. It has associated maintenance findings.',
    'transaction_delete_not_recent' => 'Only the most recent transaction for a bladder can be deleted.',
    'invalid_transaction_sequence' => 'Invalid transaction sequence. The next allowed transaction for this bladder is: :type',
    'machine_both_sides_mounted' => 'This machine already has bladders mounted on both sides.',
    'machine_left_side_mounted' => 'This machine already has a bladder mounted on the left side.',
    'machine_right_side_mounted' => 'This machine already has a bladder mounted on the right side.',
    'are_you_sure' => 'Are you sure?',
    'delete_confirm_text' => 'You won\'t be able to revert this!',
    'confirm_delete' => 'Are you sure you want to delete this item?',
    'confirm_delete_message' => 'You won\'t be able to revert this!',
    'yes_delete' => 'Yes, delete it!',    'no_data_available' => 'No data available',
    'not_available' => 'N/A',
    'close' => 'Close',
    'none' => 'None',
    
    // Pagination
    'showing_results' => 'Showing :first to :last of :total results',
    'per_page' => 'Per page',
      // Language Switcher
    'language' => 'Language',
    'english' => 'English',
    'arabic' => 'العربية',
    'back' => 'Back',
    'back_to' => 'Back to',    // Password Related
    'current_password' => 'Current Password',
    'new_password' => 'New Password',
    'confirm_new_password' => 'Confirm New Password',
    'password_reset_success' => 'Password reset successfully!',
    'current_password_incorrect' => 'Current password is incorrect',

    // Authentication
    'sign_in' => 'Sign In',
    'email' => 'Email',
    'password' => 'Password',
    'remember_me' => 'Remember me',
    'forgot_password' => 'Forgot your password?',
    'sign_in_button' => 'SIGN IN',
    'login_instructions' => 'Enter your email and password to login',
];
