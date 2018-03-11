<form id="code"><input name="code" value="{{ $code }}" /></form>

<script>
    $(function() {
        var request = $.post('https://connect.stripe.com/oauth/token', $('#code').serialize());
    });
</script>