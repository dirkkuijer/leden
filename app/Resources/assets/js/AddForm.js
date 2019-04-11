jQuery(document).ready(function() {
    $(document).on('click', '#collection-add', function () {

        console.log('Item toegevoegd.');

        var $collectionContainer = $('#' + $(this).data('collection'));
       // hier gebruike we de tweede regel niet.
        var insertOrder = $(this).data('insert-order') || 'last';
        var prototype = $collectionContainer.attr('data-prototype');
        var prototypeName = $collectionContainer.attr('data-prototype-name') || '__name__';


        var lastCollectionItem = $collectionContainer.children().last();
        var lastCollectionItemInputName = $('input', lastCollectionItem).first().attr('name');

        var newIndex = 0;

        if (!$collectionContainer.attr('data-index')) {
            if ($collectionContainer.children().length > 0) {
                var prototypeInputName = $('input', $(prototype)).first().attr('name');
                var splittedStr = prototypeInputName.split(prototypeName);
                var leftSideStr = splittedStr[0];
                var rightSideStr = splittedStr[1];

                newIndex = parseInt(lastCollectionItemInputName.replace(leftSideStr, '').replace(rightSideStr, '')) + 1;
            }
        } else {
            /* NEWERER method to determine next input index */
            $collectionContainer.attr('data-index', function(idx, val) {
                newIndex = parseInt(val) + 1
                return newIndex
            });
        }

        var prototypeRegExp = new RegExp(prototypeName, "g");
        var item = prototype.replace(prototypeRegExp, newIndex);

        if (insertOrder == 'last' || (typeof insertOrder === typeof undefined && insertOrder === false)) {
            $collectionContainer.append(item);
        } else {
            $collectionContainer.prepend(item);
        }

        return false;

    });

    $(document).on('click', '.collection-remove', function () {
        console.log('remove');
        var $collectionItem = $(this).closest('.' + $(this).data('collection-item-class'));
        $collectionItem.remove();

        return false;
    });
});
