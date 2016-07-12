    <script type="text/javascript">
    	$.ajaxSetup({
    		headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    	});
    </script>