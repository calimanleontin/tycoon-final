var $collectionHolder;

// setup an "add a tag" link
var $addAttribute = $('<a href="#" class="add_attribute_field">Add additional attribute</a>');
var $newAttributeLi = $('<li></li>').append($addAttribute);

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
    $collectionHolder = $('ul.attributes');

    // add a delete link to all of the existing tag form li elements
    $collectionHolder.find('li').each(function() {
        addAttributeFormDeleteLink($(this));
    });

    // add the "add a tag" anchor and li to the tags ul
    $collectionHolder.append($newAttributeLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addAttribute.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addAttributeForm($collectionHolder, $newAttributeLi);
    });
});

function addAttributeForm($collectionHolder, $newAttributeLi) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormLi = $('<li></li>').append(newForm);
    $newAttributeLi.before($newFormLi);

    // add a delete link to the new form
    addAttributeFormDeleteLink($newFormLi);
}

function addAttributeFormDeleteLink($attributeFormLi) {
    var $removeFormA = $('<li><a href="#">Delete attribute</a></li>');
    $attributeFormLi.append($removeFormA);

    $removeFormA.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // remove the li for the tag form
        $attributeFormLi.remove();
    });
}