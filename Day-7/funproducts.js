var Product = function (product_name, price) {
    this.product = product_name;
    this.price = price;
    this.printDetails = function () {
        console.log('Name of the product is ', this.product);
        console.log('Price of the product is', this.price);
    }
}

var product = new Product('cake', 300);
product.printDetails();
var product1 = new Product('cookies', 100);
product1.printDetails();

Product.prototype.brand = 'Amul';
Product.prototype.discountPrice = function (discount) {
    console.log('New price of', this.product, 'is', (this.price - discount), '/-');
}

product.discountPrice(50);
product1.discountPrice(30);