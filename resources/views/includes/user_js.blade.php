<script type="module">
    window.Echo.channel('getSportFixture')
        .listen('getSportFixture', (data) => {
            console.log('Games updated: ', data);
            
        });
</script>