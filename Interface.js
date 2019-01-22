var _this = this;
var customer = {
    name: "khalid",
    age: 45,
    location: "khora colony ghaziabad",
    toString: function () {
        console.log(_this.name + " " + _this.age);
    }
};
console.log(typeof (customer));
var drow = function (p) {
    console.log(p.name + " " + p.age + "" + p.location);
    p.toString();
};
