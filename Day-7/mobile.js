var mobile1 = {
    model: 'Y90',
    brand: 'vivo',
    color: 'grey',
    accesories: ['charger', 'earphones', 'temperglass', 'mobile cover'],
    feature: {
        ram: '6GB',
        screensize: '6.2 inches',
        camera: '8 MP'
    },
    price: '20000/-',
    show: function (model, brand) {
        console.log(model, brand);

    }
}

var mobile2 = {
    model: 'A4',
    brand: 'samsung',
    color: 'white',
    accesories: ['charger', 'earphones', 'temperglass', 'mobile cover'],
    feature: {
        ram: '6GB',
        screensize: '5.5 inches',
        camera: '13MP'
    },
    price: '19000/-',
    show: function (model, brand) {
        console.log(model, brand);
    }
}
console.log('******** Details of mobile 1*******');
for (key in mobile1) {
    var phone = mobile1[key];
    if (phone instanceof Array) {
        phone.forEach(Element => console.log('accesories:' + Element))
    } else if (typeof phone == 'object') {
        for (const key in phone) {
            console.log(key + ':' + phone[key]);
        }
    }
    else if (typeof (phone) == 'function') {
        phone(mobile1.model, mobile1.brand);
    }
    else {
        console.log(key + ":" + phone);
    }
}

console.log('******** Details of mobile 2*******');

for (key in mobile2) {
    var phone = mobile2[key];
    if (phone instanceof Array) {
        phone.forEach(Element => console.log('accesories:' + Element))
    } else if (typeof phone == 'object') {
        for (const key in phone) {
            console.log(key + ':' + phone[key]);
        }
    }
    else if (typeof (phone) == 'function') {
        phone(mobile2.model, mobile2.brand);
    }
    else {
        console.log(key + ":" + phone);
    }
}

