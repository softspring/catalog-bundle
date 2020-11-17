(function($) {
    function removePackProduct($removeNodeLink)
    {
        var $removeRow = $removeNodeLink.closest('.node-row');

        // custom for this
        var $nodes = $removeRow.parent().find('.node-row');
        var nodes = $nodes.length;

        $removeRow.remove();

        // custom for this
        if (nodes-1 <= 1) {
            $nodes.find('.remove_pack_product').hide();
        }
    }

    function getPackProductCollectionLastIndex($collection)
    {
        return $collection.find('.node-row').length - 1; // parseInt($collection.find('.node-row').last().data('index'));
    }

    function addPackProduct ($addNodeLink)
    {
        var $collection = $($addNodeLink.data('collection'));
        var initialIndex = 0; // parseInt($collection.attr('data-initial-index'));
        var lastIndex = getPackProductCollectionLastIndex($collection);
        var index = isNaN(lastIndex) ? 0 : (lastIndex <= initialIndex ? initialIndex+1 : lastIndex+1);

        // create and process prototype
        var prototype = $collection.data('prototype');
        var newRow = prototype.replace(/__name__/g, index);
        var $newRow = $(newRow);

        // append node to form
        $collection.append($newRow);

        $collection.find('.remove_pack_product').show();
    }

    $('.pack-product-collection').each(function() {
        var $collection = $(this);
        var lastIndex = getPackProductCollectionLastIndex($collection);
        $collection.attr('data-initial-index', isNaN(lastIndex) ? '' : lastIndex);
    });

    $(document).on('click', '.add_pack_product', function(event){
        event.preventDefault();
        addPackProduct($(this));
    });

    $(document).on('click', '.remove_pack_product', function(event){
        event.preventDefault();
        removePackProduct($(this));
    });
})(jQuery);