var showProduct=function(name,brand,cost){
    return function(discount){
        console.log('The product is:',name,'||Brand is:',brand,'||Cost is:',cost,'||Discount is:',cost-discount);
     }
}
var print=showProduct('bread','amul',100);
print(20);