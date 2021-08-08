<script>
    $(document).ready(function () {
        $('a.deleteButton').on('click', function(e) {
            let itemType = $(this).data('item');
            let itemId = $(this).data('id');
            let itemName = $(this).data('name');
            $('#deleteItem-type').text(itemType);
            $('#deleteItem-id').text(itemId);
            $('#deleteItem-name').text(itemName);
            $('#deleteConfirmationForm').attr('action', $(this).attr('href'));
        });
    });
</script>

