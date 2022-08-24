<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('backend/vendors/js/vendors.min.js')) }}"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset(mix('backend/vendors/js/ui/jquery.sticky.js'))}}"></script>


<script src="{{ asset(mix('backend/js/core/app-menu.js')) }}"></script>
<script src="{{ asset(mix('backend/js/core/app.js')) }}"></script>

<script src="{{asset('backend/js/scripts/ui/ui-feather.js')}}"></script>

<script src="{{ asset(mix('backend/js/core/scripts.js')) }}"></script>


@stack('scripts')

