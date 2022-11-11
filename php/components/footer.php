        <!-- MDB -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"
        ></script>
        <script>
            document.querySelectorAll('.form-outline').forEach((formOutline) => {
                new mdb.Input(formOutline).update();
            });
            document.querySelectorAll('.form-outline').forEach((formOutline) => {
                new mdb.Input(formOutline).init();
            });
        </script>
    </body>
</html>