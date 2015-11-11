var subscription = [];
var product = [];
var fighter = [];

function processing(type, id) {
    var compareUrl = 'http://tycoon-shop.internship1-dev.emag.local/app_dev.php/compare/';
    switch (type) {
        case 'Fighter':
            if (fighter.length == 1 && fighter[0] == id) {
                fighter.pop();

                return;
            }
            fighter.push(id);

            if (fighter.length == 2) {
                var url = compareUrl + fighter[0] + '/' + fighter[1];
                window.location = url;
            }

            break;

        case 'Subscription':
            if (subscription.length == 1 && subscription[0] == id) {
                subscription.pop();

                return;
            }
            subscription.push(id);

            if (subscription.length == 2) {
                var url = compareUrl + subscription[0] + '/' + subscription[1];
                window.location = url;
            }

            break;

        case 'Consumable':
            if (product.length == 1 && product[0] == id) {
                product.pop();

                return;
            }
            product.push(id);

            if (product.length == 2) {
                var url = compareUrl + product[0] + '/' + product[1];
                window.location = url;

            }

            break;
    }
}
