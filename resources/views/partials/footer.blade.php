<div class="footer-wrapper">
    <div class="footer-section f-section-1">
        <p class="">Copyright © <span class="dynamic-year">2025</span> <a target="_blank"
                href="https://designreset.com/cork-admin/">Bitwise-solutions</a>, All rights reserved.</p>
    </div>
</div>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
@if (app()->getLocale() == 'ar')
    <script src="{{ asset('src_rtl/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('src/assets/js/bootstrap-init.js') }}"></script> --}}
    <script src="{{ asset('src_rtl/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('src_rtl/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('src_rtl/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ asset('layouts_rtl/collapsible-menu/app.js') }}"></script>
@else
    <script src="{{ asset('src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('src/assets/js/bootstrap-init.js') }}"></script> --}}
    <script src="{{ asset('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ asset('layouts/collapsible-menu/app.js') }}"></script>
@endif
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
{{-- <script src="{{ asset('src/plugins/src/apex/apexcharts.min.js') }}"></script> --}}
{{-- <script src="{{ asset('src/assets/js/dashboard/dash_1.js') }}"></script> --}}

<!-- Responsive Enhancements -->
<script src="{{ asset('src/assets/js/responsive.js') }}"></script>

@yield('scripts')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
